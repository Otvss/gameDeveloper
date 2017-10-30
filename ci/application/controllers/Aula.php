<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aula extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }

	public function visAula(){
		$this->load->view('visAula.php');
	}
}
