<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index(){
    	
    }

	public function cadUsuario($nome, $nick, $email, $senha){
        $this->load->model('Usuario.php/cadUsuario');
	}
	
	public function painelUsuario(){
	    $this->load->view('painelUsuario.php');
	}
}