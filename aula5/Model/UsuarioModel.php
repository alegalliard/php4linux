<?php

namespace Model;

use Lib\Banco;
use Entities\EntityUsuario;

class UsuarioModel{
	private $banco;
	private $usuario;
	public $entidade;
	
	public function __construct(Banco $banco, EntityUsuario $usuario){
		$this->banco = $banco;
		$this->entidade = $usuario;
	}
}