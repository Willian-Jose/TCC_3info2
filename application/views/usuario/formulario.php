<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>FORM DE CADASTRO</h1>
	<hr />

	<form method="post" action="<?php echo site_url("usuario/salvar") ?>">
		
		<label>Nome</label><br />
		<input type="text" name="nome"><br />

		<label>email</label><br />
		<input type="text" name="email"><br />

		<label>Senha</label><br />
		<input type="password" name="senha"><br />

		<button type="submit">Cadastrar</button>


	</form>
</body>
</html>