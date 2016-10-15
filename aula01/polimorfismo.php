<?php
#sobrescrever metodos

class Conta {
	public $titular;
	public $saldo;
	
	public function depositar($valor) {
		$this->saldo += $valor;
	}
	
	
	public function verSaldo(){
		echo "Saldo atual: {$this->saldo}";
	}
	
	public function mostrarTipoConta(){
		echo "<br>Esta e uma conta comumm <hr>";
	}
}

class Poupanca extends Conta {
	public function mostrarTipoConta(){
		echo "<br>Esta e uma conta poupanca <hr>";
	}
}

class Corrente extends Conta {
	public function mostrarTipoConta(){
		echo "<br>Esta e uma conta corrente <hr>";
	}
}


$conta1 = new Conta();
$conta1->titular = "Titular conta comum";
$conta1->depositar(300);
$conta1->verSaldo();
$conta1->mostrarTipoConta();


$conta2 = new Poupanca();
$conta2->titular = "Titular conta poupanca";
$conta2->depositar(500);
$conta2->verSaldo();
$conta2->mostrarTipoConta();

$conta3 = new Corrente();
$conta3->titular = "Titular conta corrente";
$conta3->depositar(400);
$conta3->verSaldo();
$conta3->mostrarTipoConta();
