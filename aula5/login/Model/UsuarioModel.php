<?php
namespace Model;

use Lib\Db; 
use Entity\UsuarioEntity;
use PDO;
class UsuarioModel{
	private $db;
	
	public function __construct(Db $DB) {
		$this->db = $DB->getConn();
	}

	public function buscarUsuario(UsuarioEntity $usuario){
		
		
		
		$query = "SELECT nome, email FROM usuario 
							WHERE nome = :nome 
							AND senha = :senha;";
		$stmt = $this->db->prepare($query);
		
		$stmt->bindValue(':nome', $usuario->getLogin());
		$stmt->bindValue(':senha',$usuario->getSenha());
		$stmt->execute();
		
		if($stmt->rowCount()) {		
			$logado = $stmt->fetch(PDO::FETCH_OBJ);
			return $logado;
		} else {
			return false;
		}
				
	}
}