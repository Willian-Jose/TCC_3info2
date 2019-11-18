<?php  

class Usuario_model extends CI_Model{

	var $cod_usuario;
	var $nome;
	var $email;
	var $senha;
	var $nivel = 1;


	public function inserir(){
		$this->nome = $this->input->post("nome");
		$this->email = $this->input->post("email");
		$this->senha = md5($this->input->post("senha"));
		$this->db->insert("usuario", $this);
	}

	public function obterTodos(){
		return $this->db->get("usuario")->result();	
	}

	public function deletar($codigoUsuario){
		$this->db->where('cod_usuario', $codigoUsuario);
		$this->db->delete('usuario');
		
	}

	public function pegaUsuarioPorCod($cod){
		$this->db->where("cod_usuario", $cod);
		return $this->db->get("usuario")->row();
	}

	public function update(){
		$this->nome = $this->input->post("nome");
		$this->email = $this->input->post("email");
		$this->senha = $this->input->post("senha");
		$cod_usuario = $this->input->post("codigo");
		$this->db->where("cod_usuario", $cod_usuario);
		$this->db->update("usuario", $this);
	}

	public function LogarUsuarios($email, $senha){
		$this->db->where("email", $email);
		$this->db->where("senha", $senha);
		$usuario = $this->db->get("usuario")->row_array();
		return $usuario;
	}

	public function perfil($cod_usuario){
		$this->db->where("cod_usuario", $cod_usuario);
		return $this->db->get("usuario")->result();
	}
}
?>