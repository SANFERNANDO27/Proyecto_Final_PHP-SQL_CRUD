<?php
    include_once('config.php');
    if(empty($_SESSION['nombre'])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perfil</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="master3.css">
	<link rel="stylesheet" type="text/css" href="footerStyle.css">
</head>
<body>
	<head>
		<nav class="navbar navbar-expand-lg bg-light">
		  <div class="container-fluid">
		  	<a class="navbar-brand" href="#">
		      	<img src="logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
	    	</a>
		    <a class="navbar-brand" href="#">TheGamingStuffShop</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active navLink" aria-current="page" href="dashboard.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active navLink" aria-current="page" href="#">WishList</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active navLink" aria-current="page" href="#">Publicar</a>
		        </li>
		      </ul>
		      <form class="d-flex" role="search">
		       		<h1 class="userName"><?= $_SESSION['nombre'] ?></h1>
		       		<a href="#"><img src="img/anonimo.jpeg" class="fotoDePerfil"></a>
		      </form>
		    </div>
		  </div>
	</nav>
	</head>

	<main>
		<div class="perfilDiv">
			<div class="fotoDePerfilDiv">
				<div>
					<img src="img/anonimo.jpeg" class="perfil" style="position: absolute;">
					<a href="imagenDePerfil.php "><button id="addImg" type="file" style="background-image:url('img/perfilCamara.png'); border-radius: 50%; width: 50px; height: 50px; position: absolute; margin-left: 160px; margin-top: 200px;"></button></a>
				</div>
					<h1 style="margin-top: 280px; margin-left: 200px; position: absolute;"><?= $_SESSION['nombre'] ?></h1>
			</div>
			<div class="perfilContentDiv">
				<form method="POST" action="actualizar.php">
					<h2>Nombre:</h2>
					<input class="editInputs" type="text" name="nombre" value="<?= $_SESSION['nombre'] ?>"> <!--name input-->
					<h2>Apellidos:</h2>
					<input class="editInputs" type="text" name="apellido" value="<?= $_SESSION['apellido'] ?>"> <!--name input-->
					<h2>Email:</h2>
					<input class="editInputs" type="email" name="email" value="<?= $_SESSION['email'] ?>"> <!--name input-->
					<h2>Descripción:</h2>
					<input class="editInputs" type="text" name="Descripcion" value="<?= $_SESSION['Descripcion'] ?>"> <!--name input-->
					<input type="hidden" name="id" value="<?= $_SESSION['id']?>">
					
					<button type="submit" class="btn btn-outline-danger" name="actualizar">Modificar</button>
				</form>
			</div>
		</div>
		<a href="cerrarSesion.php"><button style="margin-left: 640px; margin-bottom: 20px; width: 200px;" type="button" class="btn btn-danger">Cerrar sesión</button></a>
	</main>

	<footer class="pie-pagina"><!--footer https://youtu.be/QEa1SvZlWtY-->
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="logo.png" alt="" class="logoInFooter">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Somos una tienda de componentes y accesorios gaming donde tu puedes</p>
                <p>publicar tus propios productos, creada por Santiago Fernando Murguia Maldonado.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div>
                    <a href="#"><img src="img/facebook.png" class="imgFooter"></a>
                    <a href="#"><img src="img/instagram.png" class="imgFooter"></a>
                    <a href="#"><img src="img/twitter.png" class="imgFooter"></a>
                    <a href="#"><img src="img/YouTube.png" class="imgFooter"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Santiago Fernando Murguia Maldonado, Berlitz</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>