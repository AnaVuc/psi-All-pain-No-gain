<?php namespace App\Models;

use CodeIgniter\Model;

class KorisnikModel extends Model
{
    protected $table      = 'registrovan_korisnik';
    protected $primaryKey = 'Korisnicko_ime';

    protected $returnType     = 'object';
   

    protected $allowedFields = ['Password', 'Ime','Prezime'];
    
   

}