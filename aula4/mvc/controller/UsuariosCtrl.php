<?php

require('../model/UsuariosModel.php');
require('../view/UsuariosView.php');

class UsuariosCtrl {
	private $mod;
	private $view;
	
	public function __construct(){
		$this->mod = new UsuariosModel('Nome', 'Email','Senha');
	}
	
	public function getObj(){
		return $this->mod;
	}
}
$ctrl  = new UsuariosCtrl();
$view = new UsuariosView($ctrl->getObj());
$view->mostrarDados();
