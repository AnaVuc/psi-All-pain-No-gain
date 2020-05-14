<?php namespace App\Controllers;


class Gost extends BaseController


{
    protected function prikaz($page,$data) {
     
        $data['controller']='Gost';
        echo view('sablon/header');
        echo view("stranice/$page",$data);
        echo view('sablon/footer');
        
    }
    
   
        public function login($poruka1=null)
	{
            $this->prikaz('login',['poruka'=>$poruka1]);
	}
        
      
        
        public function loginSubmit(){
            if (!$this->validate(['Korisnicko_ime'=>'required','Password'=>'required'])){
                return $this->prikaz('login',['errors'=>$this->validator->getErrors()]);
            }
            $korisnikModel=new \App\Models\KorisnikModel();
            $korisnik=$korisnikModel->find($this->request->getVar('Korisnicko_ime'));
            if($korisnik==null){
                return  $this->login('Korisnik ne postoji!');
            }
            if($korisnik->Password!=$this->request->getVar('Password')){
                return  $this->login('Pogresna loznika!');
            }
            $this->session->set('korisnik',$korisnik->Korisnicko_ime);
            return redirect()->to(site_url('Korisnik'));
        }

	//--------------------------------------------------------------------

}
