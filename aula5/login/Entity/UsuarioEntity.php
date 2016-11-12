<?php

namespace Entity;

class UsuarioEntity {
	
	private $login;
	private $senha;
	
	public function getLogin(){
		return $this->login;		
	}
	
	public function setLogin($valor){
		$this->login = $valor;
	}
	
	public function getSenha(){
		return $this->senha;
	}
	
	public function setSenha($valor){
		$this->senha = $valor;
	}
}