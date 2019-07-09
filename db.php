<?php 

$servidor='localhost';
$user = 'root';
$senha = 'database@LOCAL';
$db = 'aula_php';

$conexao = mysqli_connect($servidor,$user,$senha,$db);


$query = "SELECT * FROM CURSOS";
$consulta = mysqli_query($conexao, $query);















