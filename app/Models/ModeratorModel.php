<?php namespace App\Models;

use CodeIgniter\Model;

class ModeratorModel extends Model
{
    protected $table      = 'moderator';
    protected $primaryKey = 'Korisnicko_ime';

    protected $returnType     = 'object';
   

    protected $allowedFields= ['Korisnicko_ime','Password','Ime','Prezime'];
    
    
    public function nadjiPoKI($kor_ime){
       $rez=  $this->where('Korisnicko_ime',$kor_ime)->find();
         foreach ($rez as $r){
            return $r;        
            }
    }

}
