
	<div class="main_body">
		<div class="main_top">
			<h1>grupos de estudo</h1>
		</div>
		<div class="tabela_gp">	
			<table>
			  <tr>
			    <th>Lugar</th>
			    <th>Regente</th>
			    <th>Dia</th>
			    <th>Matéria</th>
			    <th>Descrição</th>
			    <th>Detalhe</th>

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
					"<a href='". site_url("grupo/detalhe/$grupo->cod_grupo") ."'><img width='20' height='20' src='".base_url('bootstrap/open-iconic/svg/account-login.svg')."'></a>"."</td>";
				echo "</tr>";
			}
			
	?>

			</table>
		</div>
	</div>
