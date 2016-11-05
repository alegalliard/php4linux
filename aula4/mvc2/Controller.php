<?php
require("entity.php");

class Controller {
	private $model;
	public $ent;

	public function __construct(Model $model){
		$this->model = $model;
		$this->ent = new Usuarios();
		
	}

	public function cadastrar($dados) {
		$this->ent->setNome($dados['nome']);
		$this->ent->setEmail($dados['email']);
		$this->ent->setSenha($dados['senha']);
		
		return $this->model->salvar($this->ent);
	}
	
	public function atualizar($dados, $id) {
		$this->ent->setId($id);
		$this->ent->setNome($dados['nome']);
		$this->ent->setEmail($dados['email']);
		$this->ent->setSenha($dados['senha']);
		
		return $this->model->editar($this->ent);
		
	}
}