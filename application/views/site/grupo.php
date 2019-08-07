<html>
<head>
    <link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.css") ?>">
    <title>Home</title>
</head>
    <body>
    <?php if($this->session->flashdata("success")) : ?>
    <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
    <?php endif ?>
    <h1>grupos</h1>
    <?php 
    echo form_open("grupo/entrar");
    echo form_button(array(
        "class" => "btn btn-primary",
        "type" => "submit",
        "content" => "Entrar"
    ));
    echo form_close();
    ?>
    </body>





</html>