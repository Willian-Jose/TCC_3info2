<?php 

class Primeiro_controller extends CI_Controller{
	
	public function index(){
		echo "acesso a função index";
	}

	public function ola(){
		echo "Acessando uma função pelo controlador";
	}

	public function digaOla($nome, $alimento){
			echo "Bem vindo $nome, voce curte $alimento";
	}

	


}