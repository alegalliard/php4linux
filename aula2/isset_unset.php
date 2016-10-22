<?php
//metodos magicos

class Conta {
	//se for private $titular retorna false. Setado nao e declarado
	private $titular = '4Linux'; //isset/unset nao  funciona porque e private
	
	
	public function getTitular(){ //so funciona pra public
		return $this->titular;
	}
	
	public function __isset($name){
		echo "{$name} esta setado? <br>";
		return isset($this->name);
	}
	
	public function __unset($name){
		echo "Apagando {$name} <br>";
		unset($this->$name);
	}
}

$conta = new Conta();
echo $conta->getTitular()."<hr>";

var_dump(isset($conta->agencia));
unset($conta->titular);