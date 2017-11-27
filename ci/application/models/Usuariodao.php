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
                
                $data = array('usuario'=>'logado',
                            'id'=>$id,
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
        
        //ATUALIZA OS DADOS DO USUARIO NO BANCO
        public function atualizarDados($nome, $nick, $email){
            $this->db->set('nm_usuario', $nome);
            $this->db->set('nm_nickUsuario', $nick);
            $this->db->set('ds_emailUsuario', $email);
            $this->db->where('cd_usuario', $this->session->userdata('id'));
            $update = $this->db->update('Usuario');
            
            if($update){
                $this->session->set_userdata('nome', $nome);
                $this->session->set_userdata('nick', $nick);
                $this->session->set_userdata('email', $email);
                
                echo true;
            }else{
                echo false;
            }
        }
        
        //CADASTRAR USUARIO
        public function cadUser($nome, $nick, $tp, $email, $senha){
            $dados = array('nm_usuario'=>$nome,
                            'ds_emailUsuario'=>$email,
                            'tp_usuario'=>$tp,
                            'cd_senhaUsuario'=>$senha,
                            'nm_nickUsuario'=>$nick);
            
            //DEFINE QUAL DADO DADO DEVE SER PEGO               
            $this->db->where("ds_emailUsuario", $email);
            $this->db->or_where("nm_nickUsuario", $nick);
            
            //VERIFICA NO BANCO SE EXISTE ALGUEM QUE ATENDA AS DEFINIÇÕES DE BUSCA
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