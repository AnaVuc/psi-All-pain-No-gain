<?php namespace App\Models;

use CodeIgniter\Model;

class PoseceniRestoraniModel extends Model
{
    protected $table  ='poseceni_restorani';
    protected $primaryKey = 'idPosR';

    protected $returnType     = 'object';
   

    protected $allowedFields = ['idR','Korisnicko_ime'];

}
