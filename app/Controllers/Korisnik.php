<?php namespace App\Controllers;

use App\Models\RestoranModel;

class Korisnik extends BaseController

{
   
    public function index(){
        $restoranModel=new RestoranModel();
        $restorani=$restoranModel->findAll();
       $data['restorani']=$restorani;
        $data['controller']='Korisnik';
        $data['korisnik']=$this->session->get('korisnik'); 
        $korisnik=$this->session->get('korisnik'); 
        echo view('sablon/header_ulogovan',$data); 
        $this->najpopularniji($restorani);
        echo view('sablon/dobrodoslica');
        $this->sortPoOceni($restorani);
        echo view('sablon/footer');
        
    }
 
    
   
    
    
    
        
    public function ispisiNalog(){
        echo view('sablon/header_ulogovan');
        echo view('stranice/nalog');
        echo view('sablon/footer');
    }
    
     


}
