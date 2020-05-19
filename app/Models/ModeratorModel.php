<?php namespace App\Models;

use CodeIgniter\Model;

class ModeratorModel extends Model
{
    protected $table      = 'moderator';
    protected $primaryKey = 'Korisnicko_ime_mod';

    protected $returnType     = 'object';
   

    protected $allowedFields= ['Korisnicko_ime_mod','Password'];

}
