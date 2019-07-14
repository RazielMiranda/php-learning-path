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

$query = "SELECT ALUNOS.NOME_ALUNOS, CURSOS.NOME_CURSOS 
FROM ALUNOS, CURSOS, ALUNOS_CURSOS
WHERE ALUNOS_CURSOS.ID_ALUNOS = ALUNOS.ID_ALUNOS 
AND ALUNOS_CURSOS.ID_CURSO = CURSOS.ID_CURSO";

$consulta_matriculas = mysqli_query($conexao,$query);


