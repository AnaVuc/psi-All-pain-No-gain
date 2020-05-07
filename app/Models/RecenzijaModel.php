<?php namespace App\Models;

use CodeIgniter\Model;

class RecenzijaModel extends Model
{
    protected $table      = 'recenzija';
    protected $primaryKey = 'idRec';

    protected $returnType     = 'object';
   

    protected $allowedFields= ['Ime','Prezime'];

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

