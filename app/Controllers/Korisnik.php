<?php namespace App\Controllers;

use App\Models\RestoranModel;

class Korisnik extends BaseController

{
   
    public function index(){
        $restoranModel=new RestoranModel();
        $restorani=$restoranModel->findAll();
       $data['restorani']=$restorani;
        $data['controller']='Korisnik';
        $data['korisnik']=$this->session->get('korisnik'); 
        $korisnik=$this->session->get('korisnik'); 
        echo view('sablon/header_ulogovan',$data); 
        $this->najpopularniji($restorani);
        echo view('sablon/dobrodoslica');
        $this->sortPoOceni($restorani);
        echo view('sablon/footer');
        
    }
 
    
    public function promena_lozinke($poruka=null){
          
        return $this->prikaz('promenasifre',['poruka'=>$poruka]);
    }
    
    public function promenaLoz(){
           
             
            
        if(!$this->validate(['Password'=>'required', 'new'=>'required|min_length[6]|max_length[18]|alpha_numeric', 'new2'=>'required|matches[new]|min_length[6]|max_length[18]|alpha_numeric'],
                ['password'=>[
                 'required'=> 'Ovo polje je obavezno',
                ],
                 'new'=>[
                 'alpha_numeric'=>'Ovo polje mora da sadrži samo slova i cifre',
                 'min_length' => 'Minimalna dužina polja je 6 karaktera',
                 'required'=> 'Ovo polje je obavezno',
                 'max_length' => 'Maksimalna dužina polja je 18 karaktera'
                ],
                 'new2'=>[
                 'matches'=>'Pogrešno uneta šifra', 
                 'alpha_numeric'=>'Ovo polje mora da sadrži samo slova i cifre',
                 'min_length' => 'Minimalna dužina polja je 6 karaktera',
                 'required'=> 'Ovo polje je obavezno',
                 'max_length' => 'Maksimalna dužina polja je 18 karaktera'
                ]])) 
                 {
            
                return $this->prikaz('promenasifre', ['errors'=>$this->validator->getErrors()]);
            }
         //provera da li je to njegova sifra
            $korModel=new KorisnikModel();
            $prom=$this->session->get('korisnik');
            if($prom->Password!=$this->request->getVar('Password'))
              return $this->promena_lozinke('Pogresna stara lozinka');
           
          //promena u bazi
            
            $korModel->update($prom->Username,['Password'=>$this->request->getVar('new')]);
            
              //gde da skoci??
           
           return redirect()->to(site_url('Korisnik'));
    }
    
    
    
        
    public function ispisiNalog(){
        echo view('sablon/header_ulogovan');
        echo view('stranice/nalog');
        echo view('sablon/footer');
    }
    
     


}
