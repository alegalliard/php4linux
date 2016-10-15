<?php
class Conta 
{
	public $titular;
	public $saldo = 0;
	
	public function depositar($valor, $param2="", $param3="") //com o param2 e 3 setados assim nao precisa setar os parametros ao criar o objeto
	{
		$this->saldo = $this->saldo + $valor;
		//o mesmo que $this->saldo += $valor;
		
		echo $this->saldo ."<hr>";
	}
	
	public function sacar($valor)
	{
		$this->saldo -= $valor;
	}
}

//herdei a classe Conta
class ContaCorrente extends Conta {
	
	public function mostrarConta()
	{
		echo "Sou uma conta corrente";
	}
	
}
class ContaPoupanca extends Conta {
	
	public function mostrarConta() //essa e a assinatura do metodo
	{
		echo "Sou uma conta poupanca";
	}
}



$conta1 = new Conta();
$conta1->titular = "Titular da Conta 1";
$conta1->depositar(500);

$contaCorrente = new ContaCorrente();
$contaCorrente->titular = "Titular Conta Corrente";
$contaCorrente->mostrarConta();
$contaCorrente->depositar(600);



$contaPoupanca = new ContaPoupanca();
$contaPoupanca->titular = "Titular Conta Poupanca";
$contaPoupanca->mostrarConta();
$contaPoupanca->depositar(700);

