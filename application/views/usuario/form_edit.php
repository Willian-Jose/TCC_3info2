<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>FORM DE ATUALIZAÇÃO</h1>
	<hr />

	<form method="post" action="<?php echo site_url("usuario/atualizar") ?>">
		<input type="hidden" name="codigo" value="<?= $usuario->cod_usuario ?>"><br />

		<label>Nome</label><br />
		<input type="text" name="nome" value="<?= $usuario->nome ?>"><br />

		<label>email</label><br />
		<input type="text" name="email" value="<?= $usuario->email ?>"><br />

		<label>Senha</label><br />
		<input type="password" name="senha" value="<?= $usuario->senha ?>"><br />

		<button type="submit">Cadastrar</button>


	</form>
</body>
</html>