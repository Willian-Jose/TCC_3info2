<html>
<head>
    <link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.css") ?>">
    <title>TCC</title>
</head>
<body>
<div class="container">
<!--<p><?= ($_SESSION['usuario_logado']['cod_usuario']); ?></p> -->

    <?php if($this->session->flashdata("success")) : ?>
    <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
    <?php endif ?>

    <?php if($this->session->flashdata("danger")) : ?>
    <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
    <?php endif ?>



    <h1>Login</h1>
    <?php 
    echo form_open("login/autenticar");
    echo form_label("Email", "email");
    echo form_input(array(
        "name" => "email",
        "id" => "email",
        "class" => "form-control",
    ));

    echo form_label("Senha", "senha");
    echo form_password(array(
        "name" => "senha",
        "id" => "senha",
        "class" => "form-control",
    ));

    echo form_button(array(
        "class" => "btn btn-primary",
        "type" => "submit",
        "content" => "Login"
    ));

    echo form_close();
?>

<h1>Cadastro</h1>
    <?php 
    echo form_open("usuario/salvar");
    echo form_label("Nome", "nome");
    echo form_input(array(
        "name" => "nome",
        "id" => "nome",
        "class" => "form-control",
    ));

    echo form_label("Email", "email");
    echo form_input(array(
        "name" => "email",
        "id" => "email",
        "class" => "form-control",
    ));

    echo form_label("Senha", "senha");
    echo form_password(array(
        "name" => "senha",
        "id" => "senha",
        "class" => "form-control",
    ));

    echo form_button(array(
        "class" => "btn btn-primary",
        "type" => "submit",
        "content" => "Cadastrar"
    ));

    echo form_close();
?>
</body>