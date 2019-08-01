<?php

class Usuario extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("usuario_model", "usuario");
	}

	public function salvar(){
		//recupera os dados da view
		$nome = $this->input->post("nome");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		//echo "$nome, $login, $senha";

		$this->usuario->inserir();
		//redirect(site_url("usuario/index"));
		redirect();
	}	

	public function adicionar(){
		//carrega uma view
		$this->load->view("usuario/formulario");
	}

	public function index(){
		//busca os dados do banco pela model
		$resultado = $this->usuario->obterTodos();
		$vetor['usuarios'] = $resultado;
		$vetor['titulo'] = "Usuários cadastrados no banco de dados";
		$this->load->view("usuario/lista", $vetor);	
	}

	public function excluir($codigo){
		$this->usuario->deletar($codigo);
		echo  $this->db->last_query();
		redirect(site_url("usuario/index"));
	}

	public function form_edit($codigo){
		$vetor["usuario"] = $this->usuario->pegaUsuarioPorCod($codigo);
		$this->load->view("usuario/form_edit", $vetor);

	}

	public function atualizar(){
		$this->usuario->update();
		redirect(site_url("usuario/index"));
	}
}

?>