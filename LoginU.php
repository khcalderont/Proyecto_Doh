<?php

require 'funcs/conexion.php';
require 'funcs/funcs.php';
session_start();

$errors = array();

if (!empty($_POST)) { // Si se da click en el botón Ingresar

	if (empty($_POST['usuario']) || empty($_POST['password'])) {
		//Si alguno de los campos está en blanco...
		?>
		<script type="text/javascript"> window.alert("Campos obligatorios!!")</script>
		<?php
	}else{
		$sql= "SELECT * FROM `reg_usuario` WHERE correoUsu=:user AND claveUsu=:pass";
		$result= $base-> prepare($sql);
		$result-> execute(array(":user"=>$_POST['usuario'], ":pass"=>$_POST{'password'}));

		while ($consulta=$result->fetch(PDO::FETCH_ASSOC)){
			$_SESSION['usuario']=$consulta['nombreUsu'];// Se crea una variable de sesión a la que se le asigna el nombre "usuario"
			$_SESSION['apellido']=$consulta['priApellidoUsu'];
		}
		$verificar=$result->rowCount(); // Retorna un número diferente a 0 si la sentencia se ha ejecutado correctamente y lo almacena en $contador...

			if ($verificar > 0) { // Es > a 0 si se ha ejecutado la sentecia correctamente 
				header("location:Usuarios.php");
			}else{
				// Si es <= 0 quiere decir que la sentencia no se ejecutó...
				?>
				<script type="text/javascript"> window.alert("Datos Erróneos!!")</script>
			<?php
			
		}
		}

	}


?>



<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>DondeHay.co</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<link type="text/css" rel="stylesheet" href="css/flexslider.css"/>
		<link type="text/css" rel="stylesheet" href="css/styyles.css"/>
    </head>
	<body>

		<!-- HEADER -->
		<header>
			<div id="header">
				<div class="container">
					<div class="row">		
						<div class="col-md-3"  style="align: center">
							<div class="header-logo">
								<a href="#" class="logo">
									<center><img src="img/logo.png" alt=""></center>
								</a>
							</div>
						</div>
						
						<!--
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<div class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-user-circle-o"></i>
										<span>Cuenta</span>
									</a>
									<div class="cart-dropdown2">
										<ul class="custom-menu2">
											<li><a href="#"><i class="fa fa-user-o"></i> Mi cuenta</a></li>
											<li><a href="#"><i class="fa fa-heart-o"></i>Favoritos</a></li>
											<li><a href="#"><i class="fa fa-exchange"></i> Comparar</a></li>
											<li><a href="#"><i class="fa fa-check"></i> Compra</a></li>
											<li><a href="#"><i class="fa fa-unlock-alt"></i>Login</a></li>
											<li><a href="#"><i class="fa fa-user-plus"></i>Crear cuenta</a></li>
										</ul>
									</div>
								</div> 
								
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
							</div>
						</div>
						-->
					</div>
				</div>
			</div>
		</header>
		<!-- /HEADER -->




		<!-- NAVIGATION -->
		<div id="navigation">
			<!-- container -->
			<div class="container">
				<div id="responsive-nav">
					<!-- category nav -->
					<div class="category-nav show-on-click">
						
					</div>
					<!-- /category nav -->

					<!-- menu nav -->
					<div class="menu-nav">
						
					</div>
					<!-- menu nav -->
				</div>
			</div>
			<!-- /container -->
		</div>
		<!-- /NAVIGATION -->


		<!-- HOT DEAL SECTION -->
		
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<br>
		<br>
		<br>
		<br>
		<!-- NEWSLETTER -->

		<div id="newsletter" >
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<center><div>
							<div class="billing-details">
							
							</div>

								<div class="login-reg-panel">
								<form method="POST" action="" name="frm" style="width: 100%" >
										
															
										<div class="white-panel">
											<div class="login-show">
												
												<h2 style="color: #FF5A16">LOGIN</h2>
												<input type="text" name="usuario" class="input" placeholder="Usuario" style="width:">
												<input type="password" name="password" class="input" placeholder="Contraseña" style="width: ">
												<input id="bott" style="background: #FF5A16; color: white" type="submit" name="btn" value="Login">
												<a href="" style="width: 200%; margin-left: -20px; font-size: 13px;">¿Olvidaste tu contraseña?</a>
												<div class="opciones" style="    width: 200%; margin-left: -20px; font-size: 13px;">
												
												<br>
												<br>
												<a href="Rusuario.php">¿No tienes una cuenta? Regístrate</a>
												</div>
											</div>
										</div>
								</form>
								</div>


							</div>
							<br>

							
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div></center>
		<!-- /NEWSLETTER -->

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

		<!-- FOOTER -->
		<footer id="footer">
			<div class="section">
				<div class="container">
					
						
						
						
						</div>
					</div>
				</div>
			</div>
			<div id="bottom-footer" class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							
							<span class="copyright">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
