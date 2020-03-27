<?php 
declare(strict_types=1);

class ContaBancaria
{

	//Tipo de declaração de variavel do PHP 7.3
	/**
	* @var string
	*/

	//Tipo de declaração de variavel do PHP 7.4
	private string $banco;

	/**
	* @var string
	*/

	private string $nomeTitular;

	/**
	* @var string
	*/

	private string $numeroAgencia;

	/**
	* @var string
	*/

	private string $numeroConta;

	/**
	* @var float
	*/

	private float $saldo;

	public function __construct
	(

		string $banco,

		string $nomeTitular,

		string $numeroAgencia,

		string $numeroConta,

		float $saldo

	) {

		$this->banco = $banco;

		$this->nomeTitular = $nomeTitular;

		$this->numeroAgencia = $numeroAgencia;

		$this->numeroConta = $numeroConta;

		$this->saldo = $saldo;
	}

	public function	obterSaldo(): string
	{
		return '<h2>Saldo atual: '.$this->saldo.'</h2>';
	}

	public function depositar(float $valor): string
	{
		$this->saldo += $valor;
		return 'Deposito de R$ '.$valor.' realizado :)';
	}

	public function saque(float $valor): string
	{
		$this->saldo -= $valor;
		return 'Saque de R$ '.$valor.' realizado :)';
	}

}
