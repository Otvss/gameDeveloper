<?php
    class Auladao extends CI_Model{
        //VISUALIZAR AULA
        public function carregarAula($id){
            /*$this->db->where('cd_aula', $id);
            $aula = $this->db->get("aula");*/
            
            $this->db->select('*');
            $this->db->from('aula');
            $this->db->join('Usuario', 'Usuario.cd_usuario = aula.cd_usuario');
            $aula = $this->db->get_where('aula', array('cd_aula'=>$id));
            
            if($aula->num_rows()>0){
                $visAula = $aula->result()[0];
                
                $data = array('id'=>$visAula->cd_aula, 'nome'=>$visAula->nm_aula, 'desc'=>$visAula->ds_descAula,
                            'text'=>$visAula->ds_aula, 'video'=>$visAula->ds_videoAula, 'img'=>$visAula->ds_imgAula,
                            'idUsuario'=>$visAula->cd_usuario, 'pk'=>$visAula->cd_palavrasChave, 'nmUsuario'=>nm_usuario);
                            
                $this->session->set_flashdata($data);
            }else{
                return false;
            }
            
            echo $data['nmUsuario'];
        }
    }
?>