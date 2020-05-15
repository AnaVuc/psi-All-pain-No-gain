<?php namespace App\Controllers;



class Korisnik extends BaseController

{
    
    
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
         function register(){
            $data=[];
            helper(['form']);
            
            if($this->request->getMethod()=='post'){
                //do validation here
                $rules=[
                    'Ime'=>'required|min_length[3]|max_length[20]',
                    'Prezime'=>'required|min_length[3]|max_length[20]',
                    'Korisnicko_ime'=>'required|min_length[3]|max_length[20]|is_unique[registrovan_korisnik.Korisnicko_ime]',
                    'Password'=>'required|min_length[6]|max_length[20]',
                    
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
                                'Password'=> $this->request->getVar('Password'),
                            ];
                            $model->save($newData);
                            $session=session();
                            $session->setFlashdata('success','Uspesno registrovanje');
                            
                            return redirect()->to('/');
                         
                        }
            }
            
            echo view('sablon/header',$data);
            echo view('register');
            echo view('sablon/footer');
        }
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
