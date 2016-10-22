<?php

 class Conta{
 	public $titular;
 	private $saldo = 0;
 	
 	public function getTitular(){
 		return $this->titular;
 	}
 	public function getSaldo(){
 		return $this->saldo;
 	}
 	
 	
 	public function setTitular($nome){
 		$this->titular = $nome;
 	}
 	public function depositar($valor){
 		$this->saldo += $valor;
 	}
 	
 	public function sacar($valor){
 		if($valor > $this->saldo){
 								//mensagem, codigo do erro (customizado)
 			throw new Exception("Saldo insuficiente", 225);
 		} else {
 			$this->saldo -= $valor;
 		}
 	}
 	
 	public function verSaldo(){
 		return $this->saldo;
 	}
 }
 
 
 try {
	 $conta = new Conta();
	 $conta->setTitular = "Titular da Conta";
	 $conta->depositar(100);
	 $conta->sacar(200);
 } catch (Exception $e) {
 	echo "ERRO {$e->getCode()} - <b>{$e->getMessage()}</b>";
 	echo "<hr>";
 } finally {
 	echo "Saldo atual {$conta->verSaldo()}";
 	
 }