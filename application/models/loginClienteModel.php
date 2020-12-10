<?php 

	class loginClienteModel extends CI_Model
	{
		public function loginCliente($user,$pass)
		{
		  $this->db->where('usuario',$user);
		  $this->db->where('Password',$pass);
		  $resultado = $this->db->get('cliente');
		  if($resultado->num_rows()>0){
		  	return $resultado->row();
		  }else{
		  	return false;
		  }
		}
	}
 ?>