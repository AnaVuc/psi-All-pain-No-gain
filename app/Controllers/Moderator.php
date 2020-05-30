<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KorisnikModel;

class Moderator extends BaseController
{
    public function index()
    {
       $data['korisnik']=$this->session->get('korisnik'); 
       $mod=$this->session->get('korisnik'); 
       echo view('sablon/header_mod');
      // $korisnikModel=new KorisnikModel();
       //$korisnici=$korisnikModel->findAll();
       //echo view('stranice/moderatorUklanjanjeKorisnika',['korisnici'=>$korisnici]);
       echo view('stranice/moderator_pocetna');
       echo view('sablon/footer');


    }

    public function ukloniKorisnika(){
        $korisnikModel=new KorisnikModel();
        $korisnikModel->delete($this->request->getVar('Korisnicko_ime'));
        return redirect()->to(site_url('Moderator'));
    }
    
    public function ispisUklanjanjeKorisnika(){
        $data['korisnik']=$this->session->get('korisnik'); 
        $korisnikModel=new KorisnikModel();
        $korisnici=$korisnikModel->findAll();
        echo view('sablon/header_mod');
        echo view('stranice/moderatorUklanjanjeKorisnika',['korisnici'=>$korisnici]);
        echo view('sablon/footer');
    }
    
    public function ispisRecenzija(){
        echo view('sablon/header_mod');
        echo view('stranice/moderatorRecenzije');
        echo view('sablon/footer');
    }
    
    public function odobriRecenziju($id) {
        $recenzijaModel=new \App\Models\RecenzijaModel();
        $restoranModel=new \App\Models\RestoranModel();
        $recenzija=$recenzijaModel->find($id);
        $restoran=$restoranModel->find($recenzija->idR);
        $mod=$this->session->get('korisnik');
        $recenzijaModel->update($recenzija->idRec,["Korisnicko_ime"=>$mod->Korisnicko_ime]); 
        $noviBrojRecenzija=$restoran->brojRecenzija+1;
        $restoranModel->update($restoran->idR,["brojRecenzija"=>$noviBrojRecenzija]);
        if($recenzija->Ocena!=null){
            $noviZbirOcena=$restoran->zbirOcena+$recenzija->Ocena;
            $restoranModel->update($restoran->idR,["zbirOcena"=>$noviZbirOcena]);
            $restoranModel->update($restoran->idR,["Prosecna_ocena"=>[$noviZbirOcena*1.0/$noviBrojRecenzija]]);
        }
        return redirect()->to(site_url('Moderator/ispisRecenzija'));
        
    }
    
    public function odbijRecenziju($id) {
        $recenzijaModel=new \App\Models\RecenzijaModel();
        $ostavljenaZaModel=new \App\Models\OstavljenaZaModel();
        $recenzija=$recenzijaModel->find($id);
        $ostavljenaZa=$ostavljenaZaModel->where('idRec',$id);
        $recenzijaModel->delete($recenzija->idRec);
        $ostavljenaZaModel->delete($ostavljenaZa->idOZ);
        return redirect()->to(site_url('Moderator/ispisRecenzija'));
        
    }
}