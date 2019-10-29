<?php

class Grupo extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("grupo_model", "grupo");
		$this->load->model("Membro_grupo_model", "grupo2");
	}
	
	public function verificaEntrada($codigo_grupo){
    	$codigo_user = $_SESSION['usuario_logado']['cod_usuario'];
    	$resultado = $this->grupo2->verificaParticipante($codigo_user,$codigo_grupo);
    	return $resultado;	
	}

	public function verificaDetalhe($codigo_grupo){
		$resultado = $this->grupo->grupoDetalhe($codigo_grupo);
		return $resultado;
	}

    public function index(){
		//busca os dados do banco pela model
		$resultado = $this->grupo->obterTodos();
		$vetor['grupos'] = $resultado;
		$vetor['titulo'] = "Grupos de Estudo";
		$this->load->view("site/cabecalho");
		$this->load->view("grupo/grupo-teste", $vetor);
		$this->load->view("site/rodape");	
	}

	public function entrar($codigo_grupo){
		$codigo_user = $_SESSION['usuario_logado']['cod_usuario'];
		$this->grupo2->inserir($codigo_grupo, $codigo_user);
		//echo  $this->db->last_query();
		redirect(site_url("grupo/index"));
	}

	public function Entrada_Saida($codigo_user){
		$codigo_user = $_SESSION['usuario_logado']['cod_usuario'];
		$resultado = $this->grupo2->taDentro($cod_usuario,$codigo_grupo);
		return $resultado;
	}

	public function detalhe($codigo_grupo){ 
		$grupo_detalhe = $this->verificaDetalhe($codigo_grupo);
		$resultado = $this->verificaEntrada($codigo_grupo);
		$vetor['teste'] = $resultado;
		$vetor['grupos'] = $grupo_detalhe;
		$this->load->view("site/cabecalho");
		$this->load->view("grupo/detalhe_grupo",$vetor);	
		$this->load->view("site/rodape");	
	}

}