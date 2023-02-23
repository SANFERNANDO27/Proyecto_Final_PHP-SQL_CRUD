<?php
	include_once('config.php');
	if (isset($_POST['actualizar'])) {
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$Descripcion = $_POST['Descripcion'];

		$sql = "UPDATE usuarios SET nombre=:nombre, apellido=:apellido, email=:email, Descripcion=:Descripcion WHERE id =:id";
		$prep = $conexion->prepare($sql);
		$prep->bindParam(':nombre',$nombre);
		$prep->bindParam(':apellido',$apellido);
		$prep->bindParam(':email',$email);
		$prep->bindParam(':Descripcion',$Descripcion);
		$prep->bindParam(':id',$id);
		
		$prep->execute();

		$_SESSION['Descripcion'] =$Descripcion;
		$_SESSION['apellido'] = $apellido;
		$_SESSION['email']= $email;
		$_SESSION['nombre']= $nombre;

		header("Location: perfil.php");
		
	}
	else{
		echo "hola";
	}

?>