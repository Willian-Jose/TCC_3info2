<?php

class Login extends CI_Controller{
    public function index(){
        $this->load->view("site/login");
    }

	public function autenticar(){
        $this->load->model("usuario_model", "usuario");
        $email = $this->input->post("email");
		$senha = md5($this->input->post("senha"));
        $usuario = $this->usuario->LogarUsuarios($email, $senha);
        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("success", "Logado com sucesso!");
        } else {
            $this->session->set_flashdata("danger", "Usuario ou senha inválidos");
        }
        redirect();
    }
}

?>