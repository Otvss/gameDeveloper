<?php
    class UsuarioDAO extends CI_Model{
        //LOGAR USUARIO
        public function getUser($login, $senha){
            $this->db->where("nm_nickUsuario", $login);
            $this->db->where("cd_senhaUsuario", $senha);
            $user = $this->db->get("Usuario");
            
            if($user->num_rows()>0){
                $usuario = $user->result()[0];
                
                $id = $usuario->cd_usuario;
                $nome = $usuario->nm_usuario;
                $email = $usuario->ds_emailUsuario;
                $nick = $usuario->nm_nickUsuario;
                
                $data = array('id'=>$id,
                            'nome'=>$nome,
                            'email'=>$email,
                            'nick'=>$nick,
                            'id'=>$id);
                
                $this->session->set_userdata($data);
                
                echo true;
            }else{
                echo false; //CASO NÃO EXISTA O USUÁRIO
            }
        }
    }
?>