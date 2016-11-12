<?php

require("Lib/autoload.php");

use Lib\Db;
use Entity\UsuarioEntity;
use Model\UsuarioModel;
use View\UsuarioView;
use Controller\UsuarioController;

$db = new Db();
$entidade = new UsuarioEntity();
$model = new UsuarioModel($db);
$controller = new UsuarioController($model, $entidade);
$view = new UsuarioView($model,$controller);


if(isset($_POST) && (!empty($_POST['login']) || !empty($_POST['senha']))){
	$view->controller->logarUsuario($_POST);
	$controller->entidade;
// 	$view->carregarTela($_POST);
	
} else {
	header('Location: index.php');
	
}
