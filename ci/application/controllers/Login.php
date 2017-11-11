<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }
	
	//REALIZA A AUTENTICAÇÃO DO USUÁRIO
	public function auth(){
	    //RECUPERA OS DADOS ENVIADOS VIA POST
	    $login = $this->input->post('login');
	    $senha = $this->input->post('senha');
	    
	    require_once APPPATH."models/UsuarioModel.php"; //APPPATH -> CAMINHO BASE PARA A PASTA APPLICATIONN
	    
	    $this->load->model('Usuariodao'); //CARREGA A CLASSE DO ARQUIVO USUARIODAO DA PASTA MODEL
	    
	    $usrdao = $this->Usuariodao; //ATRIBUI A CLASSE CARREGADA A VARIAVEL USRDAO
	    
	    $verUsuario = $usrdao->getUser($login, $senha); //EXECUTA O METODO ENVIANDO OS DADOS A SEREM VERIFICADOS NO BANCO
	    
	    //VERIFICA SE A VARIAVEL EXISTE
	    if(isset($verUsuario)){
	    	//CRIA SESSION REPRESENTANTE DO USUÁRIO
	    	$this->session->set_userdata('usuario','colab');
	    	
	    	if($this->session->userdata('usuario')){
	    		echo "encontrado";
	    	}else{
	    		echo "nao existe";
	    	}
	    }else{
	    	echo null;
	    }
	}
	
	//ENCERRA O LOGIN DO USUÁRIO
	public function logout(){
	    $this->session->unset_userdata('usuario'); //EXCLUI A SESSION REALIZANDO O LOGOFF
	    redirect($base_url, 'refresh'); //REDIRECIONA PARA A PÁGINA PRINCIPAL
	}
}