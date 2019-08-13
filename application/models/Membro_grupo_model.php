<?php  

class Membro_grupo_model extends CI_Model{

	var $cod_usuario;
	var $cod_grupo;

	public function inserir($codigo_grupo, $cod_usuario){
		$this->cod_grupo = $codigo_grupo;
		$this->cod_usuario = $cod_usuario;
		$this->db->insert("membro_grupo", $this);
		
	}
}
