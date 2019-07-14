<?php  

include 'db.php';

$id_aluno = $_POST['escolhe_aluno'];
$id_curso = $_POST['escolhe_curso'];

$query = "

INSERT INTO ALUNOS_CURSOS(ID_ALUNOS, ID_CURSOS)
VALUES ($id_aluno,$id_curso)

";


mysqli_query($conexao, $query);
header('location:index.php?pagina=matriculas');

