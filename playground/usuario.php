<?php

interface InterfaceUsuario {
	public function usuarioParams();
	public function criarSolicitacao();
	public function carregarSolicitacoes($id);
	public function reiteirarSolicitacao($id);	
}

class Usuario implements InterfaceUsuario {
	public $nome;
	public $cpf;
	public $solicitacoes = [];
	
	public function usuarioParams(){
		$this->nome = "Teste";
		echo "Nome do usuario: {$this->nome}";
	}
	public function criarSolicitacao(){
		
	}
	
	public function carregarSolicitacoes($id){
		
	}
	public function reiteirarSolicitacao($id){
		
	}
}

$maria = new Usuario();
$maria->usuarioParams();