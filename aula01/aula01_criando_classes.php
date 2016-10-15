<?php
#uma classe nao e objeto
class Usuario 
{
	public $email; //visibilidade nomeDoAtributo
	public $senha;
	
	public function cadastrarUsuario() //visibilidade nomeDoMetodo
	{	
		echo "Cadastrando usuario... <br>";
		echo $this->email . "<br>";
		echo $this->senha;
		echo "<hr>";
	}
	
	public function atualizarUsuario()
	{
	
	}
}

#instanciando objeto da classe
#agora e um objeto
$usuario = new Usuario();

#acessando o objeto
$usuario->email  = "silvio@santos.com";
$usuario->senha = "greress";

#chamando a funcao
$usuario->cadastrarUsuario();



$usuario2 = new Usuario();

#acessando o objeto
$usuario2->email  = "laio@santos.com";
$usuario2->senha = "65d321";

#chamando a funcao
$usuario2->cadastrarUsuario();