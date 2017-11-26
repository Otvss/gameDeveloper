<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    private $id, $nome, $nick, $email, $tp;
    
    public function __construct($id, $nome, $nick, $email, $tp, $senha){
        parent::__construct();
        
        $this->id = $id;
        $this->nome = $nome;
        $this->nick = $nick;
        $this->email = $email;
        $this->senha = $senha;
        $this->tp = $tp;
    }
	
	//CONTROLE PARA O ACESSO AO PAINEL DO USUÁRIO CASO O MESMO JA ESTEJA LOGADO
	public function painelUsuario(){
		$this->load->view('painelUsuario');
	}
	
	public function logarUsuario(){
		//RECUPERA OS DADOS ENVIADOS VIA POST
	    $login = $this->input->post('nick');
	    $senha = $this->input->post('senha');
	    
	    require_once APPPATH."models/UsuarioModel.php"; //APPPATH -> CAMINHO BASE PARA A PASTA APPLICATION
	    
	    $this->load->model('Usuariodao'); //CARREGA A CLASSE DO ARQUIVO USUARIODAO DA PASTA MODEL
	    
	    $usrdao = $this->Usuariodao; //ATRIBUI A CLASSE CARREGADA A VARIAVEL USRDAO
	    
	    $verUsuario = $usrdao->getUser($login, $senha); //EXECUTA O METODO ENVIANDO OS DADOS A SEREM VERIFICADOS NO BANCO
	}
	
	//CADASTRO DO USUARIO
	public function cadastrarUsuario(){
	    //PEGANDO DADOS DO POST
		$nome = $this->input->post('nome');
		$nick = $this->input->post('nick');
		$tp = "colab"; //VALOR PADRÃO DE CADASTRO FEITO PELO SITE
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');
		$status = "ival"; //VALIDAÇÃO DE CONTA VIA EMAIL (FAZER FUTURAMENTE)
		
		require_once APPPATH."models/UsuarioModel.php";
		
		$this->load->model('usuariodao');
		
		//VERIFICA SE O USUÁRIO FOI CADASTRADO
		$insert = $this->usuariodao;
		
		$insert->cadUser($nome, $nick, $tp, $email, $senha);
	}

	
	//ENCERRA O LOGIN DO USUÁRIO
	public function logout(){
	    $this->session->unset_userdata('usuario'); //EXCLUI A SESSION REALIZANDO O LOGOFF
	    redirect($base_url, 'refresh'); //REDIRECIONA PARA A PÁGINA PRINCIPAL
	}
}