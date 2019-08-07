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
           	

				<div class="row">
				  <div class="column">
				    <h2>Column</h2>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
					<a href="#"><button type="button"class="btn btn-success btn-block borda-redonda">Acesse</button></a>
				  </div>
				  
				  <div class="column">
				    <h2>Column</h2>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
				    <a href="#"><button type="button"class="btn btn-success btn-block borda-redonda">Acesse</button></a>
				  </div>
				  
				  <div class="column">
				    <h2>Column</h2>
				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
				    <a href="#"><button type="button"class="btn btn-success btn-block borda-redonda">Acesse</button></a>
				  </div>

				</div>
            
            </div>        
        
<?php
    include 'rodape.php';
?>