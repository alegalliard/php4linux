<?php

class Model {
	public $msg;
	public function __construct() {
		$this->msg = "Hello World";
	}
}

class View {
	private $model;
	private $controller;
	
	public function __construct(Model $model, Controller $controller) {
		$this->model = $model;
		$this->controller = $controller;
	}
	public function mostrarMsg() {
		//return $this->model->msg;
		return $this->controller->buscarMsg();
	}
}

class Controller {
	private $model;

	
	public function __construct(Model $model){
		$this->model = $model;
	}
	
	public function buscarMsg(){
		return $this->model->msg;
	}
}

$model = new Model();
$controller = new Controller($model);
$view = new View($model, $controller);
echo $view->mostrarMsg();