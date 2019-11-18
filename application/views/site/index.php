<?php
    include 'cabecalho.php';
?>
			<?php if($this->session->flashdata("success")) : ?>
    		<p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
    		<?php endif ?>
			<div class="main_body">
        	<div class="main_top">
				<h1>Seja bem vindo</h1>
        	</div>
        	<img src="<?= base_url("bootstrap/img/index.png") ?>" class="imgindex">
           	

				<div class="row">
				  <div class="column">
				    <h2>Grupos de Estudo</h2>
				    <p>Um grupo que se reune num horario acessível para estudar, veja todos os Grupos aqui!</p>
					<a href=""><button type="button"class="borda-redonda"><?= anchor('Grupo/index', 'Acessse', 'title="Grupos"'); ?></button></a>
				  </div>
				  
				  <div class="column">
				    <h2>Perfil</h2>
				    <p>Verifique seus dados acessando seu perfil com apenas um clique abaixo!</p>
				    <a href=""><button type="button"class="borda-redonda"><?= anchor('Usuario/perfil', 'Perfil', 'title="Perfil"'); ?></button></a>
				  </div>
				  
				  <div class="column">
				    <h2>Criadores</h2>
				    <p>Projeto Integrador - 3info2 - Acesse o GitHub desse projeto e acompanhe as mudanças!</p>
				    <a href="https://github.com/Willian-Jose/TCC_3info2"><button type="button"class="borda-redonda">Acesse</button></a>
				  </div>

				</div>
            
            </div>        
        
        	

        
<?php
    include 'rodape.php';
?>