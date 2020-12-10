<?php 

class homeAdministrador extends CI_Controller 
{
	function __construct()
	{
		parent:: __construct();
		if(!$this->session->userdata('login')){
			redirect(base_url().'Inicio');
		}
	}
	public function index()
	{
		$this->load->view('headAdiministrador');
		$this->load->view('navegacionAdministrador');
		$this->load->view('contenidoAdministrador');
		$this->load->view('footerAdministrador');
	}
	

}
