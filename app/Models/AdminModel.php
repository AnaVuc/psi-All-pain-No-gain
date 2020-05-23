<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table  ='admin';
    protected $primaryKey = 'Korisnicko_ime';

    protected $returnType     = 'object';
   

    protected $allowedFields = ['Korisnicko_ime','Password'];

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

