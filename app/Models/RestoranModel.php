<?php namespace App\Models;

use CodeIgniter\Model;

class RestoranModel extends Model
{
    protected $table      = 'restoran';
    protected $primaryKey = 'idR';

    protected $returnType     = 'object';

    protected $allowedFields = ['Ime', 'Broj_telefona','Adresa','Sajt','Vrsta_hrane','Cenovni_rang','Prosecna_ocena','idSl','brojRecenzija','zbirOcena'];

 
    public function dohvatiRestoraneVH($param){
        return $test=$this->where('Vrsta_hrane',$param)->findAll();
        
    }
    
    public function dohvatiRestoranSaId($param){
        return $test=$this->where('idR',$param)->findAll();
        
    }
    
    public function dohvatiRestoraneOcena($param){
        return $test=$this->where('Prosecna_ocena',$param)->findAll();
        
    }
    
    public function dohvatiRestoraneCena($param){
        return $test=$this->where('Cenovni_rang',$param)->findAll();
        
    } 
    
    public function brojRestorana() {
        return $test= $this->countAll();
        
        
    }
    public function pretraga($tekst){
            $this->like('Ime',$tekst)->orLike('Adresa',$tekst)->findAll();
       }
    
 
    
    
    
}
