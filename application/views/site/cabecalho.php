<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url("bootstrap/css/style.css") ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Teste grupos de estudo</title>
</head>
<body>
	<div id="page">
		
		<nav>
	        <div">
	        	<img class="logo" src="<?= base_url("bootstrap/img/logo.png")?>">
	            <ul>
	           	   	<li><a href="index.php">Início</a></li>
	               	<li><a href="atividades.php">Atividades</a></li>
	                <li><?= anchor('Grupo/index', 'Grupos', 'title="News title"'); ?></li>
	                <li><a href="perfil.php">Perfil</a></li>
	                <li><a href="cadastrar.php">Cadastro</a></li>
	                <li style="float: right;"><a href="login.php">Login</a></li>
	            </ul>
	        </div>
	    </nav>
	    <div id="main">