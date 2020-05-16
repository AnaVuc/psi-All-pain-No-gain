<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends BaseController
{
    public function index()
    {
       echo view('sablon/header_ulogovan');
       echo view('stranice/admin_pocetna');
       echo view('sablon/footer');

    }

    
}