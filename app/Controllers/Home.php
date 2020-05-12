<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
                echo view('sablon/header.php');
                echo view('sablon/srednji.php');
                echo view('sablon/footer.php');
                
	}

	//--------------------------------------------------------------------

}
