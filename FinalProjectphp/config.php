<?php

	session_start();
	
	$host = 'localhost';
	$user = 'root';
	$pass = '';
    $db = 'tgss_db'; 


	//Conexión a la base de datos, PDO (PHP database objects )
	try{
		$conexion = new PDO("mysql:host=$host; dbname=$db",$user,$pass);
		
	}catch(Exception $e){
		echo "Hubo un error al conectar, lo siento";
		echo "El error fue: $e";
	}
	

?>
<br>
