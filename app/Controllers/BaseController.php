<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

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
            $this->najpopularniji($restorani);
            //$this->prikaz('restoran',['restoran'=>$restoran]);
		
        }
        
        public function najpopularniji($r){
            
            $restorani=sort($r);
           // for($i=0;$i<3;$i++){
                echo view('stranice/restoran',['restoran'=>$restorani]);
            //}
            
        }

       
        
  
}
