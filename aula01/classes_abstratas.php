<?php
//Nao pode ser instanciada como objeto, precisa ser extendida por alguma outra classe
//molde para outras classes
//contem caracteristicas gerais que servem pra outros objetos

abstract class AbstractConta
{
	public $titular;
	public $saldo = 0;

	public function depositar($valor, $param2="", $param3="") //com o param2 e 3 setados assim nao precisa setar os parametros ao criar o objeto
	{
		$this->saldo += $valor;

		echo "Seu saldo: ".$this->saldo ."<hr>";
	}
	
	public function verSaldo()
	{
		echo "Saldo Atual: ".$this->saldo."<hr>";
	}

	public function sacar($valor)
	{
		$this->saldo -= $valor;
	}
	
	//metodos abstratos, so declaro. Feito para ser usado depois\//todo mundo que herdar e obrigado a declarar
	public abstract function mostrarTipoDeConta();
}

#$conta1 = new Conta(); //instanciar uma classe abstrata nao funciona, so se usar heranca

class ContaPoupanca extends AbstractConta 
{
	public $juros = 0.5;
	public function calcularJuros()
	{
		echo "<small>Valor dos juros: ". $this->saldo*($this->juros)."</small><br>";
		$this->saldo = $this->saldo*(1+$this->juros);
	}
	
	#declaro ou implemento metodo abstrato para nao dar erro
	public function mostrarTipoDeconta() {
		echo "<br>eu sou uma conta poupanca";
	}
	
}

class ContaCorrente extends AbstractConta 
{
	//se eu nao declarar ou implementar o metodo abstrato, da erro
	public function mostrarTipoDeconta() {
		echo "<br>eu sou uma conta corrente";
	}
}


$conta1 = new ContaPoupanca();
$conta1->depositar(500);
$conta1->calcularJuros();
$conta1->verSaldo();
$conta1->mostrarTipoDeConta();

$conta2 = new ContaCorrente();
$conta2->mostrarTipoDeconta();