<?php


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TheGamingStuffShop</title>
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
		          <a class="nav-link active navLink" aria-current="page" href="#">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active navLink" aria-current="page" href="#">WishList</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active navLink" aria-current="page" href="#">Publicar</a>
		        </li>
		      </ul>
		      <form class="d-flex" role="search">
		        <a href="login.php"><button type="button" class="btn btn-danger" id="login">Login</button></a> <!--login-->
		        <a href="singup.php"><button type="button" class="btn btn-outline-danger" id="singup">SingUp</button></a> <!--SingUp-->
		      </form>
		    </div>
		  </div>
	</nav>

		<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
			    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
			    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
			  </div>
			  <div class="carousel-inner">
			    <div class="carousel-item active" data-bs-interval="3000">
			      <img src="gamingSlide1.jpg" class="d-block w-100 imgSlide" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			      </div>
			    </div>
			    <div class="carousel-item" data-bs-interval="3000">
			      <img src="gamingSlide5.1.jpg" class="d-block w-100 imgSlide" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			      </div>
			    </div>
			    <div class="carousel-item" data-bs-interval="3000">
			      <img src="gamingSlide3.jpg" class="d-block w-100 imgSlide" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			      </div>
			    </div>
		  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
		  </button>
	</div>
	</head>

	<main>
		<div> <!--Div main-->
			<div id="DivProductos">  <!--Div productos-->
				<h1 id="TituloDivProductos">Destacados</h1>
				
				<div class="container text-center columns"><!--fila de columnas 1-->
				  <div class="row">
				    <div class="col"> <!--columna 1-->

				      <div class="divTarjetaDePrdoucto"> <!--tarjeta 1-->
							<div class="DivProductos"> <!--div imagen de tarjeta 1-->
								<img src="producto1.jpg"> <!--img producto 1 256px x 256px-->
							</div>
							<div class="DivProductos DivProductosContenidoVistaPrevia"><!--Texto deslisable-->
								<div class="DivPadding"> <!--Texto deslisable div para padding-->
									<h3 class="TextContent">Teclado Gaming</h3>
									<h6>description</h6>
									<small class="TextContent">Mecánico Razer Huntsman Mini Mercury Interruptor óptico Razer ™ TAMAÑO 60%</small>
									<div class="buttonVer"> <!--div boton ver-->
										<button type="button" class="btn btn-outline-light">Ver</button>
										<h4 class="Priceh4">Precio: $900</h4>
									</div>
								</div>
							</div>
						</div>

				    </div>
				    <div class="col"> <!--columna 2-->
				      
				      <div class="divTarjetaDePrdoucto"> <!--tarjeta-->
							<div class="DivProductos"> <!--div imagen de tarjeta-->
								<img src="producto1.jpg"> <!--img producto 256px x 256px-->
							</div>
							<div class="DivProductos DivProductosContenidoVistaPrevia"><!--Texto deslisable-->
								<div class="DivPadding"> <!--Texto deslisable div para padding-->
									<h3 class="TextContent">Teclado Gaming</h3>
									<h6>description</h6>
									<small class="TextContent">Mecánico Razer Huntsman Mini Mercury Interruptor óptico Razer ™ TAMAÑO 60%</small>
									<div class="buttonVer"> <!--div boton ver-->
										<button type="button" class="btn btn-outline-light">Ver</button>
										<h4 class="Priceh4">Precio: $900</h4>
									</div>
								</div>
							</div>
						</div>

				    </div>
				    <div class="col"> <!--columna 3-->
				      
				    	<div class="divTarjetaDePrdoucto"> <!--tarjeta-->
							<div class="DivProductos"> <!--div imagen de tarjeta-->
								<img src="producto1.jpg"> <!--img producto 256px x 256px-->
							</div>
							<div class="DivProductos DivProductosContenidoVistaPrevia"><!--Texto deslisable-->
								<div class="DivPadding"> <!--Texto deslisable div para padding-->
									<h3 class="TextContent">Teclado Gaming</h3>
									<h6>description</h6>
									<small class="TextContent">Mecánico Razer Huntsman Mini Mercury Interruptor óptico Razer ™ TAMAÑO 60%</small>
									<div class="buttonVer"> <!--div boton ver-->
										<button type="button" class="btn btn-outline-light">Ver</button>
										<h4 class="Priceh4">Precio: $900</h4>
									</div>
								</div>
							</div>
						</div>


				    </div>
				  </div>
				</div> <!--fila de columnas 1 final-->

				<div class="container text-center columns"><!--fila de columnas 1-->
				  <div class="row">
				    <div class="col"> <!--columna 1-->

				      <div class="divTarjetaDePrdoucto"> <!--tarjeta 1-->
							<div class="DivProductos"> <!--div imagen de tarjeta 1-->
								<img src="producto1.jpg"> <!--img producto 1 256px x 256px-->
							</div>
							<div class="DivProductos DivProductosContenidoVistaPrevia"><!--Texto deslisable-->
								<div class="DivPadding"> <!--Texto deslisable div para padding-->
									<h3 class="TextContent">Teclado Gaming</h3>
									<h6>description</h6>
									<small class="TextContent">Mecánico Razer Huntsman Mini Mercury Interruptor óptico Razer ™ TAMAÑO 60%</small>
									<div class="buttonVer"> <!--div boton ver-->
										<button type="button" class="btn btn-outline-light">Ver</button>
										<h4 class="Priceh4">Precio: $900</h4>
									</div>
								</div>
							</div>
						</div>

				    </div>
				    <div class="col"> <!--columna 2-->
				      
				      <div class="divTarjetaDePrdoucto"> <!--tarjeta-->
							<div class="DivProductos"> <!--div imagen de tarjeta-->
								<img src="producto1.jpg"> <!--img producto 256px x 256px-->
							</div>
							<div class="DivProductos DivProductosContenidoVistaPrevia"><!--Texto deslisable-->
								<div class="DivPadding"> <!--Texto deslisable div para padding-->
									<h3 class="TextContent">Teclado Gaming</h3>
									<h6>description</h6>
									<small class="TextContent">Mecánico Razer Huntsman Mini Mercury Interruptor óptico Razer ™ TAMAÑO 60%</small>
									<div class="buttonVer"> <!--div boton ver-->
										<button type="button" class="btn btn-outline-light">Ver</button>
										<h4 class="Priceh4">Precio: $900</h4>
									</div>
								</div>
							</div>
						</div>

				    </div>
				    <div class="col"> <!--columna 3-->
				      
				    	<div class="divTarjetaDePrdoucto"> <!--tarjeta-->
							<div class="DivProductos"> <!--div imagen de tarjeta-->
								<img src="producto1.jpg"> <!--img producto 256px x 256px-->
							</div>
							<div class="DivProductos DivProductosContenidoVistaPrevia"><!--Texto deslisable-->
								<div class="DivPadding"> <!--Texto deslisable div para padding-->
									<h3 class="TextContent">Teclado Gaming</h3>
									<h6>description</h6>
									<small class="TextContent">Mecánico Razer Huntsman Mini Mercury Interruptor óptico Razer ™ TAMAÑO 60%</small>
									<div class="buttonVer"> <!--div boton ver-->
										<button type="button" class="btn btn-outline-light">Ver</button>
										<h4 class="Priceh4">Precio: $900</h4>
									</div>
								</div>
							</div>
						</div>


				    </div>
				  </div>
				</div> <!--fila de columnas 1 final-->

			</div>
		</div>
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
	<!-- -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>