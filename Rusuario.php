<?php

require 'funcs/conexion.php';
require 'funcs/funcs.php';

$errors = array();

if (!empty($_POST)) {

	$nombre = $_POST['nombre'];
	$papellido = $_POST['papellido'];
	$sapellido = $_POST['sapellido'];
	$tipo = $_POST['tipo'];
	$numerodoc = $_POST['numerodoc'];
	$pais =$_POST['pais'];
	$indicativo = $_POST['indicativo'];
	$departamento = $_POST['departamento'];
	$ciudad =$_POST['ciudad'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$activo = 0;
	$tipo_usuario = 2;

	if (isNull($nombre, $papellido, $sapellido, $tipo, $numerodoc, $pais, $indicativo, $departamento, $ciudad, $direccion, $telefono, $email, $pass1, $pass2)) {
		
		$errors[] = "Debe llenar todos los campos";
	}

	if (!isEmail($email)) {
	
		$errors[] = "Dirección de correo invalida ";

	}

	if (!validaPassword($pass1, $pass2)) {
	
		$errors[] = "Las contraseñas no coinciden ";

	}


	if (usuarioExiste($numerodoc)) {
		
		$errors[] = "El usuario con numero de documento $numerodoc ya existe";
	}

	if (emailExiste($email)) {
		
		$errors[] = "El correo registrado $email ya existe";
	}
	



	if (count($errors) ==0) {
		
		$pass_hash = hashPassword($pass1);
		
		$token = generateToken();

		$registro = registraUsuario($nombre, $papellido, $sapellido, $telefono, $departamento, $ciudad, $direccion, $indicativo, $tipo, $numerodoc, $email, $pass_hash, $activo, $token, $tipo_usuario, $pais);



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
    </head>
	<body>

		<!-- HEADER -->
		<header>
			<div id="header">
				<div class="container">
					<div class="row">		
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<center><img src="img/logo.png" alt=""></center>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="header-search">
								
							</div>
						</div>
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<div class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-user-circle-o"></i>
										<span>Cuenta</span>
									</a>
									<div class="cart-dropdown2">
										<ul class="custom-menu2">
											<li><a href="Rempresa.php"><i class="fa fa-building"></i>Empresa</a></li>
											<li><a href="Rusuario.php"><i class="fa fa-user-plus"></i>usuario</a></li>
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
						<a href="#"><span class="category-header">Categoria<i class="fa fa-list"></i></span></a>
						<ul class="category-list">
							<li class="dropdown side-dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Tecnologia<i class="fa fa-angle-right"></i></a>
								<div class="custom-menu">
									<div class="row">
										<div class="col-md-4">
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">Celulares</h3>
												</li>
												<li><a href="#">Samsung</a></li>
												<li><a href="#">Huawei</a></li>
												<li><a href="#">Motorola</a></li>
												<li><a href="#">Accesorios</a></li>
												<li><a href="#">Todos</a></li>
												<li><a href="#">ETC...</a></li>
											</ul>
											<hr class="hidden-md hidden-lg">
										</div>
										<div class="col-md-4">
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">Pc</h3></li>
												<li><a href="#">Lenovo</a></li>
												<li><a href="#">Acer</a></li>
												<li><a href="#">Hp</a></li>
												<li><a href="#">Apple</a></li>
												<li><a href="#">Todos</a></li>
											</ul>
											<hr class="hidden-md hidden-lg">
										</div>
										<div class="col-md-4">
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">Otras Categorias</h3></li>
												<li><a href="#">Todos - productos</a></li>
												<li><a href="#">Xbox</a></li>
												<li><a href="#">accesorios</a></li>
											</ul>
										</div>
									</div>
									<div class="row hidden-sm hidden-xs">
										<div class="col-md-12">
											<hr>
											<a class="banner banner-1" href="#">
												<img src="./img/tecnologia.jpg" alt="">
												<div class="banner-caption">
													<h3 class="white-color">PROMOCION</h3>
												</div>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li><a href="#">Medicamentos</a></li>
							<li class="dropdown side-dropdown"><a  href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Ropa<i class="fa fa-angle-right"></i></a>
								<div class="custom-menu">
									<div class="row">
										<div class="col-md-4">
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">Hombre</h3></li>
												<li><a href="#">Pantalones</a></li>
												<li><a href="#">Busos - camisas</a></li>
												<li><a href="#">Zapatos</a></li>
												<li><a href="#">Accesorios</a></li>
												<li><a href="#">Todo</a></li>
											</ul>
											<hr>
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">Dama</h3></li>
												<li><a href="#">Vestidos -blusas</a></li>
												<li><a href="#">Zapatos</a></li>
												<li><a href="#">Pantalones</a></li>
												<li><a href="#">Accesorios</a></li>
												<li><a href="#">Todo</a></li>
											</ul>
											<hr class="hidden-md hidden-lg">
										</div>
										<div class="col-md-4">
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">Niños</h3></li>
												<li><a href="#">Pantalones</a></li>
												<li><a href="#">Zapatos</a></li>
												<li><a href="#">Ropa</a></li>
												<li><a href="#">Accesorios</a></li>
												<li><a href="#">Todo</a></li>
											</ul>
											<hr>
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">Otras Categorias</h3></li>
												<li><a href="#">Todo - productos</a></li>
												<li><a href="#">Promocion</a></li>
												<li><a href="#">Nuevo</a></li>
											</ul>
										</div>
										<div class="col-md-4 hidden-sm hidden-xs">
											<a class="banner banner-2" href="#">
												<img src="./img/banner04.jpg" alt="">
												<div class="banner-caption">
													<h3 class="white-color">TODA LA<br>COLECCION</h3>
												</div>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li><a href="#">Trabajos en madera</a></li>
							<li class="dropdown side-dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">///nombre categoria///<i class="fa fa-angle-right"></i></a>
								<div class="custom-menu">
									<div class="row">
										<div class="col-md-4">
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">//categoria//</h3></li>
												<li><a href="#">//producto//</a></li>
												<li><a href="#">//producto//</a></li>
												<li><a href="#">//producto//</a></li>
												<li><a href="#">//producto//</a></li>
												<li><a href="#">//producto//</a></li>
											</ul>
											<hr>
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">###foto###</h3></li>
											</ul>
											<hr class="hidden-md hidden-lg">
										</div>
										<div class="col-md-4">
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">//categoria//</h3></li>
												<li><a href="#">//producto//</a></li>
												<li><a href="#">//producto//</a></li>
												<li><a href="#">//producto//</a></li>
												<li><a href="#">//producto//</a></li>
												<li><a href="#">//producto//</a></li>
											</ul>
											<hr>
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">###Fotos###</h3></li>
											</ul>
											<hr class="hidden-md hidden-lg">
										</div>
										<div class="col-md-4">
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">//categoria//</h3></li>
												<li><a href="#">//producto//</a></li>
												<li><a href="#">//producto//</a></li>
												<li><a href="#">//producto//</a></li>
												<li><a href="#">//producto//</a></li>
												<li><a href="#">//producto//</a></li>
											</ul>
											<hr>
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">###foto###</h3></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li><a href="#">///Otra categoria//</a></li>
							<li><a href="#">Todas las categosrias</a></li>
						</ul>
					</div>
					<!-- /category nav -->

					<!-- menu nav -->
					<div class="menu-nav">
						<span class="menu-header">Menu <i class="fa fa-list"></i></span>
						<ul class="menu-list">
							<li class="active"><a href="#">Inicio</a></li>
							<li><a href="#">Tienda</a></li>
							</a>
								<div class="custom-menu">
									<div class="row">
										<div class="col-md-3">
											<div class="hidden-sm hidden-xs">
												<a class="banner banner-1" href="#">
													<img src="./img/mueble.jfif" alt="">
													<div class="banner-caption text-center">
														<h3 class="white-color text-uppercase">Zapatos</h3>
													</div>
												</a>
												<hr>
											</div>
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">Categoria</h3></li>
												<li><a href="#">Adidas</a></li>
												<li><a href="#">Bata</a></li>
												<li><a href="#">Puma</a></li>
												<li><a href="#">Nike</a></li>
											</ul>
										</div>
										<div class="col-md-3">
											<div class="hidden-sm hidden-xs">
												<a class="banner banner-1" href="#">
													<img src="./img/banner07.jpg" alt="">
													<div class="banner-caption text-center">
														<h3 class="white-color text-uppercase">Laboratorio</h3>
													</div>
												</a>
											</div>
											<hr>
											<ul class="list-links">
											<li>
													<h3 class="list-links-title">Categoria</h3></li>
												<li><a href="#">Bayer</a></li>
												<li><a href="#">Genfar</a></li>
												<li><a href="#">La sante</a></li>
												<li><a href="#">MCD</a></li>
										</div>
										<div class="col-md-3">
											<div class="hidden-sm hidden-xs">
												<a class="banner banner-1" href="#">
													<img src="./img/banner08.jpg" alt="">
													<div class="banner-caption text-center">
														<h3 class="white-color text-uppercase">Tiendas</h3>
													</div>
												</a>
											</div>
											<hr>
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">Categoria</h3></li>
												<li><a href="#">Oster</a></li>
												<li><a href="#">Epson</a></li>
												<li><a href="#">Sony</a></li>
												<li><a href="#">go pro</a></li>
												<li><a href="#">Otras</a></li>
											</ul>
										</div>
										<div class="col-md-3">
											<div class="hidden-sm hidden-xs">
												<a class="banner banner-1" href="#">
													<img src="./img/banner09.jpg" alt="">
													<div class="banner-caption text-center">
														<h3 class="white-color text-uppercase">Otros</h3>
													</div>
												</a>
											</div>
											<hr>
											<ul class="list-links">
												<li>
													<h3 class="list-links-title">Categoria</h3></li>
												<li><a href="#">Deporte</a></li>
												<li><a href="#">Juguetes</a></li>
												<li><a href="#">Libros</a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li><a href="#">Promocion</a></li>
						</ul>
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
		<!-- NEWSLETTER -->

		<div id="newsletter" >
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<center><div>
							<div class="billing-details">
							<div class="section-title">
								<h2 style="color: #fd6500;">REGISTRO DE USUARIO</h2>
							</div>
							<br>
							<br>
								<form method="POST" action="" name="frm" style="width: 100%" >
								<tr>
									<td><input type="text" name="nombre" class="input" placeholder="Nombre" style="width: 80%" ></td><br><br>
									<td><input type="text" name="papellido"   class="input"  placeholder="Primer Apellido"  style="width: 80%"></td><br><br>
									<td><input type="text" name="sapellido"   class="input"  placeholder="Segundo Apellido" style="width: 80%"></td><br><br>
								</tr>
								
								<br>
								<br>
								<tr>
									<td><select name="tipo" required class="input" style="width: 80%"   >  
            						<option class="input">Tipo de documento</option>
            						<option value="CEDULA CIUDADANIA">Cedula Ciudadania</option>
            						<option value="TARJETA DE IDENTIDAD">Tarjeta de identidad</option>
            						<option value="CEDULA EXTRANJERÍA">Cedula extranjeria</option>
            						<option value="PASAPORTE">Pasaporte</option>
            					    </select></td></td></td><br><br>

									<td><input type="text" name="numerodoc"   class="input"  placeholder="Número de documento"  style="width: 80%" ></td><br><br>

									<td><select name="pais" required class="input" style="width: 50%"  >
      								<option>País </option>
      								<?php
      								require('funcs/conexion.php');
      								try{
        							$sql1="SELECT * FROM nacionalidad";
        							$res=$base->prepare($sql1);
        							$res->execute(array());

        							while ($consulta=$res->FETCH(PDO::FETCH_ASSOC)){
          							?>
          							<option value=" <?php echo $consulta['id_nacionalidad']?>"><?php echo $consulta['nombreNac']?> </option>
          							<?php
        							}
      								}
      								catch(Exception $e){
          							die('Error: '.$e->getMessage());
      								}
      								?>
    								</select></td>

									<td><select name="indicativo" required class="input" style="width: 30%"  >
      								<option>CP </option>
      								<?php
      								require('funcs/conexion.php');
      								try{
        							$sql1="SELECT * FROM nacionalidad";
        							$res=$base->prepare($sql1);
        							$res->execute(array());

        							while ($consulta=$res->FETCH(PDO::FETCH_ASSOC)){
          							?>
          							<option value=" <?php echo $consulta['id_nacionalidad']?>"><?php echo $consulta['indicativoNac']?> </option>
          							<?php
        							}
      								}
      								catch(Exception $e){
          							die('Error: '.$e->getMessage());
      								}
      								?>
    								</select></td><br><br>
								</tr>
								<br>
								<br>
								<tr>
									<td><input type="text" name="departamento" class="input" placeholder="Departamento" style="width: 80%"  ></td><br><br>
									<td><input type="text" name="ciudad"   class="input" placeholder="Ciudad" style="width: 80%" ></td><br><br>
									<td><input type="text" name="direccion"   class="input" placeholder="Dirección" style="width: 80%"  ></td><br><br>
								</tr>

								<br>
								<br>
								<tr>
									<td><input type="text" name="telefono" class="input" placeholder="Telefono" style="width: 80%" ></td><br><br>
									<td><input type="email" name="email" class="input" placeholder="Correo electronico" style="width: 80%" ></td><br><br>
									
								</tr>

								<br>
								<br>
								<tr>
									<td><input type="password" name="pass1" class="input" placeholder="Crear contraseña" style="width: 80%" ></td><br><br>
									<td><input type="password" name="pass2" class="input" placeholder="Validar contraseña" style="width: 80%" ></td><br><br>
									
								</tr>
								<br>
								<br>

								
								<br>
								<br>
								<tr>
									<td><b><input class="input" type="submit" name="btn" value="REGISTRAR" style="background-color: #dc6414; color: white; border-radius: 10px; width: 300px; height: 60px; font-size: 20px; border-color: #dc6414"></b></td>
									
								</tr>
								
								
							</form>	
							<?php echo resultBlock($errors) ?>
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

		<!-- FOOTER -->
		<footer id="footer">
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix visible-xs"></div>
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="bottom-footer" class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
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
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
