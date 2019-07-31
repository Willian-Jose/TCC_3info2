CREATE TABLE usuario (
cod_usuario int PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome varchar(150) NOT NULL,
email varchar(30) NOT NULL,
senha varchar(30) NOT NULL
);

CREATE TABLE tip_user (
cod_tipo int PRIMARY KEY NOT NULL AUTO_INCREMENT,
desc_tipo varchar(30)
);

CREATE TABLE disciplina (
cod_disciplina int PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome_disciplina varchar(30) NOT NULL,
desc_disciplina varchar(30)
);

CREATE TABLE atividade (
cod_atividade int PRIMARY KEY NOT NULL AUTO_INCREMENT,
cod_usuario int,
cod_disciplina int,
desc_atividade varchar(30) NOT NULL,
materia_atividade varchar(30) NOT NULL,
data_cadastro varchar(10) NOT NULL,
data_entrega varchar(10) NOT NULL,
CONSTRAINT fk_atividades_cod_usuario FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario),
CONSTRAINT fk_atividades_cod_disciplina FOREIGN KEY(cod_disciplina) REFERENCES disciplina (cod_disciplina)
);

CREATE TABLE curso_tecnico (
cod_curso int PRIMARY KEY NOT NULL AUTO_INCREMENT,
desc_curso varchar(30),
nome_curso varchar(30) NOT NULL
);

CREATE TABLE grupo (
cod_grupo int PRIMARY KEY NOT NULL AUTO_INCREMENT,
cod_usuario int,
lugar varchar(30) NOT NULL,
regente varchar(30) NOT NULL,
dia_grupo varchar(10) NOT NULL,
materia_grupo varchar(30) NOT NULL,
desc_grupo varchar(30),
CONSTRAINT fk_grupo_cod_usuario FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario)
);

CREATE TABLE turma (
cod_turma int PRIMARY KEY AUTO_INCREMENT,
cod_curso int,
nome_turma varchar(30) NOT NULL,
ano varchar(4) NOT NULL,
CONSTRAINT fk_turma_cod_curso FOREIGN KEY(cod_curso) REFERENCES curso_tecnico (cod_curso)
);

CREATE TABLE disciplina_turma (
cod_disciplina int,
cod_turma int,
CONSTRAINT fk_disciplina_turma_cod_disciplina FOREIGN KEY(cod_disciplina) REFERENCES disciplina (cod_disciplina),
CONSTRAINT fk_disciplina_turma_cod_turma FOREIGN KEY(cod_turma) REFERENCES turma (cod_turma)
);

CREATE TABLE turma_aluno (
cod_usuario int,
cod_turma int,
CONSTRAINT fk_turma_aluno_cod_usuario FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario),
CONSTRAINT fk_turma_aluno_cod_turma FOREIGN KEY(cod_turma) REFERENCES turma (cod_turma)
);

CREATE TABLE tipo_usuario (
cod_tipo int,
cod_usuario int,
CONSTRAINT fk_tipo_usuario_cod_tipo FOREIGN KEY(cod_tipo) REFERENCES tip_user (cod_tipo),
CONSTRAINT fk_tipo_usuario_cod_usuario FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario) ON DELETE CASCADE;
);

CREATE TABLE membro_grupo (
cod_usuario int,
cod_grupo int,
CONSTRAINT fk_membro_grupo_cod_usuario FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario),
CONSTRAINT fk_membro_grupo_cod_grupo FOREIGN KEY(cod_grupo) REFERENCES grupo (cod_grupo)
);


