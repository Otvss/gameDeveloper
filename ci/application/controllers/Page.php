<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }

    //CARREGA A PÁGINA PRINCIPAL - INDEX
	public function index(){
		$this->load->view('index.php');
	}
}
