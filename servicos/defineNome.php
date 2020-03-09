<?php 

function definePessoa(string $primeiroNome, string $segundoNome, string $idade) : ?string{

	if (validaNome($primeiroNome, $segundoNome) && validaIdade($idade)) {
		setMensagemSucesso('Seu nome: '.$primeiroNome.' '.$segundoNome.'<br>Sua idade: '.$idade);
		return null;
	}else{
		return getMensagemErro();
	}

}
