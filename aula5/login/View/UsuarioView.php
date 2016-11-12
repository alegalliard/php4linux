<?php
namespace View;

use Model\UsuarioModel;
use Controller\UsuarioController;

class UsuarioView {
	private $model;
	public $controller;
	
	public function __construct(UsuarioModel $model, UsuarioController $controller){
		$this->model = $model;
		$this->controller = $controller;
	}
	
	public function carregarTela($dados) {
		
		
		$this->model->buscarUsuario($dados);
		
		print_r($_SESSION);
		
	}
}