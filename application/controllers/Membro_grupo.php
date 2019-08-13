<?php

class Membro_grupo extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("Membro_grupo", "grupo");
	}

	public function entrar($codigo){
		$this->grupo->inserir($codigo);
		echo  $this->db->last_query();
		redirect(site_url("usuario/index"));
	}

}