<?php 
session_start();
$primeiroNome = $_POST['primeiroNome'];
$segundoNome = $_POST['segundoNome'];
$idade = $_POST['idade'];

if (empty($primeiroNome)){
	$_SESSION['mensagem de erro'] = 'Nome não pode ser vazio';
	return;
}

if (strlen($primeiroNome) < 3 && strlen($primeiroNome) < 3){
	echo "Nome menor que três caracteres";
	return;
}

if (strlen($primeiroNome) > 40 && strlen($primeiroNome) > 40){
	echo "Nome muito extenso";
	return;
}

if (strlen($primeiroNome) > 40 && strlen($primeiroNome) > 40){
	echo "Nome muito extenso";
	return;
}

if (!is_numeric($idade)) {
	echo "Digite um número";
	return;
}

echo $primeiroNome;
echo $segundoNome;
echo $idade;
