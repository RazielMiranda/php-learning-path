<?php 

echo "<h1>MYSQLI CONNECT: CONEXÃO COM BANCO DE DADOS MYSQL</h1>";

$servidor = "localhost"; //caso seja em outro local é so colocar o IP
$usuario = "root";
$senha = "database@LOCAL";
$database = "aula_php";

$conexao = mysqli_connect($servidor,$usuario,$senha,$database);

if ($conexao) {
	echo "Tudo ok";
}else{
	echo "erro ao conectar";
}




echo("<H1>CRIANDO TABELA COM PHP</H1>");
#Tabela cursos (nome_curso, carga_horaria)

$query = "

CREATE TABLE CURSOS(
	ID_CURSOS INT(3) NOT NULL AUTO_INCREMENT,
	NOME_CURSOS VARCHAR(120) NOT NULL,
	CARGA_HORARIA INT(2) NOT NULL,
		CONSTRAINT PK_CURSOS PRIMARY KEY(ID_CURSOS)
);

";

$executar = mysqli_query($conexao,$query);


$query = "

CREATE TABLE ALUNOS(
	ID_ALUNOS INT(3) NOT NULL AUTO_INCREMENT,
	NOME_ALUNOS VARCHAR(255) NOT NULL,
	DATA_NASCIMENTO VARCHAR(8) NOT NULL,
		CONSTRAINT PK_ALUNOS PRIMARY KEY(ID_ALUNOS)
	);
";

$executar = mysqli_query($conexao,$query);

$query = "

CREATE TABLE ALUNOS_CURSOS(
	ID_ALUNOS_CURSOS INT(3) NOT NULL AUTO_INCREMENT,
	ID_CURSOS INT(3) NOT NULL,
	ID_ALUNOS INT(3) NOT NULL,
		CONSTRAINT PK_ALUNOS_CURSOS PRIMARY KEY(ID_ALUNOS_CURSOS)
	);
";

$executar = mysqli_query($conexao,$query);

if ($executar) {
	echo "Tabelas criadas";
}else{
	echo "Erro ao criar tabelas<br>";
}

#GERALMENTE NÃO SE USA O PHP PARA CRIAR TABELAS

#INSERIR DADOS NAS TABELAS
$inserirDados = "

	INSERT INTO ALUNOS(ID_ALUNOS,NOME_ALUNOS,DATA_NASCIMENTO)
		VALUES(DEFAULT,'NELIA MIRANDA','01012000');

";

$executarInsert = mysqli_query($conexao,$inserirDados);

if ($executarInsert) {
	echo "Dado inserido com sucesso!<br>";
}else{
	echo "Erro ao inserir dados!";
}

$selectDados = "

SELECT * FROM ALUNOS;

";

$executar = mysqli_query($conexao,$selectDados);



$inserirDados = "

INSERT INTO CURSOS(NOME_CURSOS,CARGA_HORARIA)
VALUES('PHP E MYSQL', 10);


";



$executarInsert = mysqli_query($conexao, $inserirDados);

if ($executarInsert) {
	print("Insert do curso ok");
}else{
	print("erros no curso");
}


$inserirDados = "

INSERT INTO ALUNOS_CURSOS(ID_CURSOS,ID_ALUNOS)
VALUES (1,3);

";

$executarInsert = mysqli_query($conexao, $inserirDados);


if ($executarInsert) {
	print("Insert do ALUNOS_CURSOS ok");
}else{
	print("erros no ALUNOS_CURSOS");
}





















?>