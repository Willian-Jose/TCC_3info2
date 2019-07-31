<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1><?php echo $titulo; ?></h1>
	<hr />

	<a href="<?= site_url("usuario/adicionar") ?>">Adicionar</a>

	<table border="1" width="100%">
	<tr>
		<td>nome</td>
		<td>email</td>
		<td>Ações</td>
	</tr>
	<?php 

			foreach ($usuarios as $usuario) {
				echo "<tr>";
				echo "<td>$usuario->nome</td>";
				echo "<td>$usuario->email</td>";
				echo "<td>"
					."<a href='". site_url("usuario/excluir/$usuario->cod_usuario") ."'>Excluir</a> "
					."<a href='". site_url("usuario/form_edit/$usuario->cod_usuario") ."'>Atualizar</a> "
					. "</td>";
				echo "</tr>";
			}

	?>
	</table>
</body>
</html>