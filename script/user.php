<?php
    require_once 'bd.php';
    
    class User{
        private $nome, $nick, $email, $emailC, $senha, $senhaC;
        
        //CONSTRUTOR
        function __construct($nome, $nick, $email, $senha){
            $this->nome = $nome;
            $this->nick = $nick;
            $this->email = $email;
            $this->senha = $senha;
        }
        
        //METODO PARA CADASTRAR USUÁRIO
        public function cadUser(){
            $insert = mysql_query("INSERT INTO user(nm_user, nm_nickUser, ds_emailUser, cd_senhaUser) VALUES('$this->nome', '$this->nick', '$this->email', '$this->senha')");
        }
    }
    
    if(isset($_POST['button']) == "btnCadUser"){
        $user = new User($_POST['nome'], $_POST['nick'], $_POST['email'], $_POST['senha']);
        $user->cadUser();
    }    
?><?php
    require_once 'bd.php';
    
    class User{
        private $nome, $nick, $email, $emailC, $senha, $senhaC;
        
        //CONSTRUTOR
        function __construct($nome, $nick, $email, $senha){
            $this->nome = $nome;
            $this->nick = $nick;
            $this->email = $email;
            $this->senha = $senha;
        }
        
        //METODO PARA CADASTRAR USUÁRIO
        public function cadUser(){
            $insert = mysql_query("INSERT INTO user(nm_user, nm_nickUser, ds_emailUser, cd_senhaUser) VALUES('$this->nome', '$this->nick', '$this->email', '$this->senha')");
        }
    }
    
    if(isset($_POST['button']) == "btnCadUser"){
        $user = new User($_POST['nome'], $_POST['nick'], $_POST['email'], $_POST['senha']);
        $user->cadUser();
    }    
?>