<?php

class Conta {
	protected $titular;
	protected $saldo;
	
	public function depositar($valor) {
		$this->saldo += $valor;
	}
	public function verSaldo() {
		echo "<hr> Saldo atual: {$this->saldo}</hr>";
	}
	
	public function verTitular() {
		echo "<hr> Titular: {$this->titular}</hr>";
		
	}
}

class Poupanca extends Conta {
	
	public function nomearTitular($nome){
		$this->titular = $nome;
		
	}
	public function mostrarTipoConta(){
		echo "<hr> Sou uma conta poupanca</hr>";
	}
	
}

$cp = new Poupanca();
$cp->nomearTitular("Maria");
$cp->depositar(300);
$cp->verSaldo();
$cp->verTitular();
