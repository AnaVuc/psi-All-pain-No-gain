<?php namespace App\Models;

use CodeIgniter\Model;

class KorisnikModel extends Model
{
    protected $table      = 'registrovan_korisnik';
    protected $primaryKey = 'Korisnicko_ime';

    protected $returnType     = 'object';
   

    protected $allowedFields = ['Korisnicko_ime','Password', 'Ime','Prezime'];
    
   public function nadjiPoKI($kor_ime){
         $rez=$this->where('Korisnicko_ime',$kor_ime)->find();
         foreach ($rez as $r){
            return $r;
         }
      
   }
}