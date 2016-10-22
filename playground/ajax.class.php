<?php
//melhor abstract ou interface?

abstract class CubeConn {
	protected static $baseURl = "https://h-pmsp/conteudo-web/";
	private $headers;
	public $URl;
	public $connectParams;
	
	public function __construct() {
		$this->headers = ["Authotization token"];
	}
	
	public function setConfig(){
		//configuracoes da conexao
	}
	public function connect() {
		//conexao e retorno de dados		
	}
	
	public function CRUD($type) {
		switch($type){
			case 'POST':
				//novo
			break;
			case 'GET':
				//carregar
			break;
			case 'PUT':
				//modificar
			break;
		}
		
	}
}

