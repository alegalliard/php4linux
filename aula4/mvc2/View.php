<?php
class View {
	private $model;
	private $controller;

	public function __construct(Model $model, Controller $controller) {
		$this->model = $model;
		$this->controller = $controller;
	}
	
	public function montarForm(){
		$form = "";
		$form .= '<form action="?action=cadastrar" method="POST">';
		$form .= '
<input type="text" name="nome" placeholder="Nome">
<input type="text" name="email" placeholder="Email">
<input type="password" name="senha" placeholder="Senha">
<input type="submit" vaue="Enviar">';
		$form .= "</form>";
		
		return $form;
	}
}