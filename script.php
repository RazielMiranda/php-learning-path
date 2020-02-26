<?php 
session_start();
$primeiroNome = $_POST['primeiroNome'];
$segundoNome = $_POST['segundoNome'];
$idade = $_POST['idade'];

if (empty($primeiroNome) && empty($segundoNome)){
	$_SESSION['mensagem de erro'] = 'Nome não pode ser vazio, digite novamente!';
	header('location:index.php');
	return;
}else if (strlen($primeiroNome) < 3 && strlen($segundoNome) < 3){
	$_SESSION['mensagem de erro'] = 'Nome muito pequeno!';
	header('location:index.php');
	return;
}else if (strlen($primeiroNome) > 40 && strlen($segundoNome) > 40){
	$_SESSION['mensagem de erro'] = 'Nome muito extenso!';
	header('location:index.php');
	return;
}else if (!is_numeric($idade)) {
	$_SESSION['mensagem de erro'] = 'Digite um número!';
	header('location:index.php');
	return;
}else{
	$_SESSION['mensagem de sucesso'] = $primeiroNome . ' ' . $segundoNome . ' tem '. $idade . ' de idade';
}

header('location:index.php');
