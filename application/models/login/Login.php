<?php
class Login extends CI_Model { 

	public function __construct(){
		parent::__construct();
		
		//Se cargan la db definida en el archivo database
		$this->load->database();		
	 }
	 
	 public function verificaUsuario($nombreDeUsuario,$password){
		 
		$pass=md5($password);
		//$query = $this->db->query("SELECT * FROM usuarios WHERE nombreUsuario='".$nombreUsuario."' and password='".$pass."'and idRol=1");
		$query = $this->db->query("SELECT * FROM usuarios WHERE nombreDeUsuario='".$nombreDeUsuario."' and password='".$pass."'");
		if($query->num_rows()>0){
			return $query->row();
		}else{
			return ;
		}
		 
	 }
	
}