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

ID INT(3) NOT NULL AUTO_INCREMENT,
NOME_CURSO VARCHAR(120) NOT NULL,
CARGA_HORARIA INT(2) NOT NULL,
	CONSTRAINT PK_CURSO PRIMARY KEY(ID)
);

";

$executar = mysqli_query($conexao,$query);

?>