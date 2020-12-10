<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class trabajadores  extends CI_Controller 
{
	private $permisos;
	function __construct()
	{
		parent:: __construct();
		if(!$this->session->userdata('login')){
			redirect(base_url().'Inicio');
		}
		$this->load->model('trabajadorModel');
		
	}
	//Mostrar
	public function index()
	{
		$data = array(
			'trabajadoresindex' => $this->trabajadorModel->selectTrabajador()
		);
		$this->load->view('trabajadores/headTrabajador');
		$this->load->view('navegacionAdministrador');
		$this->load->view('trabajadores/buscarTrabajador');
		$this->load->view('trabajadores/CRUDTrabajador');
		$this->load->view('trabajadores/tablaTrabajador',$data);
		$this->load->view('footerAdministrador');
	}


	//INSERTAR TRABAJADOR
	public function viewInsert()
	{
		$this->load->view('trabajadores/headTrabajador');
		$this->load->view('navegacionAdministrador');
		$this->load->view('trabajadores/buscarTrabajador');
		$this->load->view('trabajadores/CRUDTrabajador');
		$this->load->view('trabajadores/tablaTrabajador');
		$this->load->view('footerAdministrador');
	}
	public function insertTrabajador()
	{
		$nombre		= $this->input->post('txtnombre');
		$apellidos  = $this->input->post('txtapellidos');
		$telefono   = $this->input->post('txtcelular');
		$domicilio  = $this->input->post('txtdomicilio');
		$usuario    = $this->input->post('txtusuario');
		$contraseña = $this->input->post('txtcontraseña');
		$idRol        = $this->input->post('txtrol');
		$data = array(
			'nombre'	=> $nombre,
			'apellidos' => $apellidos,
			'telefono'  => $telefono,
			'domicilio' => $domicilio,
			'usuario'   => $usuario,
			'contraseña'=> $contraseña,
			'idRol'     => $idRol,
			'estado'	=>'1'
		);
		$res = $this->trabajadorModel->insertarTrabajador($data);
			if($res){
				$this->session->set_flashdata('correcto','Se guardo exitosamente');
				redirect(base_url().'trabajadores');
			}else{
				$this->session->set_flashdata('error','No se guardo correctamente');
				redirect(base_url().'trabajadores');
			}
	}



	//ACTUALIZAR TRABAJADOR
	public function editarTrabajador($idTrabajador)
	{		
		$data = array(
			'trabajadorEdit' => $this->trabajadorModel->actualizaridTrabajador($idTrabajador)
		);
		$this->load->view('trabajadores/headTrabajador');
		$this->load->view('navegacionAdministrador');
		$this->load->view('trabajadores/editar',$data);
		$this->load->view('footerAdministrador');
	}
	
	public function updateTrabajador()
	{
		$idTrabajador = $this->input->post('txtIdtrabajador'); 
		$nombre		=   $this->input->post('txtnombre');
		$apellidos  =   $this->input->post('txtapellidos');
		$telefono   =   $this->input->post('txtcelular');
		$domicilio  =   $this->input->post('txtdomicilio');
		$usuario    =   $this->input->post('txtusuario');
		$contraseña =   $this->input->post('txtcontraseña');
		$idRol      =   $this->input->post('txtidRol');
		$estado		=   $this->input->post('txtEstado');
		$TrabajadorActual = $this->trabajadorModel->actualizaridTrabajador($idTrabajador);				
				$data= array(
					'idTrabajador' 	=>$idTrabajador,    
					'nombre'		=> $nombre,
					'apellidos' 	=> $apellidos,
					'telefono'  	=> $telefono,
					'domicilio' 	=> $domicilio,
					'usuario'   	=> $usuario,
					'contraseña'	=> $contraseña,
					'idRol'     	=> $idRol,
					'estado'		=> $estado
				);
				$res = $this->trabajadorModel->actualizarTrabajador($idTrabajador,$data);
				if ($res) {
					$this->session->set_flashdata('correcto','Se guardo correctamente');
					redirect(base_url().'trabajadores');
				}else{
					$this->session->set_flashdata('error','No se pudo actualizar el usuario');
					redirect(base_url().'trabajadores/editarTrabajador'.$idTrabajador);
				}
	}

	#ELIMINAR TRABAJADOR
	public function deleteTrabajador($idTrabajador)
	{
		$data = array(
			'estado' => "10",
		);
		$this->trabajadorModel->actualizarTrabajador($idTrabajador,$data);
		redirect(base_url().'trabajadores');
	}
}
