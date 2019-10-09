<?php 
if($this->session->userdata("usuario_logado")==null){
	redirect('/');
}  ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url("bootstrap/css/style.css") ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Teste grupos de estudo</title>
<link rel="shortcut icon" href="<?= base_url("bootstrap/img/logo.png")?>"/>
</head>
<body>

	<div id="page">
		
		<nav>
	        <div">
	        	<img class="logo" src="<?= base_url("bootstrap/img/logo.png")?>">
	            <ul>
	           	   	<li><a href="index.php">Início</a></li>
	               	<li><a href="atividades.php">Atividades</a></li>
	                <li><?= anchor('Grupo/index', 'Grupos', 'title="Grupos"'); ?></li>
	                <li><a href="perfil.php">Perfil</a></li>
	                <li><a href="cadastrar.php">Cadastro</a></li>
					<?php
					if (isset($_SESSION)) {
					?>
						<li style="float: right;">
						<?= anchor('Login/logout', 'Logout', 'title="Logout"'); ?>
						</li>
					<?php	
					}
					?>
	            </ul>
	        </div>
	    </nav>
	    <div id="main">