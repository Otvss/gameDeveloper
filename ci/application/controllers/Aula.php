<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aula extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
    }
	
	public function carregarAula($idaula){
	    $this->load->model('Auladao'); //CARREGA A CLASSE DO ARQUIVO USUARIODAO DA PASTA MODEL
	    
	    $Auladao = $this->Auladao; //ATRIBUI A CLASSE CARREGADA A VARIAVEL USRDAO
	    
	    $Auladao->carregarAula($idaula); //EXECUTA O METODO ENVIANDO OS DADOS A SEREM VERIFICADOS NO BANCO*/

	    $this->load->view('teste.php');
	}
}
