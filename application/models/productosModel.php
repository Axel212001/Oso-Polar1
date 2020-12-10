<?php 
	class productosModel extends CI_Model
	{
		//Mostrar categorias
		public function selectProductos()
		{
			$this->db->select('prodcuto.*,categoria.nombre AS nombreCategoria');
			$this->db->from('prodcuto');
			$this->db->join('categoria','prodcuto.idCategoria=categoria.idCategoria');
			$this->db->where('prodcuto.estado <=','2');
			$resultado = $this->db->get();
			return $resultado->result();
		}


		public function selectCategoriaTv()
		{
			$this->db->select('prodcuto.*,categoria.nombre AS nombreCategoria');
			$this->db->from('prodcuto');
			$this->db->join('categoria','prodcuto.idCategoria=categoria.idCategoria');
			$this->db->where('categoria.idCategoria','1');
			$resultado = $this->db->get();
			return $resultado->result();
		}


		//INSERTAR DATOS
		public function insertarProductos($data)
		{
			return $this->db->insert('prodcuto',$data);
		}

		//OBTENER DATOS
		public function actualizaridProductos($idProducto)
		{
			$this->db->where('idProducto',$idProducto);
			$resultado = $this->db->get('prodcuto');
			return $resultado->row();
		}

		
		//MODIFICAR TRABAJADORES 
		public function actualizarProductos($idProducto,$data)
		{
			$this->db->where('idProducto',$idProducto);
			return $this->db->update('prodcuto',$data);
		}
	}
 ?>
