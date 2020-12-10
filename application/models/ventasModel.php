<?php 
	class ventasModel extends CI_Model
	{
		//Mostrar categorias
		public function selectVentas()
		{
			$this->db->select('venta.idVenta, prodcuto.nombre AS nombreProducto,cliente.nombre AS nombreCliente, venta.fecha, venta.cantidad,venta.total,venta.estado');
			$this->db->from('prodcuto');
			$this->db->join('venta','prodcuto.idProducto=venta.idProducto');
			$this->db->join('cliente','venta.idCliente=cliente.idCliente');
			$this->db->where('venta.estado <=','2');
			$resultado = $this->db->get();
			return $resultado->result();
		}
		//INSERTAR DATOS
		public function insertarVentas($data)
		{
			return $this->db->insert('venta',$data);
		}

		//OBTENER DATOS
		public function actualizaridVentas($idVenta)
		{
			$this->db->where('idVenta',$idVenta);
			$resultado = $this->db->get('venta');
			return $resultado->row();
		}
		//MODIFICAR TRABAJADORES 
		public function actualizarVentas($idVenta,$data)
		{
			$this->db->where('idVenta',$idVenta);
			return $this->db->update('venta',$data);
		}
	}
 ?>
