<?php

trait CRUDUsuario{
	public function cadastrarUsuario(){
		echo "<hr>Acadastrando usuario...<br>";
	}
	public function deletarUsuario(){
		echo "<hr>Deletando usuario...<br>";
	}
	
	//resolvendo conflitos ->metodo repetido
	public function validarCPF(){
		echo "Validando CPF na trait CRUD";
	}
}


trait Validacoes {
	public function validarEmail(){
		echo "<b>Validando email</b>";
	}
	
	//resolvendo conflitos
	public function validarCPF(){
		echo "Validando CPF na trait Validacoes";
	}
}

class Usuario {
	use CRUDUsuario, Validacoes {
		//resolvendo conflitos
		Validacoes::validarCPF insteadof CRUDUsuario;
	}
}

$obj = new Usuario();
$obj->cadastrarUsuario();
$obj->validarEmail();
$obj->deletarUsuario();
$obj->validarCPF();
