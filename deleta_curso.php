<?php 

include 'db.php';

$id_curso = echo $_GET['ID_CURSO'];

$query = "DELETE FROM CURSOS WHERE ID = $id_curso";


mysqli_query($conexao ,$query)

header('location:index.php?pagina=cursos');

?>