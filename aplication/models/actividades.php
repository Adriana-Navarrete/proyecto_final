<?php
     class actividades{
	 private id_actividad;
	 private id_evento;
	 private nombre_actividad;
	 private lugares;
	 private precio;
	 private descripcion;
	 private id_instructor;
	       
		  public get_id_actividades(){
		   return this->id_actividades;
		  }
		  public set_id_actividades($valor){
		  $this->id_actividades=$valor;
		  }
		   public get_id_evento(){
		   return this->id_evento;
		  }
		  public set_id_evento($valor){
		  $this->id_evento=$valor;
		  }
		   public get_nombre_actividad(){
		   return this->nombre_actividad;
		  }
		  public set_nombre_actividad($valor){
		  $this->nombre_actividad=$valor;
		  }
		  
		   public get_lugares(){
		   return this->lugares;
		  }
		  public set_lugares($valor){
		  $this->lugares=$valor;
		  }
		  
		   public get_precio(){
		   return this->precio;
		  }
		  public set_precio($valor){
		  $this->precio=$valor;
		  }
		  
		   public get_descripcion(){
		   return this->descripcion;
		  }
		  public set_descripcion($valor){
		  $this->descripcion=$valor;
		  }
	      
		   public get_id_instructor(){
		   return this->id_actividades;
		  }
		  public set_id_instructor($valor){
		  $this->id_instructor=$valor;
		  }
	 }

?>