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
    
    public function dohvatiRestoranSaId($param){
        return $test=$this->where('idR',$param)->findAll();
        
    }
    
    public function dohvatiRestoraneOcena($param){
        return $test=$this->where('Prosecna_ocena',$param)->findAll();
        
    }
    
    public function dohvatiRestoraneCena($param){
        return $test=$this->where('Cenovni_rang',$param)->findAll();
        
    }
    
    public function GetCatSearchName($search_name){
    $qry = $this->db->select('*')->from('Restoran')
                    ->where("Ime LIKE '%$search_name%'")
                    ->get()->result(); // select data like rearch value.
    return $qry;
}
    
    function fetch_data($query)
 {
        $this->db->select("*");
        $this->db->from("Restoran");
        if($query != '')
        {
         $this->db->like('Ime', $query);
         $this->db->or_like('Addresa', $query);
         
         
        }
        return $this->db->get();
 }
    
    
    
}
