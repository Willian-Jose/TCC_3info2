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
           // $this->session->set_flashdata("success", "Logado com sucesso!");
            $this->load->view('site/index');
        } else {
            $this->session->set_flashdata("danger", "Usuario ou senha inválidos");
            redirect('/');
        }
    }

    public function home(){
        $this->load->view('site/index');

    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }

    //public function home(){
        //$data['level'] = $this->session->userdata('level_id');
        //$data['nome'] = $this->session->userdata('nome');
        //$data['email'] = $this->session->userdata('email');
       // $data['codigo'] = $this->session->userdata('cod_usuario');

        //if($data['level'] == 1){
           // redirect('admin');
        //}
        //else if($data['level'] == 2){
           // redirect('kuesioner/submited'); 
        //}
        /*else{
             redirect('sub_unit/home');
        }*/
    //}
}

?>