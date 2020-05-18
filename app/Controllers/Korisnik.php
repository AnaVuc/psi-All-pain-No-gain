<?php namespace App\Controllers;

use App\Models\RestoranModel;

class Korisnik extends BaseController

{
   
    public function index(){
        $restoranModel=new RestoranModel();
        $restorani=$restoranModel->findAll();
        
        $data['controller']='Korisnik';
        $data['korisnik']=$this->session->get('korisnik'); 
        echo view('sablon/header_ulogovan',$data);
        $this->najpopularniji($restorani);
        //echo view("stranice/BoxRestoran", ['restoran'=>$restorani]);
        echo view('sablon/dobrodoslica');
        $this->sortPoOceni($restorani);
        //var_dump($restorani);
        //echo view ('stranice/najboljeOcenjeni',['restoran'=>$restorani]);
        echo view('sablon/footer');
    }
    
    protected function prikaz($page, $data) {
        
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
    
    
    public function izlogujse() {
            $this->session->destroy();
           return  redirect()->to(site_url('/')); //podrazumevano
        }
    
      // protected function prikaz($page,$data) {
        
     //   $data['controller']='Korisnik';
        //$data['autor']=$this->session->get('autor');
       //// echo view('sablon/header_korisnik',$data);
      //  echo view("stranice/$page",$data);
      //  echo view('sablon/footer');
        
        
        
        
      //  public function logout(){
            //$this->session->destroy();
           // return redirect()->to(site_url('/'));
       // }
        
        //public function dodajVest(){
      //      $this->prikaz('dodavanjevesti',[]);
            
      //  }
    /*public function index(){
        $data=[];
        helper(['form']);
              
            
            if($this->request->getMethod()=='post'){
                //do validation here
                $rules=[
                    
                    'Korisnicko_ime'=>'required|min_length[3]|max_length[20]',
                    'Password'=>'required|min_length[6]|max_length[20]|validateuser[Korisnicko_ime, Password]'
                    
                ];
                $errors=[
                    'Password'=>[
                        'validateuser'=>'Korisnicko ime ili password se ne poklapaju'
                    ]
                ];
                
                if(!$this->validate($rules)){
                    $data['validation']=$this->validator;
                }
                        else{
                            //ubaci novog korisnika
                            $model=new \App\Models\KorisnikModel();
                            
                            $user= $model->where("Korisnicko_ime", $this->request->getVar("Korisnicko_ime"))->first();
                            
                            $this->setUserSession($user);
                            //$session->setflashdata('success','Uspesna registracija');
                            return redirect()->to('dashboard.php');
                            /*$newData=[
                               'Ime'=> $this->request->getVar('Ime'),
                                'Prezime'=> $this->request->getVar('Prezime'),
                                'Korisnicko_ime'=> $this->request->getVar('Korisnicko_ime'),
                                'Password'=> $this->request->getVar('Password')
                            ];
                            $model->save($newData);
                            $session=session();
                            $session->setFlashdata('success','Uspesno registrovanje');
                            
                            return redirect()->to('/');*/
                         
                    /*    }
            }
            
            echo view('sablon/header',$data);
            echo view('registracija');
            echo view('sablon/footer');
        }
        
        private function setUserSession($user){
            $data=[
                'Ime'=>$user['Ime'],
            'Prezime'=>$user['Prezime'],
            'Korisnicko_ime'=>$user['Korisnicko_ime'],
            'ulogovan'=>true
            
                
            ];
            session()->set($data);
            return true;
        }
        
        
    
        public  function register(){
            $data=[];
            helper(['form']);
            
            if($this->request->getMethod()=='post'){
                //do validation here
                $rules=[
                    'Ime'=>'required|min_length[3]|max_length[20]',
                    'Prezime'=>'required|min_length[3]|max_length[20]',
                    'Korisnicko_ime'=>'required|min_length[3]|max_length[20]|is_unique[registrovan_korisnik.Korisnicko_ime]',
                    'Password'=>'required|min_length[6]|max_length[20]'
                    
                ];
                if(!$this->validate($rules)){
                    $data['validation']=$this->validator;
                }
                        else{
                            //ubaci novog korisnika
                            $model=new \App\Models\KorisnikModel();
                            $newData=[
                               'Ime'=> $this->request->getVar('Ime'),
                                'Prezime'=> $this->request->getVar('Prezime'),
                                'Korisnicko_ime'=> $this->request->getVar('Korisnicko_ime'),
                                'Password'=> $this->request->getVar('Password')
                            ];
                            $model->save($newData);
                            $session=session();
                            $session->setFlashdata('success','Uspesno registrovanje');
                            
                            return redirect()->to('dasboard.php');
                         
                        }
            }
            
            echo view('sablon/header',$data);
            echo view('registracija');
            echo view('sablon/footer');
        } */
       // public function novaVest(){
        //    if ($this->validate(['naslov'=>'required|min_length[10]|max_length[50]',
         //       'sadrzaj'=>'required|min_lenght[10]'])){
         //       return $this->prikaz('dodavanjevesti',['errors'=> $this->validator->listErrors()]);
         //   }
         //   $vestModel= new VestModel();
          //  $vestModel->save(['naslov'=> $this->request->getVar('naslov'),
          //      'sadrzaj'=> $this->request->getVar('sadrzaj'),
          //      'autor'=> $this->session->get('autor')->korime
          //       ]);
          //  return redirect()->to(site_url("Korisnik/vest/{$vestModel->getInsertID()}")); //mora da se ne bi na f5 sve ponovo ucitavalo i ubacivalo u bazu
       // }
	

	//--------------------------------------------------------------------


}
