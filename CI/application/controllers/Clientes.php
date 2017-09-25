<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Clientes extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
    }
	public function index(){
		$data['listar'] = $this->Consultas_model->listar_clientes();
		$data['titulo'] = "Listado de clientes";
		$this->load->view('plantilla/header',$data);
		$this->load->view('index',$data);
		$this->load->view('plantilla/footer');
	}
	public function ajax(){
		$valor = $this->input->post("valor");
		$data['listar'] = $this->Consultas_model->search_users($valor,'after');
		$data['titulo'] = "Listado de clientes con ajax";
		//echo $valor."hola";
		echo json_encode($data);
	}
}

?>