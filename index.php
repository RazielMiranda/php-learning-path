<?php 

echo "<h1>MYSQLI CONNECT</h1>";

$servidor = "localhost"; //caso seja em outro local é so colocar o IP
$usuario = "root";
$senha = "database@LOCAL";
$database = "escola_curso";

$conexao = mysqli_connect($servidor,$usuario,$senha,$database);

if ($conexao) {
	echo "Tudo ok";
}

?>