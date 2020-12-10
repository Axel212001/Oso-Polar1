<?php 
	class clientesModel extends CI_Model
	{
		//Mostrar categorias
		public function selectClientes()
		{
			$this->db->where('estado <=','2');
			$resultado = $this->db->get('cliente');
			return $resultado->result();
		}
		//INSERTAR DATOS
		public function insertarClientes($data)
		{
			return $this->db->insert('cliente',$data);
		}

		//OBTENER DATOS
		public function actualizaridClientes($idCliente)
		{
			$this->db->where('idCliente',$idCliente);
			$resultado = $this->db->get('cliente');
			return $resultado->row();
		}
		//MODIFICAR TRABAJADORES 
		public function actualizarClientes($idCliente,$data)
		{
			$this->db->where('idCliente',$idCliente);
			return $this->db->update('cliente',$data);
		}
	}
 ?>
