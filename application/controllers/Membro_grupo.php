<?php

class Membro_grupo extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("Membro_grupo_model", "grupo");
		
	}

	
}