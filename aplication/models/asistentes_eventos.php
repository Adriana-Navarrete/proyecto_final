<?php

    class Asistentes_eventos{

        private $id_asistente_evento;
        private $id_actividad;
        private $id_asistente;
        private $fecha_registro;

        public function get_id_asistente_evento(){
                return $this->id_asistente_evento;
        }

        public function set_id_asistente_evento($valor){
                $this->id_asistente_evento=$valor;
        }

        public function get_id_actividad(){
                return $this->id_actividad;
        }

        public function set_id_actividad($valor){
                $this->id_actividad=$valor;
        }

        public function get_id_asistente(){
                return $this->id_asistente;
        }

        public function set_id_asistente($valor){
                $this->id_asistente=$valor;
        }

        public function get_fecha_registro(){
                return $this->fecha_registro;
        }

        public function set_fecha_registro($valor){
                $this->fecha_registro=$valor;
        }

    }

?>