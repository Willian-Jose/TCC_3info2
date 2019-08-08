<?php

class Grupo extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("grupo_model", "grupo");
    }

    public function entrar(){
        
        $this->grupo->inserir();
    }

    public function index(){
		//busca os dados do banco pela model
		$resultado = $this->grupo->obterTodos();
		$vetor['grupos'] = $resultado;
		$vetor['titulo'] = "Grupos de Estudo";
		$this->load->view("grupo/lista_grupo", $vetor);	
	}

    
}