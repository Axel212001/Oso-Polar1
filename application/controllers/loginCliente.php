<?php 

class loginCliente extends CI_Controller 
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('loginClienteModel');
		
	}
	public function index()
	{
		if($this->session->userdata('loginCliente')){
			redirect(base_url().'homeUsuario');
		}else{

			$this->load->view('head');
			$this->load->view('NavegacionPrincipal');
			$this->load->view('NavegacionSecundaria');
			$this->load->view('contenidoHomeUsuario');
			$this->load->view('footer');
			$this->load->view('recursosScripts');
		}
	}
	public function iniciarSesionCliente()
	{
		$txtnombre = $this->input->post('txtnombre');
		$txtpass   = $this->input->post('txtpass');
		$res 	   = $this->loginClienteModel->loginCliente($txtnombre,$txtpass);
		//var_dump($res);
		if (!$res) {
		    $this->session->set_flashdata('error','El usuario y/0 contraseña son incorrectos');
		    redirect(base_url().'Inicio');
		 } else{
		 	$data = array(
		 		'idCliente' => $res->idCliente,
		 		'nombre'	=>$res->nombre,
		 		'apellidos' =>$res->apellidos,
		 		'nombres'	=> $res->nombre.' '.$res->apellidos,
		 		'correo'	=>$res->correo,
		 		'usuario'	=>$res->usuario,
		 		'login'		=> TRUE,
		 	);
		 	echo $this->session->set_userdata($data);
		 	redirect(base_url().'homeUsuario');
		 }
	}
	public function cerrarSesionCliente()
	{
		$this->session->sess_destroy();
		redirect(base_url().'Inicio');
	}
}