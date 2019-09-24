<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1><?php echo $titulo; ?></h1>
	<hr />
	<table border="1" width="100%">
	<tr>
		<td>Lugar</td>
		<td>Regente</td>
		<td>Dia</td>
		<td>Matéria</td>
		<td>Descrição</td>
		<td>Inscreva-se</td>
	</tr>
	<?php 
			foreach ($grupos as $grupo) {
				echo "<tr>";
				echo "<td>$grupo->lugar</td>";
				echo "<td>$grupo->regente</td>";
				echo "<td>$grupo->dia_grupo</td>";
				echo "<td>$grupo->materia_grupo</td>";
				echo "<td>$grupo->desc_grupo</td>"; 
				echo "<td>".
					"<a href='". site_url("grupo/detalhe/$grupo->cod_grupo") ."'>Ver detalhes</a>"."</td>";
				echo "</tr>";
			}
			
	?>
	</table>
</body>
</html>