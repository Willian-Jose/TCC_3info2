
	<div class="main_body">
		<div class="main_top">
			<h1 style="margin-left:8%;">Instituto Federal Catarinense - Campus Araquari</h1>
		</div>
		<div class="imgcontainer">
			<br></br>
			<img src="<?= base_url("bootstrap/img/img_avatar2.png") ?>" alt="avatar" class="avatar">
		</div>
		<div>
			</br>
			<?php 
			foreach ($usuarios as $usuario) {
			echo "<h3 class=".'perfil'.">$usuario->nome</h3>";
			echo "</br>";
			echo "<b><h2 class=".'informacao-perfil'.">Informações de Perfil</h2></b>";
			echo "<section class=".'informacao-perfil'.">";
			echo "<div class=".'infos'."><b>Email: $usuario->email</b></br></div>";
			echo "<div class=".'infos'."><b>Código: $usuario->cod_usuario</b></br></div>";
			echo "</section>";
			}
		?>
		</div>
	</div>