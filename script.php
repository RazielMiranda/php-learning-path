<?php 
session_start();
$primeiroNome = $_POST['primeiroNome'];
$segundoNome = $_POST['segundoNome'];
$idade = $_POST['idade'];

header('location:index.php');
