<?php
	include_once('config.php');
	if (isset($_POST['submit'])) {
		$nombre = $_POST['nombre'];
		$apellido =   $_POST['apellido'];
		$email =   $_POST['email'];
		$password =   $_POST['password'];
		$password_encriptada = password_hash($password, PASSWORD_DEFAULT);
		$sql = "INSERT INTO usuarios(nombre,apellido,email, password) VALUES (:nombre,:apellido, :email, :password)";

		$prep = $conexion->prepare($sql);

		$prep-> bindParam(':nombre',$nombre);
		$prep-> bindParam(':apellido',$apellido);

		$prep-> bindParam(':email',$email);

		$prep-> bindParam(':password',$password_encriptada);

		$prep->execute();

		header("Location: login.php");
	}


?>

