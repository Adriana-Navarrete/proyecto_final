<?php

	class Modelo{
	
		private $db;
		
		function Modelo(){
		
			$this->db = ADONewConnection('mysql');
		
		}
	
	}
	
?>