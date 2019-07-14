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
}else if($pagina == 'inserir_novo_curso'){
	include 'views/inserir_novo_curso.php';
}else if($pagina == 'inserir_novo_aluno'){
	include 'views/inserir_novo_aluno.php';
}else{
	include 'views/home.php';
}


include 'footer.php';

?>