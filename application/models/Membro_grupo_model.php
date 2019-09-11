<?php  

class Membro_grupo_model extends CI_Model{

	var $cod_usuario;
	var $cod_grupo;

	public function inserir($codigo_grupo, $cod_usuario){
		$this->cod_grupo = $codigo_grupo;
		$this->cod_usuario = $cod_usuario;
		$this->db->insert("membro_grupo", $this);
	}

	public function verificaParticipante($codigo_user){
		$this->db->where('cod_usuario', $codigo_user);
		return $this->db->get('membro_grupo')->result_array();
	}

	public function taDentro($codigo_user){
		$this->db->from("membro_grupo");
		$this->db->where('cod_usuario',$_SESSION['usuario_logado']['cod_usuario']);
		$this->db->where('cod_grupo',$grupo->cod_grupo);
		return $this->db->select(count());
	}
}
