<?php  

class Grupo_model extends CI_Model{

	var $cod_grupo;
	var $lugar;
	var $regente;
	var $dia_grupo;
	var $materia_grupo;
	var $desc_grupo;

	public function obterTodos(){
		return $this->db->get("grupo")->result();	
	}
	
}