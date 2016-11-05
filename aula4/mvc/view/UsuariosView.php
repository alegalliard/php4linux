<?php
	//require_once('../controller/UsuariosCtrl.php');
	
	class UsuariosView {
		private $mod;
		
		public function __construct(UsuariosModel $mod){
			$this->mod = $mod;
		}
		
		public function mostrarDados() {
			echo "Nome do usuario: {$this->mod->getNome()}<br>";
			echo "Email do usuario: {$this->mod->getEmail()}<br>";
			echo "Senha do usuario: {$this->mod->getSenha()}<br>";
		}
	}
	//instanciando e usando automaticamente uma unica vez
	//(new UsuariosView())->mostrarDados();