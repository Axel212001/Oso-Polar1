<?php 

class login extends CI_Controller 
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('loginModel');
	}
	public function index()
	{
		if($this->session->userdata('login')){
			redirect(base_url().'homeAdministrador');
		}else{

			$this->load->view('headAdiministrador');
			$this->load->view('navegacionAdministrador');
			$this->load->view('contenidoAdministrador');
			$this->load->view('footerAdministrador');
		}
	}
	public function iniciarSesion()
	{
		$txtnombre = $this->input->post('txtnombreT');
		$txtpass   = $this->input->post('txtpassT');
		$res 	   = $this->loginModel->login($txtnombre,$txtpass);
		//var_dump($res);
		if (!$res) {
		    $this->session->set_flashdata('error','El usuario y/0 contraseña son incorrectos');
		    redirect(base_url().'Inicio');
		 } else{
		 	$data = array(
		 		'idTrabajador' => $res->idTrabajador,
		 		'nombres'	   => $res->nombre.' '.$res->apellidos,
		 		'idRol'		   => $res->idRol,
		 		'login'		   => TRUE,
		 	);
		 	echo $this->session->set_userdata($data);
		 	redirect(base_url().'homeAdministrador');
		 }
	}
	public function cerrarSesion()
	{
		$this->session->sess_destroy();
		redirect(base_url().'Inicio');
	}
}