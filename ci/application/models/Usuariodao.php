<?php
    class UsuarioDAO extends CI_Model{
        
        public function getUser($login, $senha){
            $usr = $this->db->query("CALL logarUsuario('$login', '$senha')");
            require_once APPPATH."models/UsuarioModel.php";
            if($usr->num_rows() > 0){
                $usuario = $usr->result()[0];
                
                $id = $usuario->cd_usuario;
                $nome = $usuario->nm_usuario;
                $email = $usuario->ds_emailUsuario;
                $nick = $usuario->nm_nickUsuario;
                
                return new UsuarioModel($id, $nome, $email, $nick); //CRIA UM NOVO OBJETO COM OS ITENS ADQUIRIDOS DO BANCO
            }else{
                return null; //CASO NÃO EXISTA O USUÁRIO
            }
        }
        
    }
?>