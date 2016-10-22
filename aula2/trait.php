<?php
//na interface so fazemos a assinatura do metodo
//na trait pode-se passar implementacoes de metodo
//serve apenas para metodos
//diferente da interface, nao preciso usar todos os metodos se utilizar um trait
//traits sobrescrevem metodos da classe pai
trait Operacoes {
	public function depositar($valor){
		$this->saldo += $valor;
	}
	
	public function sacar($valor){
		$this->saldo -= $valor;
	}
	
	public function mostrarMetodo() {
		echo "Eu so metodo da Trait Operacoes";
	}
}

class Conta {
	use Operacoes;
	public $titular;
	public $saldo;
	
	public function verSaldo() {
		echo "<hr>Saldo: {$this->saldo}<hr>";
	}
	public function mostrarMetodo() {
		echo "Eu so metodo da Classe Conta";
	}
}

class Poupanca extends Conta {
	 use Operacoes;	 
}

/*
$obj = new Conta();
$obj->depositar(700);
$obj->verSaldo();
$obj->sacar(300);
*/

$obj = new Poupanca();
$obj->mostrarMetodo();
$obj->verSaldo();
echo '<hr>';
$obj1 = new Conta();
$obj1->mostrarMetodo();
$obj1->verSaldo();