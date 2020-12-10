<?php 
	class comboM extends CI_Model
	{
		//Motrar combos
		public function mcomboTabla($tabla){
			$this->db->where('estado','1');
			$resultado = $this->db->get($tabla);
			return $resultado->result();
		}
		
	}
 ?>
