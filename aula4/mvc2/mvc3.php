<?php

require("Model.php");
require("View.php");
require("Controller.php");

$model = new Model();
$controller = new Controller($model);
$view = new View($model, $controller);

if(isset($_GET['action']) && $_GET['id']) {
	echo $controller->{$_GET['action']}($_POST, $_GET['id']);
	
} else if (isset($_GET['action'])){
	echo $controller->{$_GET['action']}($_POST);
}


if(isset($_GET['id'])) {
	echo $view->montarForm($_GET['id']);
} else {
	echo $view->listarUsuarios();
}

