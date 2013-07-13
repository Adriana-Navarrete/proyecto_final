
<?php
   class Asistentes_tipos_usuarios{
   		private id_asistente_tipo_usuario;
   		private  id_asistente ;
   		private  id_tipo_usuario;
		
		public get_id_asistente_tipo_usuario(){
		    return $this->id_asistente_tipo_usuario;
		}
		
		public set_id_asistente_tipo_usuario($valor){
		   $this->id_asistente_tipo_usuario=$valor;
		}
		
		public get_id_asistente(){
		    return $this->id_asistente;
		}
		
		public set_id_asistente($valor){
		   $this->id_asistente=$valor;
		}
		public get_id_tipo_usuario(){
		    return $this->id_tipo_usuario;
		}
		
		public set_id_tipo_usuario($valor){
		   $this->id_tipo_usuario=$valor;
		}
   

}//fin clase



?>

