<html>
<head>
    <link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.css") ?>">
    <link rel="stylesheet" href="<?= base_url("bootstrap/css/style.css") ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>TCC</title>
</head>
<body>
<style>
    .hide{
        display:none;
    }
</style>
<script>
    $(document).ready(function(){
        $(".botao").click(function(){
            $(".div1").toggleClass("hide");
            $(".div2").toggleClass("hide");
        });
        $(".botao2").click(function(){
            $(".div1").toggleClass("hide");
            $(".div2").toggleClass("hide");
        });
    })
</script>
<div class="container">
<div class="div1">
<!--<p><?= ($_SESSION['usuario_logado']['cod_usuario']); ?></p> -->

    <?php if($this->session->flashdata("success")) : ?>
    <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
    <?php endif ?>
    <?php if($this->session->flashdata("danger")) : ?>
    <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
    <?php endif ?>
    <?php if(isset($mensagens)) echo $mensagens; ?>


    <h1 class="text-white">Login</h1>
    <?php 
    $style = array(
        "class" => "text-white"
    );
    echo form_open("login/autenticar");
    echo form_label("Email", "email",$style);
    echo form_input(array(
        "name" => "email",
        "id" => "email",
        "class" => "form-control",
    ));

    echo form_label("Senha", "senha",$style);
    echo form_password(array(
        "name" => "senha",
        "id" => "senha",
        "class" => "form-control",
    ));
    echo form_button(array(
        "class" => "btn bg-success text-white",
        "type" => "submit",
        "content" => "Login"
    ));

    echo form_close();
?>
<button class="botao btn bg-success text-white">Não possui cadastro ainda?</button>
</div>
 
<div class ="div2 hide">
<h1 class="text-white">Cadastro</h1>
    <?php 
    echo form_open("usuario/autenticar");
    echo form_label("Nome", "nome",$style);

    echo form_input(array(
        "name" => "nome",
        "id" => "nome",
        "class" => "form-control",
    ));

    echo form_label("Email", "email",$style);
    echo form_input(array(
        "name" => "email",
        "id" => "email",
        "class" => "form-control ",
    ));

    echo form_label("Senha", "senha",$style);
    echo form_password(array(
        "name" => "senha",
        "id" => "senha",
        "class" => "form-control",
    ));

    echo form_button(array(
        "class" => "btn bg-success text-white",
        "type" => "submit",
        "content" => "Cadastrar"
    ));

    echo form_close();
?>
<button class="botao2 btn bg-success text-white">Já possui cadastro?</button>
</div>
</body>