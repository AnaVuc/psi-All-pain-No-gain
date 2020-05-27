<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KorisnikModel;
use App\Models\ModeratorModel;

class Admin extends BaseController
{
    public function index()
    {
       echo view('sablon/header_ulogovan');
       echo view('stranice/admin_pocetna');
       echo view('sablon/footer');

    }
    
    public function ispisDodavanjeModeratora(){
       echo view('sablon/header_ulogovan');
       echo view('stranice/adminDodavanjeModeratora');
       echo view('sablon/footer');
    }
    
    public function ispisUklanjanjeModeratora(){
       echo view('sablon/header_ulogovan');
       echo view('stranice/adminUklanjanjeModeratora');
       echo view('sablon/footer');
    }
    
    
    public function dodajModeratora($korIme) {
        $korisnikModel=new \App\Models\KorisnikModel();
        $moderatorModel=new \App\Models\ModeratorModel();
        $korisnik=$korisnikModel->find($korIme);
        $moderatorModel->insert([
            'Korisnicko_ime'=>$korisnik->Korisnicko_ime,
            'Password'=>$korisnik->Password,
            'Ime'=>$korisnik->Ime,
            'Prezime'=>$korisnik->Prezime
        ]);
        $korisnikModel->delete($korisnik->Korisnicko_ime);
        return redirect()->to(site_url('Admin/ispisDodavanjeModeratora'));
    }
    
    public function ukloniModeratora($korIme){
        $korisnikModel=new \App\Models\KorisnikModel();
        $moderatorModel=new \App\Models\ModeratorModel();
        $moderator=$moderatorModel->find($korIme);
        $korisnikModel->insert([
            'Korisnicko_ime'=>$moderator->Korisnicko_ime,
            'Password'=>$moderator->Password,
            'Ime'=>$moderator->Ime,
            'Prezime'=>$moderator->Prezime
        ]);
        $moderatorModel->delete($moderator->Korisnicko_ime);
        return redirect()->to(site_url('Admin/ispisUklanjanjeModeratora'));
    }
}