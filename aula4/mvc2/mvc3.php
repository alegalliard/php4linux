<?php

require("Model.php");
require("View.php");
require("Controller.php");

$model = new Model();
$controller = new Controller($model);
$view = new View($model, $controller);

echo $view->montarForm();
if(isset($_GET['action'])) {
	$controller->{$_GET['action']}($_POST);
	
}

