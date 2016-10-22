<?php

class Pai {
	protected static $nome = "Classe pai";
	
	public static function getNome() {
		return static::$nome;
		//se eu colocar self estou apontando para o pai
		//usar o static acompanha a referencia da classe
	}
}

class Filha extends Pai {
	
	protected static $nome = "Classe Filha";
}

echo Filha::getNome();
echo "<hr>";
echo Pai::getNome();