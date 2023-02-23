<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SingUp</title>
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
		          <a class="nav-link active navLink" aria-current="page" href="index.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active navLink" aria-current="page" href="#">WishList</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active navLink" aria-current="page" href="#">Publicar</a>
		        </li>
		      </ul>
		      <form class="d-flex" role="search">
		        <a href="singup.php"><button type="button" class="btn btn-outline-danger" id="singup">SingUp</button></a> <!--SingUp-->
		      </form>
		    </div>
		  </div>
		</nav>
	</head>

	<main>
		<div style="position: absolute; z-index: -1; width: 100%; height: 870px;">
			<img src="img/GamerBackground.webp" style="width: 100%; height: 870px;">
		</div>

		<div class="loginDiv" style="width: 320px; height: 420px;"> <!--singup card-->
			<img class="avatar" src="logo.png" alt="logoLoginCard">
			<h1>Login</h1>
			<form method="POST" action="verificarLogin.php">

				<label for="email">Email</label>
				<input type="email" name="email" placeholder="Email"> <!--email input-->

				<label for="password">Contraseña</label>
				<input type="password" name="password" placeholder="Contraseña"> <!--password input-->

				<!--boton submit tipo input-->
				<input type="submit" value="Login" name="submit">

				<a href="singup.php">¿No tienes una cuenta? Registrate aquí.</a>
				<a href="#">¿Olvidaste tu contraseña?</a>
			</form>
		</div>

	</main>

	<footer class="pie-pagina"><!--footer https://youtu.be/QEa1SvZlWtY-->
        <div style="box-shadow: 0 15px 45px rgba(0, 0, 0, 0.25); margin-top: 870px;">
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
        </div>
    </footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>