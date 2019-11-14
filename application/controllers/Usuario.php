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
		$this->usuario->inserir();
	}
	 public function autenticar() {
		     $this->load->library('form_validation');
		     $this->form_validation->set_rules('nome', 'Nome', 
				  'required|min_length[5]|max_length[150]');
		     $this->form_validation->set_rules('senha', 'Senha', 'required|min_length[6]|max_length[32]',
				   array('required' => 'Você deve preencher a %s.'));
		     $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[30]|is_unique[usuario.email]');
		     if ($this->form_validation->run() == FALSE) {
		           $erros = array('mensagens' => validation_errors());
		           $this->load->view('site/login', $erros);
		     } else {
				   $erros = array('mensagens' => 'Cadastrado!');
				   $this->salvar();  
				   $this->load->view('site/login', $erros);
				   
		     }
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

	public function perfil(){
		$codigo_user = $_SESSION['usuario_logado']['cod_usuario'];
		$vetor['usuarios'] = $this->usuario->perfil($codigo_user);
		$this->load->view("site/cabecalho");
		$this->load->view("usuario/perfil", $vetor);
		$this->load->view("site/rodape");
	}
}

?>