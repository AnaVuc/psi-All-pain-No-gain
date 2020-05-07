<?php namespace App\Models;

use CodeIgniter\Model;

class RestoranModel extends Model
{
    protected $table      = 'restoran';
    protected $primaryKey = 'idR';

    protected $returnType     = 'object';

    protected $allowedFields = ['Ime', 'Broj_telefona','Adresa','Sajt','Vrsta_hrane','Cenovni_rang','Prosecna_ocena','idSl'];

 
}
