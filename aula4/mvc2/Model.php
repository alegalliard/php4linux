<?php

require("mysql.php");

class Model {
	public $pdo;
	public function __construct() {
		$this->pdo = Conn::conectar();
	}
	
	public function salvar($dados) {
		try {
			$query = "INSERT INTO usuario (nome,email,senha) 
					VALUES (:nome, :email, :senha);";
			$stmt = $this->pdo->prepare($query);
			
			$stmt->bindValue(':nome', $dados['nome']);
			$stmt->bindValue(':email', $dados['email']);
			$stmt->bindValue(':senha', $dados['senha']);
			
			$stmt->execute();
			echo 'salvo com sucesso';
		}
		catch( PDOException $e){
			echo 'Erro ao salvar - '. $e->getMessage();
		}
	}
}