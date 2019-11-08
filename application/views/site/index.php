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
				    <h2>Acesse os grupos</h2>
				    <p>um grupo que se reune num horario assecivel para estudar, veja que materias ja temos grupos</p>
					<a href="grupo-teste.php"><button type="button"class="borda-redonda">Acesse</button></a>
				  </div>
				  
				  <div class="column">
				    <h2>Atividades</h2>
				    <p>Veja as atividades extra-curriculares, que você pode fazer no seu tempo livre na escola</p>
				    <a href="lista_atividades.php"><button type="button"class="borda-redonda">Acesse</button></a>
				  </div>
				  
				  <div class="column">
				    <h2>Faça parte de tudo isso</h2>
				    <p>Faça seu cadastro e comece a participar dos grupos de estudo e das atividades disponiveis</p>
				    <a href="cadastrar.php"><button type="button"class="borda-redonda">Acesse</button></a>
				  </div>

				</div>
            
            </div>        
        
        	

        
<?php
    include 'rodape.php';
?>