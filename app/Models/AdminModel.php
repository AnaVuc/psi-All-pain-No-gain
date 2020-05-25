<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table  ='admin';
    protected $primaryKey = 'Korisnicko_ime';

    protected $returnType     = 'object';
   

    protected $allowedFields = ['Korisnicko_ime','Password'];


    public function nadjiPoKI($kor_ime){
         $rez=$this->where('Korisnicko_ime',$kor_ime)->find();
         foreach ($rez as $r){
            return $r;
         }
      
   }
}
