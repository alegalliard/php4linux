<?php
//controla o tipo de parametro que esta sendo passado
class Usuario {
	public $email;
	public $senha;
	
	public function verUsuario(){
		echo "<p>Email: {$this->email}</p>";
		echo "<p>Senha: {$this->senha}</p>";
	}
	
}

class Conta {
	public $titular;
	public $saldo;
	
	public function verConta() {
		echo "Titular: {$this->titular}<br>";
		echo "Saldo: {$this->saldo}<br>";
	}
}


class CRUD {
							  //type hinting (Usuario): php7. So classes e arrays
	public function cadastrar(Usuario $usuario){
		echo "Cadastrando novo usuario... <hr>";
		echo "<pre>";
		var_dump($usuario);
		echo "</pre>";
	}
	
	public function deletar(Usuario $usuario){
		echo "Deletando usuario... <hr>";
		echo "<pre>";
		var_dump($usuario);
		echo "</pre>";
	}
	
	public function atualizar(array $usuario){
		echo "Atualizando usuario... <hr>";
		echo "<pre>";
		var_dump($usuario);
		echo "</pre>";
	}
}

$usuario = new Usuario();
$usuario->email = 'pofpof@lala.com.br';
$usuario->senha = '15d4das';


$conta = new Conta();
$conta->titular = "Titular da conta";
$conta->saldo = 1000;


$crud = new Crud();
$crud->cadastrar($usuario);
$crud->deletar($usuario);
$crud->atualizar(array("email"=>"email@teste.com", "senha"=>"97788"));
//$crud->cadastrar($conta); //vai dar erro, porque instanciei conta ao inv[es de usuario