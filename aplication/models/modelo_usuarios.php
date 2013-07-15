<?php

    class Modelo_usuarios{

        private $db;

        function Modelo_usuarios(){
                $this->db = ADONewConnection('mysql');
                $this->db->debug = true;
                $this->db->Connect('localhost','root','','proyecto');
        }

        public function consulta_datos(){
            $rs = $this->db->Execute('select * from '. $this->nombre_tabla);
            $this->get_error($rs, 'Error en consulta datos');
            return $rs;
        }
        
        public function inserta_datos($rs){
            $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla,$rs);
            $this->get_error($this->db->Execute($sql_insert),'Error en Modelo.inserta');
        }
        
        public function get_error($result, $tipo_error){
            if($result == false){
                die('Redireccionar a la pagina de error'.$tipo_error);
            }
        }
        
        public function show_grid($num = '10'){
            $sql = "select * from ".$this->nombre_tabla;
            $grid = new ADODB_Pager($this->db,$sql);
            $grid->Render($rows_per_page=$num);
        }
        
        public function actualiza($id_asistente){
            if(is_integer($id_asistente)){
                $sql = "select * from ".$this->nombre_tabla." where id_asistente = ".$id_asistente;
                
                $record = $this->db->Execute($sql);
                $rs = array();
                $rs['apellido_paterno']='GALVAN';
                $rs['apellido_materno']='MEXICANO';
                $rs['nombre']='VICTOR 2';
                $rs['sexo']='M';
                $rs['edad']='21';
                $rs['email']='victor.mexicano@hotmail.com';
                $rs['nctr_rfc']='GAMV911104HY4';
                $rs['numero_control']='09030791';
                $sql_update = $this->db->GetUpdateSQL($record,$rs);
                $this->get_error($this->db->Execute($sql_update), "Error al actualizar");
            }
            else{
                die('OJO');
            }
        }
        
        public function elimina($id_asistente = 'null'){
            if($id_asistente == 'null'){
                $sql = "delete from ".$this->nombre_tabla;
            }
            else{
                $sql = "delete from ".$this->nombre_tabla." where id_asistente = ".$id_asistente;
            }
            $this->get_error($this->db->Execute($sql), 'Error al eliminar');
        }

    }
	
?>