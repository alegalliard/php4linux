<?php
//todas as definicoes de classe sao globais (esse arquivo da erro)

namespace Bradesco;
class Conta {
	protected $titular;
	protected $saldo;
	protected $banco;
	
	public function depositar($valor) {
		$this->saldo += $valor;
	}
	
	
	public function setSaldo() {
		$this->saldo = $saldo;
	}	
	public function getSaldo() {
		return $this->saldo;
	}

	
	public function setTitular() {
		$this->titular = $valor;
	}
	public function getTitular() {
		return $this->titular;
	}
	
	
	
	public function setBanco($banco){
		$this->banco = $banco;
	}
	public function getBanco(){
		return $this->banco;		
	}
	
}


class ContaBradesco extends Conta {
	public function __construct(){
		$this->setBanco("Bradesco");
	}
}


namespace Itau;
class ContaItau extends Conta {
	public function __construct(){
		$this->setBanco("Itau");
	}
}

$bradesco = new ContaBradesco();
echo "Banco: {$bradesco->getBanco()}";


$itau = new ContaItau();
echo "Banco: {$itau->getBanco()}";