<?php

    class Modelo{

        private $db;

        function Modelo(){
                $this->db = ADONewConnection('mysql');
                $this->db->debug = true;
                $this->db->Connect('localhost','root','vicgame1991','proyecto');
        }

        public function consulta_datos(){
            $rs = $this->db->Execute('select * from '. $this->nombre_tabla);
            $this->get_error($rs, 'Error en consulta datos');
            return $rs;
        }
        
        public function inserta_datos(){
            $rs = array();
            $rs['apellido_paterno']='GALVAN';
            $rs['apellido_materno']='MEXICANO';
            $rs['nombre']='VICTOR';
            $rs['sexo']='M';
            $rs['edad']='21';
            $rs['email']='victor.mexicano@hotmail.com';
            $rs['nctr_rfc']='GAMV911104HY4';
            $rs['numero_control']='09030791';
            $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla,$rs);
            $this->get_error($this->db->Execute($sql_insert),'Error en Modelo.inserta');
        }
        
        public function get_error($result, $tipo_error){
            if($result == false){
                die('Redireccionar a la pagina de error'.$tipo_error);
            }
        }

    }
	
?>