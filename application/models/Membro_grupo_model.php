<?php  

class Membro_grupo_model extends CI_Model{

	var $cod_usuario;
	var $cod_grupo;

	public function entrar($codigo_grupo, $cod_usuario){
		$this->db->where('cod_usuario', $codigoUsuario);
		$this->db->delete('usuario');
		
	}
}
