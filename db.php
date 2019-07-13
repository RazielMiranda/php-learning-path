<?php 

$servidor='localhost';
$user = 'root';
$senha = 'database@LOCAL';
$db = 'aula_php';

$conexao = mysqli_connect($servidor,$user,$senha,$db);


$query = "SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT DATA_NASCIMENTO, NOME_ALUNOS FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao,$query);

$query = "SELECT ID_ALUNOS, ID_CURSOS FROM ALUNOS_CURSOS";
$consulta_matriculas = mysqli_query($conexao,$query);










