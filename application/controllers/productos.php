<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class productos extends CI_Controller 
{
	private $permisos;
	function __construct()
	{
		parent:: __construct();
		if(!$this->session->userdata('login')){
			redirect(base_url().'Inicio');
		}
		$this->load->model('productosModel');
		$this->load->model('comboM');
	
		
	}
	//Mostrar
	public function index()
	{
		$data = array(
			'productosindex' => $this->productosModel->selectProductos()
		);
		$this->load->view('productos/headProductos');
		$this->load->view('navegacionAdministrador');
		$this->load->view('productos/buscarProducto');
		$this->load->view('productos/CRUDProductos');
		$this->load->view('productos/tablaProductos',$data);
		$this->load->view('footerAdministrador');
	}



	//INSERTAR TRABAJADOR
	public function viewInsert()
	{
		$data = array(
			'comboCategoria' => $this->comboM->mcomboTabla('categoria'),
		);
		
		$this->load->view('productos/headProductos');
		$this->load->view('navegacionAdministrador');
		$this->load->view('productos/agregarProductos',$data);
		$this->load->view('footerAdministrador');
	}
	
	public function insertProductos()
	{
		 $nombreP			= $this->input->post('txtnombreP');
		 $descripcionP  	= $this->input->post('txtdescripcionP');
		 $precioP   		= $this->input->post('txtprecio');
		 $categoriaP  		= $this->input->post('txtcategoria');
		$foto 				='no_image.png';

		if (empty($_FILES['txtimagen']['name'])) {

			$data = array(
			'nombre'		=> $nombreP,
			'descripcion' 	=> $descripcionP,
			'precio'  		=> $precioP,
			'idCategoria' 	=> $categoriaP,
			'imagen' 		=> $foto,
			'estado'		=>'1'
			);

			$res = $this->productosModel->insertarProductos($data);
				if($res){
					$this->session->set_flashdata('correcto','Se guardo exitosamente');
					redirect(base_url().'productos');
				}else{
					$this->session->set_flashdata('error','No se guardo correctamente');
					redirect(base_url().'trabajadores');
				}
		}else{
			$config['upload_path'] = './uploads/productos/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload',$config);

			if ($this->upload->do_upload('txtimagen')) {
				$fotito= $this->upload->data('file_name');

				$data = array(
				'nombre'		=> $nombreP,
				'descripcion' 	=> $descripcionP,
				'precio'  		=> $precioP,
				'idCategoria' 	=> $categoriaP,
				'imagen' 		=> $fotito,
				'estado'		=>'1'
				);

				$res = $this->productosModel->insertarProductos($data);
					if($res){
						$this->session->set_flashdata('correcto','Se guardo exitosamente');
						redirect(base_url().'productos');
					}else{
						$this->session->set_flashdata('error','No se guardo correctamente');
						redirect(base_url().'trabajadores');
					}
			}else{
				echo $this->upload->display_errors();
			}
		}
		
		
		
	}


	//ACTUALIZAR TRABAJADOR
	public function editarProductos($idProducto)
	{		
		$data = array(
			'productoEdit' => $this->productosModel->actualizaridProductos($idProducto)
		);
		$this->load->view('productos/headProductos');
		$this->load->view('navegacionAdministrador');
		$this->load->view('productos/editarProduto',$data);
		$this->load->view('footerAdministrador');
	}
	public function updateProductos()
	{
		$idProducto 	= 	$this->input->post('txtidProducto'); 
		$nombre			=   $this->input->post('txtnombreP');
		$descripcionP  	=   $this->input->post('txtdescripcionP');
		$precio  		=   $this->input->post('txtprecio');
		$categoriaP  	=   $this->input->post('txtcategoria');
		$estado			=   $this->input->post('txtEstado');
		$ProductoActual = 	$this->productosModel->actualizaridProductos($idProducto);
				$data= array(
					'idProducto' 	=>$idProducto,    
					'nombre'		=> $nombre,
					'descripcion' 	=> $descripcionP,
					'precio'  		=> $precio ,
					'idCategoria' 	=> $categoriaP,
					'estado'		=> $estado
				);
				$res = $this->productosModel->actualizarProductos($idProducto,$data);
				if ($res) {
					$this->session->set_flashdata('correcto','Se guardo correctamente');
					redirect(base_url().'productos');
				}else{
					$this->session->set_flashdata('error','No se pudo actualizar el usuario');
					redirect(base_url().'productos/editarProductos'.$idProducto);
				}
	}
	#ELIMINAR PRODUCTO
	public function deleteProductos($idProducto)
	{
		$data = array(
			'estado' => "10",
		);
		$this->productosModel->actualizarProductos($idProducto,$data);
		redirect(base_url().'productos');
	}
}
