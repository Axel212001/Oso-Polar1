<?php 

	class loginModel extends CI_Model
	{
		public function login($user,$pass)
		{
		  $this->db->where('usuario',$user);
		  $this->db->where('contraseña',$pass);
		  $resultado = $this->db->get('trabajadores');
		  if($resultado->num_rows()>0){
		  	return $resultado->row();
		  }else{
		  	return false;
		  }
		}
	}
 ?>