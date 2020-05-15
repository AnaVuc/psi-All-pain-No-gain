<?php namespace App\Models;

use CodeIgniter\Model;

class KorisnikModel extends Model
{
    protected $table      = 'registrovan_korisnik';
    protected $primaryKey = 'Korisnicko_ime';

    protected $returnType     = 'object';
   

    protected $allowedFields = ['Password', 'Ime','Prezime'];
    
   
    protected $beforeInsert=['beforeInsert'];
    protected $beforeUpdate=['beforeUpdate'];
    
    
    protected function beforeInsert(array $data){
        $data=$this->passwordHash($data);
        return $data;
    }
       protected function beforeUpdate(array $data){
          $data=$this->passwordHash($data);
        return $data;
        
    }
    protected function passwordHash(array $data){
        if (isset($data['data']['Password'])) {
            $data['data']['Password'] = password_hash($data['data']['Password'], PASSWORD_DEFAULT);
        }
        return $data;
    }

}