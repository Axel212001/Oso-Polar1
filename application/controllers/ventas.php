<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class ventas extends CI_Controller 
{
	private $permisos;
	function __construct()
	{
		parent:: __construct();
		if(!$this->session->userdata('login')){
			redirect(base_url().'Inicio');
		}
		$this->load->model('ventasModel');
		$this->load->model('comboM');
		
	}
	
	public function index()
	{
		$data = array(
			'ventasindex' => $this->ventasModel->selectVentas()
		);
		$this->load->view('ventas/headVentas');
		$this->load->view('navegacionAdministrador');
		$this->load->view('ventas/buscarVenta');
		$this->load->view('ventas/CRUDVentas');
		$this->load->view('ventas/tablaVentas',$data);
		$this->load->view('footerAdministrador');
	}


	//INSERTAR VENTA
	public function viewInsert()
	{
		$data = array(
			'comboProductos' => $this->comboM->mcomboTabla('prodcuto'),
			'comboClientes' => $this->comboM->mcomboTabla('cliente'),
		);
		
		$this->load->view('ventas/headVentas');
		$this->load->view('navegacionAdministrador');
		$this->load->view('ventas/agregarVentas',$data);
		$this->load->view('footerAdministrador');
	}
	public function insertVentas()
	{
		$idProducto		= $this->input->post('txtProducto');
		$idCLiente  	= $this->input->post('txtCliente');
		$fecha   		= $this->input->post('txtFecha');
		$cantidad   	= $this->input->post('txtCantidad');
		$total       	= $this->input->post('txtTotal');
		
		$data = array(
			'idProducto'	=> $idProducto,
			'idCliente' 	=> $idCLiente,
			'fecha'  		=> $fecha,
			'cantidad' 		=> $cantidad,
			'total' 		=> $total,
			'estado'		=>'1'
		);

		$res = $this->ventasModel->insertarVentas($data);
			if($res){
				$this->session->set_flashdata('correcto','Se guardo exitosamente');
				redirect(base_url().'ventas');
			}else{
				$this->session->set_flashdata('error','No se guardo correctamente');
				redirect(base_url().'ventas');
			}
	}
	//ACTUALIZAR VENTA
	public function editarVentas($idVenta)
	{		
		$data = array(
			'ventaEdit' => $this->ventasModel->actualizaridVentas($idVenta),
			'comboProductos' => $this->comboM->mcomboTabla('prodcuto'),
			'comboClientes' => $this->comboM->mcomboTabla('cliente'),
		);
		$this->load->view('ventas/headVentas');
		$this->load->view('navegacionAdministrador');
		$this->load->view('ventas/editarVenta',$data);
		$this->load->view('footerAdministrador');
	}
	public function updateVentas()
	{
		$idVenta 	    = 	$this->input->post('txtidVenta'); 
		$idProducto		= 	$this->input->post('txtidProducto');
		$idCLiente  	= 	$this->input->post('txtidCliente');
		$fecha   		= 	$this->input->post('txtFecha');
		$cantidad   	= 	$this->input->post('txtCantidad');
		$total       	= 	$this->input->post('txtTotal');
		$estado       	= 	$this->input->post('txtEstado');
		$VentasActual = 	$this->ventasModel->actualizaridVentas($idVenta);
				$data = array(
					'idVenta'		=>$idVenta,
					'idProducto'	=> $idProducto,
					'idCliente' 	=> $idCLiente,
					'fecha'  		=> $fecha,
					'cantidad' 		=> $cantidad,
					'total' 		=> $total,
					'estado'		=> $estado
				);
				$res = $this->ventasModel->actualizarVentas($idVenta,$data);
				if ($res) {
					$this->session->set_flashdata('correcto','Se guardo correctamente');
					redirect(base_url().'ventas');
				}else{
					$this->session->set_flashdata('error','No se pudo actualizar el usuario');
					redirect(base_url().'ventas/editarVentas'.$idVenta);
				}
	}

	#ELIMINAR VENTA(DESACTIVAR)
	public function deleteVentas($idVenta)
	{
		$data = array(
			'estado' => "10",
		);
		$this->ventasModel->actualizarVentas($idVenta,$data);
		redirect(base_url().'ventas');
	}
}
