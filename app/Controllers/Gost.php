<?php namespace App\Controllers;
use App\Models\ModeratorModel;
use App\Models\KorisnikModel;
class Gost extends BaseController


{
    protected function prikaz($page,$data) {
     
        $data['controller']='Gost';
        echo view('sablon/header');
        echo view("stranice/$page",$data);
        echo view('sablon/footer');
        
    }

	//--------------------------------------------------------------------
    public function index(){
       // $vestModel=new VestModel();
       // $vesti=$vestModel->findAll();
         

            //echo view ('stranice/BoxRestoran',['niz'=>$restorani]);
            //$filter=$restoranModel->dohvatiRestoraneOcena("4.5");
          
            //echo view('sablon/test',['restoran'=>$filter]);
            //echo view('sablon/ajaxsearch');
            
        $this->prikaz('registracija', []);
        $this->prikaz('logovanje', []);
    }
   
    
    public function login($por=null){
        $this->prikaz('logovanje', ['poruka'=>$por]);
    }
    public function kreiranje($por=null){
        $this->prikaz('registracija', ['poruka'=>$por]);
    }
    
    public function kreirajNalog(){
    
      if(!$this->validate(['Korisnicko_ime'=>'trim|alpha_dash|required|min_length[6]|max_length[18]',
            'Password'=>'trim|required|min_length[6]|max_length[18]|alpha_numeric', 
            'Ime'=>'trim|required|min_length[3]|max_length[18]',
            'Prezime'=>'trim|required|min_length[3]|max_length[18]',
           ],
              [
             'Korisnicko_ime'=>[
                 'min_length' => 'Minimalna dužina polja je 6 karaktera',
                 'required'=>'Ovo polje je obavezno',
                 'max_length' => 'Maksimalna dužina polja je 18 karaktera'
            ],
              'password'=>[
                 'min_length' => 'Minimalna dužina polja je 6 karaktera',
                 'required'=> 'Ovo polje je obavezno',
                 'max_length' => 'Maksimalna dužina polja je 18 karaktera',
                 'alpha_numeric'=>'Ovo polje mora da sadrži samo slova i cifre'
            ],
              'Ime'=>[
                 'min_length' => 'Minimalna dužina polja je 3 karaktera',
                 'required'=> 'Ovo polje je obavezno',
                 'max_length' => 'Maksimalna dužina polja je 18 karaktera'
            ],
              'prezime'=>[
                 'min_length' => 'Minimalna dužina polja je 3 karaktera',
                 'required'=> 'Ovo polje je obavezno',
                 'max_length' => 'Maksimalna dužina polja je 18 karaktera'
            ]]
              )){
            return $this->prikaz('registracija', 
                ['errors'=>$this->validator->getErrors()]);
       }
      
        //ubacimo u bazu ako je sve ok
        //gde ide?
        
       
       $kormod=new KorisnikModel();
       
        $kor=$kormod->find($this->request->getVar('Korisnicko_ime'));
        if($kor!=null) 
           
         return  $this->kreiranje('Korisničko ime već postoji!');
      
        
        
       //
        
           // 'Pol'=>$this->request->getVar('pol'),//apdejt
        $kormod->insert([
            'Korisnicko_ime'=>$this->request->getVar('Korisnicko_ime'),
            
            'Password'=>$this->request->getVar('Password'),
            'Ime'=>$this->request->getVar('Ime'),
            'Prezime'=>$this->request->getVar('Prezime')
        ]);
        echo 'Baza je azururana';
            //na koju stranu da skocimo
            }
    
    public function loginSubmit(){
        if(!$this->validate(['Korisnicko_ime'=>'required', 'Password'=>'required'])){
            return $this->prikaz('logovanje', 
                ['errors'=>$this->validator->getErrors()]);
        }
        $korModel=new KorisnikModel();
        
        $kor=$korModel->find($this->request->getVar('Korisnicko_ime'));
     
        
        if($kor==null)
            return $this->login('Korisnik ne postoji');
        if($kor->Password!=$this->request->getVar('Password')){
            return $this->login('Pogresna lozinka');
        }
        
           //$regModel=new RegKorisnikModel();
           //$moder=new ModeratorModel();
           
           //$m=$moder->find($this->request->getVar('Korisnicko_ime'));
          // if($m==null){
               //echo "Registrovani korisnik"; 
               //skace na stranicu za korisnika
              
               $this->session->set('korisnik', $kor);      
               return redirect()->to(site_url('Korisnik'));
               
          // }
          // else
           //{
            //   echo 'Moderator';
           //skace na stranicu za moderatora
           // $this->session->set('korisnik', $kor);
        
           }
        
   
        //return redirect()->to(site_url('Korisnik'));
        
        
        
        
    }

