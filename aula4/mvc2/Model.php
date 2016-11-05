<?php

require("mysql.php");


class Model {
	public $pdo;
	public function __construct() {
		$this->pdo = Conn::conectar();
		
	}
	
	
	
	public function salvar(Usuarios $dados) {
		try {
			$query = "INSERT INTO usuario (nome,email,senha) 
					VALUES (:nome, :email, :senha);";
			$stmt = $this->pdo->prepare($query);
			
			$stmt->bindValue(':nome', $dados->getNome());
			$stmt->bindValue(':email', $dados->getEmail());
			$stmt->bindValue(':senha', $dados->getSenha());
			
			$stmt->execute();
			return 'salvo com sucesso';
		}
		catch( PDOException $e){
			return 'Erro ao salvar - '. $e->getMessage();
		}
	}
	
	public function editar(Usuarios $dados) {
		try {
			$query = "UPDATE usuario SET nome = :nome, email = :email ,senha = :senha
					WHERE id = :id;";
			$stmt = $this->pdo->prepare($query);
				
			$stmt->bindValue(':nome', $dados->getNome());
			$stmt->bindValue(':email', $dados->getEmail());
			$stmt->bindValue(':senha', $dados->getSenha());
			$stmt->bindValue(':id', $dados->getId());
				
			$stmt->execute();
			return 'Atualizado com sucesso';
		}
		catch( PDOException $e){
			return 'Erro ao atualizar - '. $e->getMessage();
		}
		
	}
	
	public function buscarRegistros() {
		
		$query = "SELECT * FROM usuario;";
		$stmt = $this->pdo->prepare($query);
		
		$stmt->execute();
		
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
		
	}
}