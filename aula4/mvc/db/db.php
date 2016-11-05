<?php

class Conn {
	private static $conn;
	
	public static function conectar(){
		self::$conn = new PDO('mysql:dbname=aulapdo;host=localhost','root','123456');
	
		return self::$conn;
	
	}
	
}