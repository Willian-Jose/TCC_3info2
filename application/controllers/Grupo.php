<?php

class Usuario extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("grupo_model", "grupo");
    }

    public function entrar(){
        
        $this->grupo->inserir();
    }
}