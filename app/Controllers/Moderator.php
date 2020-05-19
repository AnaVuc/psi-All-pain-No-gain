<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KorisnikModel;

class Moderator extends BaseController
{
    public function index()
    {
       echo view('sablon/header_ulogovan');
       echo view('stranice/moderator_pocetna');
       $korisnikModel=new KorisnikModel();
       $korisnici=$korisnikModel->findAll();
       echo view('stranice/moderatorUklanjanjeKorisnika',['korisnici'=>$korisnici]);
       echo view('sablon/footer');


    }

    public function ukloniKorisnika(){
        $korisnikModel=new KorisnikModel();
        $korisnikModel->delete($this->request->getVar('Korisnicko_ime'));
        return redirect()->to(site_url('Moderator'));
    }
}