<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    private $id, $nome, $nick, $email;
    
    public function __construct($id, $nome, $nick, $email){
        parent::__construct();
        
        $this->id = $id;
        $this->nome = $nome;
        $this->nick = $nick;
        $this->email = $email;
    }
	
	//CONTROLE PARA O ACESSO AO PAINEL DO USUÁRIO CASO O MESMO JA ESTEJA LOGADO
	public function painelUsuario(){
		$this->load->view('painelUsuario');
	}
	
	//CADASTRO DO USUARIO
	public function cadastrar(){
		
	}
}