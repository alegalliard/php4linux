<?php
#uma classe nao e objeto
class Usuario 
{
	public $email; //visibilidade nomeDoAtributo
	public $senha;
	
	public function cadastrarUsuario() //visibilidade nomeDoMetodo
	{
		#this aponta para a classe 
		$this->email = "lalala@uol.com.br";
		$this->senha = "123456";
	}
	public function atualizarUsuario()
	{
	
	}
}

#instanciando objeto da classe
#agora e um objeto
$usuario = new Usuario();

#acessando o objeto
$usuario->email  = "";