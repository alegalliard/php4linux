<?php
class Controller {
	private $model;

	public function __construct(Model $model){
		$this->model = $model;
	}

	public function mudarMsg(){
		return $this->model->msg = "Link clickado";
	}

	public function mudarMsg2(){
		return $this->model->msg = "Link clickado2";
	}
	
	public function cadastrar($dados) {
		$this->model->salvar($dados);
	}
}