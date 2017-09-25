<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Consultas_model extends CI_Model{
	public function __construct()
    {
        parent::__construct();
    }
	public function listar_clientes(){
		$this->db->select('c.PersonaComercio_cedulaRuc, c.nombres, c.apellidos,c.email, c.celular');
        $this->db->from('billing_cliente c');
        $this->db->limit(100);
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
	}
	public function search_users($string,$pos_comodin)
    {
        $this->db->like('PersonaComercio_cedulaRuc', $string, $pos_comodin);
        $query = $this->db->get('billing_cliente');
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }
}
?>