
<?php
   class Eventos_tipos_usuarios {
   		private  id_evento_tipo_usuario ;
   		private   id_evento ;
   		private  id_tipo_usuario ;
		
		public get_id_evento_tipo_usuario(){
		    return $this->id_evento_tipo_usuario;
		}
		
		public set_id_evento_tipo_usuario($valor){
		   $this->id_evento_tipo_usuario=$valor;
		}
		
		public get_id_evento(){
		    return $this->id_evento;
		}
		
		public set_id_evento($valor){
		   $this->id_evento=$valor;
		}
		public get_id_tipo_usuario(){
		    return $this->id_tipo_usuario;
		}
		
		public set_id_tipo_usuario($valor){
		   $this->id_tipo_usuario=$valor;
		}
   

}//fin clase



?>

