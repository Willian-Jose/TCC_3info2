<?php

class Site extends CI_Controller{
	public function index(){
		//$this->load->view("site/");
		$this->template->load("template/template_site.php", "site/home");	
	}
	
}

?>