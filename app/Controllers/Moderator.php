<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Moderator extends BaseController
{
    public function index()
    {
       echo view('sablon/header_ulogovan');
       echo view('stranice/moderator_pocetna');
       echo view('sablon/footer');


    }
    
    
    public function ukloniKorisnika($korisnik){
        
    }

}