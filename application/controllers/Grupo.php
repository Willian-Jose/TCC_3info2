<?php

class Grupo extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("grupo_model", "grupo");
		$this->load->model("Membro_grupo_model", "grupo2");
	}
	
	public function verificaEntrada(){
    	$codigo_user = $_SESSION['usuario_logado']['cod_usuario'];
    	$resultado = $this->grupo2->verificaParticipante($codigo_user);
    	return $resultado;	
	}

    public function index(){
		$vetor['entrada'] = $this->grupo2->taDentro($_SESSION['usuario_logado']['cod_usuario']);
		$vetor['teste'] = $this->grupo2->verificaParticipante($_SESSION['usuario_logado']['cod_usuario']);
		//busca os dados do banco pela model
		$resultado = $this->grupo->obterTodos();
		$vetor['grupos'] = $resultado;
		$vetor['titulo'] = "Grupos de Estudo";
		$this->load->view("grupo/lista_grupo", $vetor);	
	}

	public function entrar($codigo_grupo){
		$codigo_user = $_SESSION['usuario_logado']['cod_usuario'];
		$this->grupo2->inserir($codigo_grupo, $codigo_user);
		echo  $this->db->last_query();
		redirect(site_url("grupo/index"));
	}

	public function Entrada_Saida($codigo_user){
		$codigo_user = $_SESSION['usuario_logado']['cod_usuario'];
		$this->grupo2->taDentro($cod_usuario,$codigo_grupo);
	}

}