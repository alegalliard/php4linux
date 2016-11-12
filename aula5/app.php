<?php
require('autoload.php');
	use Lib\Banco;
	use Entities\EntityUsuario;
	use Entities\EntityCliente;
	use Model\UsuarioModel;
	use Model\ClienteModel;
	
	
	
	$banco = new Banco();
	$entityUsuario = new EntityUsuario();
	$entityCliente = new EntityCliente();
	
	$usuarioModel = new UsuarioModel($banco, $entityUsuario);
	$clienteModel = new ClienteModel($banco, $entityCliente);
	
	echo $usuarioModel->entidade->getLogin();
	echo $clienteModel->entidade->getNome();