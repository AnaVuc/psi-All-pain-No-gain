<?php namespace App\Models;

use CodeIgniter\Model;

class OstavljenaZaModel extends Model
{
    protected $table  ='ostavljena_za';
    protected $primaryKey = 'idOZ';

    protected $returnType     = 'object';
   

    protected $allowedFields = ['idR','Korisnicko_ime','idRec'];

}
