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
			$tamanho = count($teste)-1;
			$tamanho2 = count($teste);
			echo $tamanho;
			echo $tamanho2; 
			foreach ($grupos as $grupo) {
				echo "<tr>";
				echo "<td>$grupo->lugar</td>";
				echo "<td>$grupo->regente</td>";
				echo "<td>$grupo->dia_grupo</td>";
				echo "<td>$grupo->materia_grupo</td>";
				echo "<td>$grupo->desc_grupo</td>";
				for ($i=0; $i <$tamanho2	; $i++) { 
					print_r($teste[$i]['cod_grupo']); 
					if ($teste[$i]['cod_grupo'] == $grupo->cod_grupo) {
						echo "<td>".
					"<a href='". site_url("grupo/entrar/$grupo->cod_grupo") ."'>Sair</a>";
					}
					if($tamanho2 == 0){
						echo "<td>".
					"<a href='". site_url("grupo/entrar/$grupo->cod_grupo") ."'>Entrar</a>";
					}	
				}
				
				echo "</tr>";
			}
			
	?>
	</table>
</body>
</html>