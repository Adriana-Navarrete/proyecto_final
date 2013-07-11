<?php

    class eventos
    {
        private id_evento, nombre_evento, contacto, cuando, donde, informacion, fecha_inicio, fecha_fin;
                
        public function get_id_evento()
        {                    
            return $this -> id_evento;
        }
        public function set_id_evento($valor)
        {                    
            $this -> id_evento = $valor;
        }
        
        public function get_nombre_evento()
        {
            return $this -> nombre_evento;
        }
        public function set_nombre_evento($valor)
        {
            $this -> nombre_evento = $valor;
        }
        
        public function get_contacto()
        {
            return $this -> contacto;
        }
        public function set_contacto($valor)
        {
            $this -> contacto = $valor;
        }
        
        public function get_cuando()
        {
            return $this -> cuando;
        }
        public function set_cuando($valor)
        {
            $this -> cuando = $valor;
        }
        
        public function get_donde()
        {
            return $this -> donde;
        }
        public function set_donde($valor)
        {
            $this -> donde = $valor;
        }
        
        public function get_informacion()
        {
            return $this -> informacion;
        }
        public function set_informacion($valor)
        {
            $this -> informacion = $valor;
        }
        
        public function get_fecha_inicio()
        {
            return $this -> fecha_inicio;
        }
        public function set_fecha_inicio($valor)
        {
            $this -> fecha_inicio = $valor;
        }
        
        public function get_fecha_fin()
        {
            return $this -> fecha_fin;
        }
        public function set_fecha_fin($valor)
        {
            $this -> fecha_fin = $valor;
        }
    }
?>