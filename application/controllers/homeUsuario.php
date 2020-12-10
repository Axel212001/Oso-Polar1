<?php 

class homeUsuario extends CI_Controller 
{
	function __construct()
	{
		parent:: __construct();
		/*if(!$this->session->userdata('loginCliente')){
			redirect(base_url().'Inicio');
		}*/
	}
	public function index()
	{
		$this->load->view('head');
		$this->load->view('NavegacionPrincipal');
		$this->load->view('NavegacionSecundaria');
		$this->load->view('contenidoHomeUsuario');
		$this->load->view('footer');
		$this->load->view('recursosScripts');
	}
	

}
