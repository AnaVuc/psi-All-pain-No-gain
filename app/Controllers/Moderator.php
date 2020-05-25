<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KorisnikModel;

class Moderator extends BaseController
{
    public function index()
    {
       $data['korisnik']=$this->session->get('korisnik'); 
       $mod=$this->session->get('korisnik'); 
       echo view('sablon/header_mod');
      // $korisnikModel=new KorisnikModel();
       //$korisnici=$korisnikModel->findAll();
       //echo view('stranice/moderatorUklanjanjeKorisnika',['korisnici'=>$korisnici]);
       echo view('stranice/moderator_pocetna');
       echo view('sablon/footer');


    }

    public function ukloniKorisnika(){
        $korisnikModel=new KorisnikModel();
        $korisnikModel->delete($this->request->getVar('Korisnicko_ime'));
        return redirect()->to(site_url('Moderator'));
    }
    
    public function ispisUklanjanjeKorisnika(){
        $data['korisnik']=$this->session->get('korisnik'); 
        $korisnikModel=new KorisnikModel();
        $korisnici=$korisnikModel->findAll();
        echo view('sablon/header_mod');
        echo view('stranice/moderatorUklanjanjeKorisnika',['korisnici'=>$korisnici]);
        echo view('sablon/footer');
    }
}