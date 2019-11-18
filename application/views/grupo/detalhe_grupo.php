
	<div class="main_body">
		<div class="main_top">
			<h1>Detalhe do grupo</h1>
		</div>
		<section class="informacao-perfil">
		<?php 
			foreach ($grupos as $grupo) {
				echo "<tr>";
				echo "<td>$grupo->lugar</td> - "; 
				echo "<td>$grupo->regente</td> - ";
				echo "<td>$grupo->dia_grupo</td> - ";
				echo "<td>$grupo->materia_grupo</td>"; 
			}
	?>
	<?php 
	
	if($testes == NULL){
		echo"<pre>";
		echo "Clique no ícone para participar:";
		echo "<a href='". site_url("grupo/entrar/$grupo->cod_grupo") ."'>
				<img width='20' height='20' 
				src='".base_url('bootstrap/open-iconic/svg/task.svg')."'>
				</a>";
				}else{
				echo"<pre>";
				echo "Clique no ícone cancelar sua participação:";
				echo "<a href='". site_url("grupo/sair/$grupo->cod_grupo") ."'>
				<img width='20' height='20' 
				src='".base_url('bootstrap/open-iconic/svg/arrow-circle-left.svg')."'>
				</a>";
				}
				
		?>
		</section>
		</div>