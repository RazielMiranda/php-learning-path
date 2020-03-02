<?php 

function validaNome(string $nome) : bool{

	if (empty($primeiroNome) && empty($segundoNome)){
		$_SESSION['mensagem de erro'] = 'Nome não pode ser vazio, digite novamente!';
		return false;
	}else if (strlen($primeiroNome) < 3 && strlen($segundoNome) < 3){
		$_SESSION['mensagem de erro'] = 'Nome muito pequeno!';
		return false;
	}else if (strlen($primeiroNome) > 40 && strlen($segundoNome) > 40){
		$_SESSION['mensagem de erro'] = 'Nome muito extenso!';
		return false;

	return true;
}

function validaIdade(string $idade){

	if (!is_numeric($idade)) {
		$_SESSION['mensagem de erro'] = 'Digite um número!';
		return;
	}else{
		$_SESSION['mensagem de sucesso'] = $primeiroNome . ' ' . $segundoNome . ' tem '. $idade . ' de idade';
	}


}
