<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function cadUsuario($nome, $nick, $email, $senha){
	    $data = array(
	        'nome'=>$nome,
	        'nick'=>$nick,
	        'email'=>$email,
	        'senha'=>$senha
	    );
	    
        $this->load->model('Usuario.php/cadUsuario', $data);
	}
	
	public function painelUsuario(){
	    $this->load->view('painelUsuario.php');
	}
}