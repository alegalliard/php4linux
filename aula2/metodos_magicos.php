<?php

class Usuario {
	private $nome;
	private $email;
	
	//public function __construct($nome, $email){
	public function __construct(array $dados){
// 		$this->nome = $nome;
// 		$this->email = $email;
		foreach($dados as $index => $value){
			$this->$index = $value;
		}
	}
	
	public function getNome(){
		return $this->nome;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function __descruct(){
		echo "<hr>Objecto destruido";
	}
}

$dados = array("nome"=>"Nome do usuario", "email"=>"email@mail.com");
$usuario = new Usuario($dados);

	//destruir o objeto antes
	// unset($usuario);

echo "<hr>";
echo $usuario->getNome();
echo "<hr>";
echo $usuario->getEmail();