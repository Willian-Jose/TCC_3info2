<?php

class Membro_grupo extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("Membro_grupo_model", "grupo");
		
	}

	public function entrar($codigo_grupo){
		$codigo_user = $_SESSION['usuario_logado']['cod_usuario'];
		$this->grupo->inserir($codigo_grupo, $codigo_user);
		echo  $this->db->last_query();
		redirect(site_url("grupo/index"));
	}

    public function verificaEntrada(){
    	$codigo_user = $_SESSION['usuario_logado']['cod_usuario'];
    	$resultado = $this->grupo->verificaParticipante($codigo_user);
    	return $resultado;	
	}

	
}