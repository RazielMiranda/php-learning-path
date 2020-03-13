<?php 

class ContaBancaria{

	public $banco;
	public $nomeTitular = 'Raziel Miranda';
	public $numeroAgencia = '3456';
	public $numeroConta;
	private $saldo = 1000.00;

	public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta){
		echo 'eu sou o construtor';
	}

	public function obterSaldo(){
		return 'saldo';
	}

}

$conta = new ContaBancaria(
	'Nubank',
	'Raziel M. Rodrigues',
	'0001',
	'5678-8',
	1500.00
);
