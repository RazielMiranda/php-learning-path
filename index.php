<?php 

include 'db.php';

include 'header.php';

$pagina = $_GET['pagina'];

if ($pagina == 'cursos') {
	include 'views/cursos.php';
}else if ($pagina == 'alunos') {
	include 'views/alunos.php';
}else if ($pagina == 'matriculas') {
	include 'views/matriculas.php';
}else{
	include 'views/home.php';
}


include 'footer.php';

?>