<¿

class Usuarios{

	private id_asistente;
	private apellido_paterno;
	private apellido_materno;
	private nombre;
	private sexo;
	private edad;
	private email;
	private nctr_rfc;
	private numero_control;
	
	public get_id_asistente(){
		return $this->id_asistente;
	}

	public set_id_asistente($valor){
		$this->id_asistente=$valor;
	}
	
	public get_apellido_paterno(){
		return $this->apellido_paterno;
	}

	public set_apellido_paterno($valor){
		$this->apellido_paterno=$valor;
	}
	
	public get_apellido_materno(){
		return $this->apellido_materno;
	}

	public set_apellido_materno($valor){
		$this->apellido_materno=$valor;
	}
	
	public get_nombre(){
		return $this->nombre;
	}

	public set_nombre($valor){
		$this->nombre=$valor;
	}
	
	public get_sexo(){
		return $this->sexo;
	}

	public set_sexo($valor){
		$this->sexo=$valor;
	}
	
	public get_edad(){
		return $this->edad;
	}

	public set_edad($valor){
		$this->edad=$valor;
	}
	
	public get_email(){
		return $this->email;
	}

	public set_email($valor){
		$this->email=$valor;
	}
	
	public get_nctr_rfc(){
		return $this->nctr_rfc;
	}

	public set_nctr_rfc($valor){
		$this->nctr_rfc=$valor;
	}
	
	public get_numero_control(){
		return $this->numero_control;
	}

	public set_numero_control($valor){
		$this->numero_control=$valor;
	}

}

?>