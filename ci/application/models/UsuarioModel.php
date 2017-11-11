<?php
    class UsuarioModel{
        private $id, $nome, $nick, $email, $senha;
        
        public function __construct($id, $nome, $email, $nick){
            $this->id = $id;
            $this->nome = $nome;
            $this->nick = $nick;
            $this->email = $email;
        }
        
        //RETORNA O VALOR DE QUALQUER VARIAVEL
        public function getAll($variavel){
            return $this->$variavel;
        }
    }
?>