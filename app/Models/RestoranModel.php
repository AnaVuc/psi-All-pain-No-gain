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
    
    public function dohvatiRestoranOcena($min,$max){
         $test=$this->where('Prosecna_ocena >', $min)
         ->where('Prosecna_ocena <', $max)->findAll();
         return $test;
                    
        
    }
    
    
    public function dohvatiRestoraneCena($param){
        return $test=$this->where('Cenovni_rang',$param)->findAll();
        
    } 
    public function filter($vh=null,$ocena=null,$cena=null,$sort=null){
        $builder = $this;
        //filter: vrsta hrane
        if (!empty($vh)) {
            $builder = $builder->whereIn('Vrsta_hrane',$vh);
        }
        
        
        //filter:cena
        if (!empty($cena)){
            $builder=$builder->whereIn('Cenovni_rang',$cena);
        }
        //filter:ocena  !!mora petlja-kako uzeti sva resenja?
        if (!empty($ocena)){
            $duzina= count($ocena);
            $i=0;
            for ($i=0;$i<$duzina;$i=$i+1){
                 $min=(int)$ocena[$i][0];
                 $max=(int)$ocena[$i][1];
               
                $where= "Prosecna_ocena BETWEEN {$min} AND {$max}";
                $builder=$builder->where($where);
                //var_dump($builder);
              }
             
        }
        
        if(!empty($sort)){
            if ($sort=="Ocena"){
                $builder=$builder->orderBy('Prosecna_ocena','DESC');
            }
            if ($sort=="Cena"){
                 $builder=$builder->orderBy('Cenovni_rang','DESC');
            }
            if ($sort=="Popularnost"){
                //'Prosecna_ocena * brojRecenzija as popularnost'
                $builder=$builder->select('*,Prosecna_ocena * brojRecenzija as popularnost',FALSE)
                        ->orderBy('popularnost','DESC');
            }
            
        }        
        
        $builder=$builder->findAll();  
        return $builder;//site_url("BaseController/ispisSvihRestorana/{$builder}");
        
    }
    
    public function brojRestorana() {
        return $test= $this->countAll();
        
        
    }
    public function pretraga($tekst){
            $this->like('Ime',$tekst)->orLike('Adresa',$tekst)->findAll();
       }
    
 
    
    
    
}
