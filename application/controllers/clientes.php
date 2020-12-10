<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class clientes extends CI_Controller 
{
	private $permisos;
	function __construct()
	{
		parent:: __construct();
		if(!$this->session->userdata('login')){
			redirect(base_url().'Inicio');
		}
		$this->load->model('clientesModel');
		
	}
	//Mostrar
	public function index()
	{
		$data = array(
			'clientesindex' => $this->clientesModel->selectClientes()
		);
		$this->load->view('clientes/headCliente');
		$this->load->view('navegacionAdministrador');
		$this->load->view('clientes/buscarCliente');
		$this->load->view('clientes/tablaClientes',$data);
		$this->load->view('footerAdministrador');
	}

	//INSERTAR TRABAJADOR
	public function viewInsert()
	{
	
			$this->load->view('head');
			$this->load->view('NavegacionPrincipal');
			$this->load->view('NavegacionSecundaria');
			$this->load->view('slider.php');
			$this->load->view('imagenesLinks');
			$this->load->view('productoMasVendidos');
			$this->load->view('footer');
			$this->load->view('recursosScripts');
	}
	public function insertClientes()
	{
		$nombre			= $this->input->post('txtnombre');
		$apellidos  	= $this->input->post('txtapellidos');
		$usuario   		= $this->input->post('txtusuario');
		$correo  		= $this->input->post('txtemail');
		$contraseña  	= $this->input->post('txtcontraseña');	
		$data = array(
			'nombre'		=> $nombre,
			'apellidos' 	=> $apellidos,
			'usuario'  		=> $usuarioP,
			'correo' 		=> $correo,
			'Password' 		=> $contraseña,
			'estado'		=>'1'
		);
		$res = $this->clientesModel->insertarClientes($data);
			if($res){
				$this->session->set_flashdata('correcto','Se guardo exitosamente');
				redirect(base_url().'Inicio');
			}else{
				$this->session->set_flashdata('error','No se guardo correctamente');
				redirect(base_url().'Inicio');
			}
	}


	//ACTUALIZAR TRABAJADOR
	public function editarClientes($idCliente)
	{		
		$data = array(
			'clienteEdit' => $this->clientesModel->actualizaridClientes($idCliente)
		);
		$this->load->view('clientes/headCliente');
		$this->load->view('navegacionAdministrador');
		$this->load->view('clientes/editarCliente',$data);
		$this->load->view('footerAdministrador');
	}
	public function updateClientes()
	{
		$idCliente 	    = $this->input->post('txtIdCliente');
		$nombre			= $this->input->post('txtnombre');
		$apellidos  	= $this->input->post('txtapellidos');
		$usuario   		= $this->input->post('txtusuario');
		$correo  		= $this->input->post('txtcorreo');
		$contraseña  	= $this->input->post('txtcontraseña');
		$estado		 	= $this->input->post('txtEstado');
		$ClienteActual = 	$this->clientesModel->actualizaridClientes($idCliente);
				$data = array(
					'idCliente'		=> $idCliente,
					'nombre'		=> $nombre,
					'apellidos' 	=> $apellidos,
					'usuario'  		=> $usuario,
					'correo' 		=> $correo,
					'Password' 		=> $contraseña,
					'estado'		=>$estado
				);

				$res = $this->clientesModel->actualizarClientes($idCliente,$data);
				if ($res) {
					$this->session->set_flashdata('correcto','Se guardo correctamente');
					redirect(base_url().'clientes');
				}else{
					$this->session->set_flashdata('error','No se pudo actualizar el usuario');
					redirect(base_url().'clientes/editarClientes'.$idCliente);
				}
	}

	#ELIMINAR CLIENTE
	public function deleteClientes($idCliente)
	{
		$data = array(
			'estado' => "10",
		);
		$this->clientesModel->actualizarClientes($idCliente,$data);
		redirect(base_url().'clientes');
	}
}
