<?php 

Class Pessoa{
	#public pode ser acessada em qualquer lugar do código
	#private só pode ser acessada dentro da classe
	#protection ...
	private $nome;

	public function __construct($tmpnome)
	{
		$this->nome = $tmpnome;
	}

	// public function falarNome(){
	// 	echo $this->nome;
	// }

	public function setNome($novoNome){
		$this->nome = $novoNome;
	}

	public function getNome(){
		return $this->nome;
	}

}

