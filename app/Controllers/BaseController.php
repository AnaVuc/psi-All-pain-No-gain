<?php
namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\RestoranModel;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		$this->session = \Config\Services::session();
	}
        
        protected function prikaz($page,$data){
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        
        public function index()
        {
            $restoranModel=new RestoranModel();
            $restorani=$restoranModel->findAll();
          //  $this->filtrirajPo($restorani,$restoranModel->Vrsta_hrane,"azijska");
            $filter=$restoranModel->dohvatiRestoraneOcena("4.5");
          
            echo view('stranice/restoran',['restoran'=>$filter]);

        }
        
        
        
        public function najpopularniji($r){
            
            usort($r,function($a,$b){
                if ($a->brojRecenzija * $a->Prosecna_ocena > $b->brojRecenzija * $b->Prosecna_ocena) {
                        return -1;
                } else if ($a->brojRecenzija * $a->Prosecna_ocena < $b->brojRecenzija * $b->Prosecna_ocena) {
                        return +1;
                } else {
                        return 0;
            }
            });
                echo ('Sortirani po popularnosti');
                echo view('stranice/najpopularniji',['restoran'=>$r]);
            
            
        }
        
        public function sortPoOceni($r){
            usort($r,function($a,$b){
                if ($a->Prosecna_ocena > $b->Prosecna_ocena) {
                        return -1;
                } else if ($a->Prosecna_ocena < $b->Prosecna_ocena) {
                        return +1;
                } else {
                        return 0;
            }
            });
            echo ('Sortirani po oceni');
            echo view('stranice/restoran',['restoran'=>$r]);
            
        }
        
        public function sortPoCeni($r){
            usort($r,function($a,$b){
                if (strlen($a->Cenovni_rang) > strlen($b->Cenovni_rang)) {
                        return -1;
                } else if (strlen($a->Cenovni_rang) < strlen($b->Cenovni_rang)) {
                        return +1;
                } else {
                        return 0;
            }
            });
            echo ('Sortirani po ceni');
            echo view('stranice/restoran',['restoran'=>$r]);
            
        }
        
       

         public function restoran($id)
	{
            $restoranModel=new \App\Models\RestoranModel;
            $restoran=$restoranModel->find($id);
            $this->prikaz('restoran',['restoran'=>$restoran]);
		
        }
        
        public function pretraga($res){


            // get the q parameter from URL
            $q = $_REQUEST["q"];

            $hint = "";

            // lookup all hints from array if $q is different from ""
            if ($q !== "") {
            $q = strtolower($q);
            $len=strlen($q);
            foreach($res as $name) {
                if (stristr($q, substr($name->Ime, 0, $len))) {
                    if ($hint === "") {
                        $hint = $name->Ime;
                    } else {
                        $hint .= ", $name->Ime";
                }
            }
        }
        }

            // Output "no suggestion" if no hint was found or output correct values
            echo $hint === "" ? "no suggestion" : $hint;

        }
}
