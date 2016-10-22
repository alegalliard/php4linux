<?php
//metodos  magicos

class Usuario {
	//impedindo que se crie atributos de forma dinamica
	public $nome;
	
	public function __set($name, $value){
		//vai impedir de setar por fora (exemplo email
		
		if(property_exists($this, $name)){
			$this->$name = $value;
		} else {
			echo "Atributo  {$name} nao existe [SET]<br>";		
		}
		
	}
	
	public function __get($name){
		if(property_exists($this, $name)){
			return $this->$name;
		} else {
			echo "Atributo {$name} nao existe [GET]<br>";
		}
		
	}
}

$obj = new Usuario();
//criando atributos dinamicos que serao bloqueados se eu usar __set e __get na classe
$obj->nome = "Nome usuario";
$obj->email = "email@linux.com";
$obj->idade = 25;
echo "<hr> {$obj->nome}<br> {$obj->email}";