<?php

class Conn {
	private static $conn;
	
	public static function conectar(){
		self::$conn = new PDO('mysql:dbname=aulapdo;host=localhost','root','123456');
		self::$conn->setAttribute(PDO::ATTR_ERRMODE, 
				PDO::ERRMODE_EXCEPTION);
		return self::$conn;
	
	}
	
}