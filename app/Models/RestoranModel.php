<?php namespace App\Models;

use CodeIgniter\Model;

class RestoranModel extends Model
{
    protected $table      = 'restoran';
    protected $primaryKey = 'idR';

    protected $returnType     = 'object';

    protected $allowedFields = ['Ime', 'Broj_telefona','Adresa','Sajt','Vrsta_hrane','Cenovni_rang','Prosecna_ocena','idSl','brojRecenzija'];

 
    public function dohvatiRestoraneVH($param){
        return $test=$this->where('Vrsta_hrane',$param)->findAll();
        
    }
    
    public function dohvatiRestoraneOcena($param){
        return $test=$this->where('Prosecna_ocena',$param)->findAll();
        
    }
    
    public function dohvatiRestoraneCena($param){
        return $test=$this->where('Cenovni_rang',$param)->findAll();
        
    }
    
    
    
}
