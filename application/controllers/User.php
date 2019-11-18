<?php
class User extends CI_Controller{

	public function index(){
		$crud = new Grocery_CRUD();
		$crud->set_table("usuario");
		$crud->set_subject("Usuario");
		$crud->fields("nome","email","senha","nivel","confirma");
		//validação dos dados 
		$crud->unique_fields("email");
		$crud->set_rules("confirma","Confirma Senha", "matches[senha]");
		$crud->set_rules("email","Email", "valid_email['email']");

		$crud->required_fields("nome", "email", "senha","confirma");
		$crud->edit_fields("nome","senha","nivel");
		$crud->field_type("senha","password");
		$crud->field_type("confirma","password");
		$crud->display_as("confirma","Confirmar Senha");
		$crud->columns("nome","email","senha");

		$crud->callback_before_insert(array($this,"remove_confirma"));
		$form = $crud->render();
		//$this->load->view("site/cabecalho");
		$this->load->view("crud/index", $form,);
		//$this->load->view("site/rodape");	

	}

	public function remove_confirma($post_array){
		unset($post_array['confirma']);
		$post_array["senha"] = md5($post_array["senha"]); 
		return $post_array;
	}
}

?>