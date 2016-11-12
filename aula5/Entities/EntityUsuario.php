<?php

namespace Entities;

class EntityUsuario {

	private $nome = "Nome do usuario";

	public function getLogin() {
		return $this->nome;
	}
}