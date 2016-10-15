<?php

abstract class AbstractConta
{
	public $titular;
	public $saldo = 0;

	public function depositar($valor, $param2="", $param3="") 
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
	public abstract function mostrarTipoDeConta();
}


class ContaPoupanca extends AbstractConta 
{
	public $juros = 0.5;
	public function calcularJuros()
	{
		echo "<small>Valor dos juros: ". $this->saldo*($this->juros)."</small><br>";
		$this->saldo = $this->saldo*(1+$this->juros);
	}
	
	public function mostrarTipoDeconta() {
		echo "<br>eu sou uma conta poupanca";
	}
	
}

#nao se pode extender uma final class, isso vai gerar erro
/*final*/ class ContaPoupancaPremium extends ContaPoupanca 
{

	public function maisJuros ()
	{
		$this->juros = 2;
		echo "<br>Juros premium ". $this->juros;
	} 
	
}


$conta2 = new ContaPoupancaPremium();
$conta2->depositar(1000);
$conta2->calcularJuros();
$conta2->verSaldo();
$conta2->mostrarTipoDeconta();
$conta2->maisJuros();
