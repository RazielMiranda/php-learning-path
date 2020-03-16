<?php 

class ContaBancaria{

	public $banco;
	public $nomeTitular;
	public $numeroAgencia;
	public $numeroConta;
	private $saldo;

	public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo){
		$this->banco = $banco;
		$this->nomeTitular = $nomeTitular;
		$this->numeroAgencia = $numeroAgencia;
		$this->numeroConta = $numeroConta;
		$this->saldo = $saldo;
	}

	public function obterConta(){
		echo $this->banco;
		echo $this->nomeTitular;
		echo $this->numeroAgencia;
		echo $this->numeroConta;
		echo $this->saldo;
	}

}
