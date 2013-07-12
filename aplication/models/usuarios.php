<?php

    class Usuarios extends Modelo{

        public  $nombre_tabla = 'usuarios';
        private $id_asistente;
        private $apellido_paterno;
        private $apellido_materno;
        private $nombre;
        private $sexo;
        private $edad;
        private $email;
        private $nctr_rfc;
        private $numero_control;

        function __construct() {
            $this->Modelo();
        } 

        public function get_id_asistente(){
                return $this->id_asistente;
        }

        public function set_id_asistente($valor){
                $this->id_asistente=$valor;
        }

        public function get_apellido_paterno(){
                return $this->apellido_paterno;
        }

        public function set_apellido_paterno($valor){
                $this->apellido_paterno=$valor;
        }

        public function get_apellido_materno(){
                return $this->apellido_materno;
        }

        public function set_apellido_materno($valor){
                $this->apellido_materno=$valor;
        }

        public function get_nombre(){
                return $this->nombre;
        }

        public function set_nombre($valor){
                $this->nombre=$valor;
        }

        public function get_sexo(){
                return $this->sexo;
        }

        public function set_sexo($valor){
                $this->sexo=$valor;
        }

        public function get_edad(){
                return $this->edad;
        }

        public function set_edad($valor){
                $this->edad=$valor;
        }

        public function get_email(){
                return $this->email;
        }

        public function set_email($valor){
                $this->email=$valor;
        }

        public function get_nctr_rfc(){
                return $this->nctr_rfc;
        }

        public function set_nctr_rfc($valor){
                $this->nctr_rfc=$valor;
        }

        public function get_numero_control(){
                return $this->numero_control;
        }

        public function set_numero_control($valor){
                $this->numero_control=$valor;
        }

    }

?>