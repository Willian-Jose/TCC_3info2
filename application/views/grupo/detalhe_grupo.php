
	<div class="main_body">
		<div class="main_top">
			<h1>Detalhe do grupo</h1>
		</div>
		<section class="informacao-perfil">
		<!-- <div class="infos"><b>Responsavel do Grupo: </b></div>
		<div class="infos"><b>Horario: </b></div>
		<div class="infos"><b>Local: </b></div>
		<div class="infos"><p>Mussum Ipsum, cacilds vidis litro abertis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Atirei o pau no gatis, per gatis num morreus. Leite de capivaris, leite de mula manquis sem cabeça. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.</p></div> -->
		<?php 
			foreach ($grupos as $grupo) {
				echo "<tr>";
				echo "<td>$grupo->lugar</td>";
				echo "<td>$grupo->regente</td>";
				echo "<td>$grupo->dia_grupo</td>";
				echo "<td>$grupo->materia_grupo</td>"; 
			}
	?>
	<?php 
	
	if($testes == NULL){
		echo "<a href='". site_url("grupo/entrar/$grupo->cod_grupo") ."'>
				<img width='20' height='20' 
				src='".base_url('bootstrap/open-iconic/svg/account-login.svg')."'>
				</a>";
				}else{
				echo "<a href='". site_url("grupo/sair/$grupo->cod_grupo") ."'>
				<img width='20' height='20' 
				src='".base_url('bootstrap/open-iconic/svg/account-login.svg')."'>
				</a>";
				}
				
		?>
		</section>
		</div>