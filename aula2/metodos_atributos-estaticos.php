<?php

class Usuario {
	
	public static $tipoUsuario = "Administrativo";
	public $nome;
	public $email;

	public function setNome($valor) {
		$this->nome = $valor;
	}
	
	public function setEmail($valor){
		$this->email = $valor;
	}
	
	public function getNome(){
		return $this->nome;
	}
	
	public function getEmail(){
		return $this->email;
	}
	//atributo estatico so e acessivel no escopo de um metodo estatico
	public static function mostrarTipoUsuario() {
		return self::$tipoUsuario; //usa self ao inves de this
	}
} 

$obj = new Usuario();
$obj->setNome("Matias");
$obj->setEmail("lala@lolo.com.br");

echo "Nome: {$obj->getNome()}";
echo "<hr>";
echo "Email: {$obj->getEmail()}";
echo "<hr>";
echo "Tipo de usuario: ". Usuario::mostrarTipoUsuario();