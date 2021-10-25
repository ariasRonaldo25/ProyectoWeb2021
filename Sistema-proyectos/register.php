<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobbile-web-app-capable" content="yes">
	<meta name="apple-mobbile-web-app-title" content="">

	<link rel="icon" href="images/logo.png">	
	<!--=====================================
	Marcado HTML5
	======================================-->

	<meta name="title" content="USERS">
	<meta name="description" content="Administración de usuarios">
	<meta name="keyword" content="suers, perfil, web"> 
	<!--=====================================
	   CSS STYLES
	   ======================================-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/main.css">

	<!--=====================================
	   JAVASCRIPT SCRIPTS
	   ======================================-->
	<script src="js/materialize.min.js"></script>
<body>
	<!--=====================================
	  HEADER
	   ======================================-->
	<header class="navbar-fixed index-1">
		<nav class="blue">
			<div class="container">
				<div class="nav-wrapper">
					<a href="index.php" class="brand-logo left">
						<img src="images/logo.png" width="40">
					</a>
					<a href="#" data-target="nav-movil" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
					<li><a href="index.php">Home.</a></li>
						<li><a href="articles.php"></a></li>
						<li><a href="#!" class="waves-effect waves-light btn  red">Registro</a></li>
					</ul>
				</div>
				
			</div>
		</nav>

		<ul class="sidenav" id="nav-movil">
			<li><a href="#">Articulos</a></li>
		    <li><a href="#" class="waves-effect waves-light btn  red">Registro</a></li>
		</ul>
	</header>

	<!--=====================================
	   HERO
	   ======================================-->

	<section class="section-hero">
		<div class="hero">
			<div class="container center">
				<div class="container-form ">
					<div class="card">
						<form onsubmit="return false">

						<h5>Registrate.</h5>

							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">account_circle</i>
							         <input type="text" id="rg_username"  placeholder="Ingresa tú nombre" class="validate"  autocomplete="off">
							         
								</div><!-- Enf col -->

								<div class="input-field col s12">
									<i class="material-icons prefix">email</i>
							         <input type="email" id="rg_email"  placeholder="Ingresa tú email:Persona@gmail.com" class="validate"  autocomplete="off">
							        
								</div><!-- Enf col -->

								<div class="input-field col s12">
									<i class="material-icons prefix">lock_outline</i>
							         <input type="password" id="rg_pass1" placeholder="Ingresa tú contraseña" class="validate" autocomplete="off">
							
								</div><!-- Enf col -->

								<div class="input-field col s12">
									<i class="material-icons prefix">login</i>
							         <input type="password" id="rg_pass2" placeholder="Confirma tú contraseña" class="validate" autocomplete="off">
							         
								</div><!-- Enf col -->

								<div class="col s12">
									<div class="center">
										<button type="submit" class="waves-effect waves-light btn blue" onclick="registro();">
											Registrarme
                                         </button>
										
									</div>
								</div>
							</div><!-- End row -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="black">
		<div class="container">
			<p class="copy">
				&copy; 2021 Todos los derechos reservados - sistema de Proyectos
			</p>
		</div>
	</footer>


	<div class="scrolltop scrolltop-dark"></div>
	<script src="js/app.js"></script>
	<script src="js/ajax.js"></script>
</body>
</html>
