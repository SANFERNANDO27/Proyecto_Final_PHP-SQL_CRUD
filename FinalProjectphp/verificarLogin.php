<?php
	include_once('config.php');
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * from usuarios WHERE email=:email";
		$prep = $conexion->prepare($sql);

		$prep-> bindParam(':email',$email);

		$prep->execute();

		$data = $prep->fetch();

		if ($data == false) {
			echo "El correo es incorrecto";	
		}else if(password_verify($password,$data['password'])){
			echo "Acceso correcto";
			$_SESSION['Descripcion'] = $data['Descripcion'];
			$_SESSION['fotoDePerfil'] = $data['fotoDePerfil'];
			$_SESSION['apellido'] = $data['apellido'];
			$_SESSION['email']= $data['email'];
			$_SESSION['nombre']= $data['nombre'];
			$_SESSION['id']= $data['id'];
			header("Location: dashboard.php");
		}else{
			echo "Contraseña icorrecta";
		}
		// code...
	}else{
		echo "hola";
	}
?>