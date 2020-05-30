<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KorisnikModel;
use App\Models\ModeratorModel;

class Admin extends BaseController {

    public function index() {
        echo view('sablon/header_ulogovan');
        echo view('stranice/admin_pocetna');
        echo view('sablon/footer');
    }

    public function ispisDodavanjeModeratora() {
        echo view('sablon/header_ulogovan');
        echo view('stranice/adminDodavanjeModeratora');
        echo view('sablon/footer');
    }

    public function ispisUklanjanjeModeratora() {
        echo view('sablon/header_ulogovan');
        echo view('stranice/adminUklanjanjeModeratora');
        echo view('sablon/footer');
    }

    public function ispisUklanjanjeRestorana() {
        echo view('sablon/header_ulogovan');
        echo view('stranice/adminUklanjanjeRestorana');
        echo view('sablon/footer');
    }

    public function ispisDodavanjeRestorana() {
        echo view('sablon/header_ulogovan');
        echo view('stranice/adminDodavanjeRestorana');
        echo view('sablon/footer');
    }

    public function dodavanjeRestorana() {
        $ime = null;
        $adresa = null;
        $brojTelefona = null;
        $opis = null;
        $sajt = null;
        $vrstaHrane = null;
        $cenovniRang = null;
        if (isset($_POST['ime'])) {
            $ime = ($_POST['ime']);
        }
        if (isset($_POST['adresa'])) {
            $adresa = ($_POST['adresa']);
        }
        if (isset($_POST['telefon'])) {
            $brojTelefona = ($_POST['telefon']);
        }
        if (isset($_POST['sajt'])) {
            $sajt = ($_POST['sajt']);
        }
        if (isset($_POST['opisRestorana'])) {
            $opis = ($_POST['opisRestorana']);
        }
        if (isset($_POST['vrstaHrane'])) {
            $vrstaHrane = ($_POST['vrstaHrane']);
        }
        if (isset($_POST['cenovniRang'])) {
            $cenovniRang = ($_POST['cenovniRang']);
        }
        $slike = array();
        if (isset($_POST['slike'])) {
            foreach ($_POST['slike'] as $s) {
                $slike[] = $s;
            }
        }
        /* echo $ime.'<br>';
          echo $adresa.'<br>';
          echo $brojTelefona.'<br>';
          echo $sajt.'<br>';
          echo $opis.'<br>';
          echo $vrstaHrane.'<br>';
          echo $cenovniRang.'<br>';
          foreach ($slike as $slika) echo $slika; */
        $restoranModel = new \App\Models\RestoranModel();
        $slikaModel=new \App\Models\SlikaModel();
        $restoranModel->insert([
            'Ime' => $ime,
            'Broj_telefona' => $brojTelefona,
            'Adresa' => $adresa,
            'Sajt'=>$sajt,
            'Vrsta_hrane'=>$vrstaHrane,
            'Cenovni_rang'=>$cenovniRang,
            'Opis'=>$opis
        ]);
        $id=$restoranModel->getInsertID();
        $brojSlika = count($slike);
        $i = 0;
        $idSl=null;
        $found=0;
        while ($i < $brojSlika) {
            if ($slike[$i] != '') {
                $slikaModel->insert([
                    'Opis' => $slike[$i],
                    'idRec' => null,
                    'idR' => $id
                ]);
                if($found==0){
                    $found=1;
                    $idSl=$slikaModel->getInsertID();
                }
            }
            $i++;
        }
        $restoranModel->update($id,["idSl"=>$idSl]);
        return redirect()->to(site_url('Admin'));
    }

    public function dodajModeratora($korIme) {
        $korisnikModel = new \App\Models\KorisnikModel();
        $moderatorModel = new \App\Models\ModeratorModel();
        $korisnik = $korisnikModel->find($korIme);
        $moderatorModel->insert([
            'Korisnicko_ime' => $korisnik->Korisnicko_ime,
            'Password' => $korisnik->Password,
            'Ime' => $korisnik->Ime,
            'Prezime' => $korisnik->Prezime
        ]);
        $korisnikModel->delete($korisnik->Korisnicko_ime);
        return redirect()->to(site_url('Admin/ispisDodavanjeModeratora'));
    }

    public function ukloniModeratora($korIme) {
        $korisnikModel = new \App\Models\KorisnikModel();
        $moderatorModel = new \App\Models\ModeratorModel();
        $moderator = $moderatorModel->find($korIme);
        $korisnikModel->insert([
            'Korisnicko_ime' => $moderator->Korisnicko_ime,
            'Password' => $moderator->Password,
            'Ime' => $moderator->Ime,
            'Prezime' => $moderator->Prezime
        ]);
        $moderatorModel->delete($moderator->Korisnicko_ime);
        return redirect()->to(site_url('Admin/ispisUklanjanjeModeratora'));
    }

    public function ukloniRestoran($id) {
        $restoranModel = new \App\Models\RestoranModel();
        $recenzijaModel = new \App\Models\RecenzijaModel();
        $ostavljenaZaModel = new \App\Models\OstavljenaZaModel();
        $poseceniRestoraniModel = new \App\Models\PoseceniRestoraniModel();
        $slikaModel = new \App\Models\SlikaModel();
        $restoran = $restoranModel->find($id);
        $recenzije = $recenzijaModel->where('idR', $restoran->idR)->findAll();
        foreach ($recenzije as $recenzija) {
            $recenzijaModel->delete($recenzija->idRec);
        }
        $ostavljeneZa = $ostavljenaZaModel->where('idR', $restoran->idR)->findAll();
        foreach ($ostavljeneZa as $ostavljenaZa) {
            $ostavljenaZaModel->delete($ostavljenaZa->idOZ);
        }
        $ostavljeneZa = $ostavljenaZaModel->where('idR', $restoran->idR)->findAll();
        foreach ($ostavljeneZa as $ostavljenaZa) {
            $ostavljenaZaModel->delete($ostavljenaZa->idOZ);
        }
        $slike = $slikaModel->where('idR', $restoran->idR)->findAll();
        foreach ($slike as $slika) {
            $slikaModel->delete($slika->idSl);
        }
        $poseceni = $poseceniRestoraniModel->where('idR', $restoran->idR)->findAll();
        foreach ($poseceni as $posecen) {
            $poseceniRestoraniModel->delete($posecen->idPosR);
        }
        $restoranModel->delete($restoran->idR);
        return redirect()->to(site_url('Admin/ispisUklanjanjeRestorana'));
    }

}
