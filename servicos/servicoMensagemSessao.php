<?php 

session_start();


function setMensagemErro(string $mensagemErro) : void{
	$_SESSION['mensagem de erro'] = $mensagemErro;
}

function getMensagemErro() : ?string{

	if (isset($_SESSION['mensagem de erro'])) {
		return $_SESSION['mensagem de erro'];
	}

	return null;
}