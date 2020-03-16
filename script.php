<?php
include 'ContaBancaria.class.php';

$banco = $_POST['banco'];
$nomeTitular = $_POST['nomeTitular'];
$numeroAgencia = $_POST['numeroAgencia'];
$numeroConta = $_POST['numeroConta'];

$conta = new ContaBancaria(
	$banco,
	$nomeTitular,
	$numeroAgencia,
	$numeroConta,
	0
);

header('location:index.php');
