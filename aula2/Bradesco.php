<?php

namespace Bradesco; 
class Conta {
	protected $titular;
	protected $saldo;
	protected $banco = "Bradesco";

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