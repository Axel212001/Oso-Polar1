<?php 
	class trabajadorModel extends CI_Model
	{
		//Mostrar categorias
		public function selectTrabajador()
		{
			$this->db->where('estado <=','2');
			$this->db->where('estado <=','2');
			$resultado = $this->db->get('trabajadores');
			return $resultado->result();
		}
		//INSERTAR DATOS
		public function insertarTrabajador($data)
		{
			return $this->db->insert('trabajadores',$data);
		}

		//OBTENER DATOS
		public function actualizaridTrabajador($idTrabajador)
		{
			$this->db->where('idTrabajador',$idTrabajador);
			$resultado = $this->db->get('trabajadores');
			return $resultado->row();
		}
		//MODIFICAR TRABAJADORES 
		public function actualizarTrabajador($idTrabajador,$data)
		{
			$this->db->where('idTrabajador',$idTrabajador);
			return $this->db->update('trabajadores',$data);
		}
	}
 ?>
