<?php 

function validaNome(string $nome) : bool{

	if (empty($primeiroNome) && empty($segundoNome)){
		setMensagemErro('Nome não pode ser vazio, digite novamente!');
		return false;
	}else if (strlen($primeiroNome) < 3 && strlen($segundoNome) < 3){
		setMensagemErro('Nome muito pequeno!');
		return false;
	}else if (strlen($primeiroNome) > 40 && strlen($segundoNome) > 40){
		setMensagemErro('Nome muito extenso!');
		return false;
	}

	return true;
}

function validaIdade(string $idade) : bool{

	if (!is_numeric($idade)) {
		setMensagemErro('Digite um número!');
		return false;
	}

	setMensagemSucesso($primeiroNome . ' ' . $segundoNome . ' tem '. $idade . ' de idade');
	return null;
}
