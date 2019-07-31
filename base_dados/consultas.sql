SELECT lugar, regente, desc_grupo, materia_grupo, dia_grupo from grupo;

SELECT desc_atividade, materia_atividade, data_cadastro, data_entrega from atividade;

SELECT nome, email from usuario;

SELECT nome, email, desc_tipo from usuario, tip_user, tipo_usuario where usuario.cod_usuario = tipo_usuario.cod_usuario and tip_user.cod_tipo = tipo_usuario.cod_tipo;

update tipo_usuario set cod_usuario where cod_usuario is null;

insert into tipo_usuario(cod_usuario,cod_tipo) values (1,2),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1);

SELECT nome, email, senha from usuario where email = $email and senha = $senha

UPDATE usuario set nome = $nome where codigo = 1

insert into usuario(nome,email,senha) values ($nome,$email,$senha)

$sql = "SELECT senha as senha, cod_usuario as valor 
        FROM usuario 
        WHERE email = '$_SESSION[email]'";
        $que = $mysqli->query($sql) or die($mysqli->error);
        $dado = $que->fetch_assoc();	