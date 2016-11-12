<?php

namespace Controller;

use Model\UsuarioModel;
use Entity\UsuarioEntity;

class UsuarioController{
	private $model;
	public $entidade;
	
	public function __construct(UsuarioModel $model, UsuarioEntity $usuario) {
		$this->model = $model;
		$this->entidade = $usuario;
		
	}
	
	public function logarUsuario(Array $dados){
		$this->entidade->setLogin($dados['login']);
		$this->entidade->setSenha($dados['senha']);
		
		
		$retorno = $this->model->buscarUsuario($this->entidade);
		
		if($retorno){
			session_start();
			$_SESSION['nome'] = $retorno->nome;
			$_SESSION['email'] = $retorno->email;
		} else {
			echo 'Usuario nao encontrado';
			
		}
	}
}