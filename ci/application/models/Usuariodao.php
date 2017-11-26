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
        
        //CADASTRAR USUARIO
        public function cadUser($nome, $nick, $tp, $email, $senha){
            $dados = array('nm_usuario'=>$nome,
                            'ds_emailUsuario'=>$email,
                            'tp_usuario'=>$tp,
                            'cd_usuario'=>$senha,
                            'nm_nickUsuario'=>$nick);
                            
            $this->db->where("ds_emailUsuario", $email);
            $verEmail = $this->db->get('Usuario')->row_array();
            
            if($verEmail){
                echo "false";
            }
            else{
                $this->db->insert('Usuario', $dados);
                echo "true";
            }
        }
    }
?>