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
    
    function fetch_data($query)
 {
        //var_dump($query);
        $this->select("*");
        $this->from("Restoran");
        if($query != '')
        {
         $this->like('Ime', $query);
         var_dump($this);
         $this->or_like('Addresa', $query);
        }
        return $this->get();
 }
    
    
    
}
