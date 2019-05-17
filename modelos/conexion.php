<?php
class Conexion
{
	static public function conectar()
	{
		$db = new PDO('mysql:host=supermarketpqrs-mysqldbserver.mysql.database.azure.com;
		port=3306;dbname=ubosque', 
		'andres74@supermarketpqrs-mysqldbserver', 
		'andres_22'
		);
		return $db;
		
	}
}
