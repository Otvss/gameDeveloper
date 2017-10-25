<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }

	public function cadUsuario($nome, $nick, $email, $senha){
		$this->load->models('usuario.php');
	}
}
