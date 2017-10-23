<?php
    require_once 'bd.php';
    
    class Usuario{
        private $nome, $nick, $email, $senha;
        
        public function __construct($nome, $nick, $email, $senha){
            $this->nome = $nome;
            $this->nick = $nick;
            $this->email = $email;
            $this->senha = $senha;
        }
        
        //METODO PARA CADASTRAR USUÁRIO
        public function cadUsuario(){
            $insert = $this->query("INSERT INTO user(nm_user, nm_nickUser, ds_emailUser, cd_senhaUser) VALUES('$this->nome', '$this->nick', '$this->email', '$this->senha')");
            
            if(!selectUsuario()){
                if($insert){
                    echo json_encode({'cdBox':3});
                }else{
                    echo json_encode({'cdBox':4});
                }
            }else{
                echo json_encode({'cdBox':5});
            }
        }
        
        //METODO PARA LOGIN DE USUÁRIO
        public function logUsuario (){
            
        }
        
        //METODO PARA ALTERAÇÃO DE DADOS DO USUARIO
        public function updateUsuario(){
            
        }
        
        //METODO PARA SELECIONAR OS DADOS DO USUARIO
        public function selectUsuario(){
            $select = $this->query("SELECT * FROM where nm_nickUser = '$this->nick' or ds_emailUser = '$this->email' and cd_senhaUser = '$this->senha'");
            
            if($select){
                return true;
            }else{
                return false;
            }
        }
    }
?>