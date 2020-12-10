<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller 
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('loginClienteModel');
		$this->load->model('productosModel');
		$this->load->model('clientesModel');
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
			'usuario'  		=> $usuario,
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

	public function index()
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

	public function TV()
	{

		$data = array(
			'productosindex' => $this->productosModel->selectCategoriaTv()
		);
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('TVyVid',$data);
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}

	public function producto5()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('producto5');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}

	public function audio()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('audio');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}

	public function producto6()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('producto6');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}

	public function cables()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('cables');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}

	public function producto7()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('producto7');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}

	public function energia()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('energia');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}

	public function producto8()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('producto8');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}

	public function seguridad()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('seguridad');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}

	public function producto3()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('producto3');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}

	public function sucursales()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('sucursales');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}

	public function nosotros()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('nosotros');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}
	
	public function carrito()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('carrito');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}
	public function producto1()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('producto1');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}
	public function producto2()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('producto2');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}

}
