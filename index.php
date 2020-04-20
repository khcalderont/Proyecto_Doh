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
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="img/logo.png" alt="">
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<input class="input" placeholder="Escribe lo que buscas">
									<button class="search-btn">Buscar</button>
								</form>
							</div>
						</div>
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<div class="dropdown">
									<a href="Login.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-user-circle-o"></i>
										<a href="Login.php"><span>Ingresar</span></a>
									</a>

								</div>
								<!--
								<div class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Carrito</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Nombre producto</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.000</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Nombre producto</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.000</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Productos seleccionados</small>
											<h5>SUBTOTAL: $2940.000</h5>
										</div>
										<div class="cart-btns">
											<a href="#">Ver carrito</a>
											<a href="#">Comprar <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								-->
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
		<div>
			<section id="intro">
			<section id="contenedor">
					<section id="mainslider" class="flexslider">
				<ul class="slides">
						<li data-thumb="img/fondo.jpg">
						<a href="#"><img id="imagen" src="img/fondo.jpg" alt="" /></a>
						<section class="flex-caption primary">
							<h2>MIRADOR TEJADO</h2>
							<p>"Agrado-Huila"</p>
						</section>
						</li>
						<li data-thumb="img/fondo2.png">
						<a href="#"><img id="imagen" src="img/fondo2.png" alt="" /></a>
						<section class="flex-caption warning">
							<h2> BUENOS AIRES</h2>
							<p>"Finca cafetera Oporapa-Huila"</p>
						</section>
						</li>
						<li data-thumb="img/fondo3.jpeg">
						<a href="#"><img id="imagen" src="img/fondo3.jpeg" alt="" /></a>
						<section class="flex-caption success">
							<h2>PALMARITO</h2>
							<p>"Finca cafetera Palmarito-Pitalito"</p>
						</section>
						</li>
				
					</ul>
			
				</section>
			</section>
			</section>
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/abono.jpeg" alt="">
							</div>
							<div class="shop-body">
								<h3>Categoria  <br> Abonos</h3>
								<a href="#" class="cta-btn">Productos <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/insecticidas.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Categoria <br>Insecticidas</h3>
								<a href="#" class="cta-btn">Productos<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/semillas.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Categoria <br>Semillas</h3>
								<a href="#" class="cta-btn">Productos <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title"><strong>Nuevos productos</strong></h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Todos</a></li>
									<li><a data-toggle="tab" href="#tab1">Insecticidas</a></li>
									<li><a data-toggle="tab" href="#tab1">Abonos</a></li>
									<li><a data-toggle="tab" href="#tab1">Semillas</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<div class="product">
											<div class="product-img">
												<img src="./img/nuevo1.jpeg" alt="" style="width:">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Panela</a></h3>
												<h4 class="product-price">$980.000<del class="product-old-price">$990.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a favorito</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Mas info</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar a Carrito</button>
											</div>
										</div>
										<div class="product">
											<div class="product-img">
												<img src="./img/nuevo2.jpg" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">El Cacao</a></h3>
												<h4 class="product-price">$980.000<del class="product-old-price">$990.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a favorito</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Mas info</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar a carrito</button>
											</div>
										</div>
										<div class="product">
											<div class="product-img">
												<img src="./img/nuevo3.jpg" alt="" style="width:">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Jacobs</a></h3>
												<h4 class="product-price">$980.000<del class="product-old-price">$990.000</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a favorito</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Mas info</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar a carrito</button>
											</div>
										</div>
										<div class="product">
											<div class="product-img">
												<img src="./img/nuevo4.jpg" alt="" style="width:; padding-left: ">
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Cholupa</a></h3>
												<h4 class="product-price">$980.000<del class="product-old-price">$990.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a favorito</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Mas info</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar a carrito</button>
											</div>
										</div>
										<div class="product">
											<div class="product-img">
												<img src="./img/nuevo.jpg" alt="" style="width:">
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Nescafé</a></h3>
												<h4 class="product-price">$980.000<del class="product-old-price">$990.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a favorito</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Mas info</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar a carrito</button>
											</div>
										</div>
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
			<center><a class="primary-btn cta-btn2" href="#">Ver más</a></center>
		<br>
		<!-- /SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title"><strong>Productos mas vendidos</strong></h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Todos</a></li>
									<li><a data-toggle="tab" href="#tab2">Insecticidas</a></li>
									<li><a data-toggle="tab" href="#tab2">Abonos</a></li>
									<li><a data-toggle="tab" href="#tab2">Semillas</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<div class="product">
											<div class="product-img">
												<img src="./img/vendido.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Nombre producto</a></h3>
												<h4 class="product-price">$980.000<del class="product-old-price">$990.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a favoritos</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Mas info</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar a carrito</button>
											</div>
										</div>
										<div class="product">
											<div class="product-img">
												<img src="./img/product11.jpg" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Nombre producto</a></h3>
												<h4 class="product-price">$980.000<del class="product-old-price">$990.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a favorito</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Mas info</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar a carrito</button>
											</div>
										</div>
										<div class="product">
											<div class="product-img">
												<img src="./img/product08.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Nombre producto</a></h3>
												<h4 class="product-price">$980.000<del class="product-old-price">$990.000</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a favorito</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Mas info</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar a carrito</button>
											</div>
										</div>
										<div class="product">
											<div class="product-img">
												<img src="./img/semillas.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Nombre producto</a></h3>
												<h4 class="product-price">$980.000<del class="product-old-price">$990.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a favorito</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Mas info</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar a carrito</button>
											</div>
										</div>
										<div class="product">
											<div class="product-img">
												<img src="./img/nuevo1.jpeg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Categoria</p>
												<h3 class="product-name"><a href="#">Nombre producto</a></h3>
												<h4 class="product-price">$980.000<del class="product-old-price">$990.000</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Agregar a favorito</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Mas info</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar a carrito</button>
											</div>
										</div>
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION 
		<div id="hot-deal2" class="section2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal2">
							<ul class="hot-deal-countdown2">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn2" href="#">Shop now</a>
						</div>
					</div>
				</div>
			</div>
		</div>  -->
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">PRODUCTOS</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>
						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">PISCICULTURA</p>
										<h3 class="product-name"><a href="#">PECES</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product08.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">CHOLUPA</p>
										<h3 class="product-name"><a href="#">CHOLUPA</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product09.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">CAFE</p>
										<h3 class="product-name"><a href="#">CAFE EXPRESS</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
							</div>
							<div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">PANELA</p>
										<h3 class="product-name"><a href="#">PANELA </a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product02.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">OVINOS</p>
										<h3 class="product-name"><a href="#">OVEJAS </a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">GANADERIA</p>
										<h3 class="product-name"><a href="#">VACA</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">PRIDUCTOS</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>
						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product04.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">CACAO</p>
										<h3 class="product-name"><a href="#">CACAO</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product05.webp" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">PANELA</p>
										<h3 class="product-name"><a href="#">PANELA</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product06.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">CAFE</p>
										<h3 class="product-name"><a href="#">CAFE</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
							</div>
							<div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">PISCICULTURA</p>
										<h3 class="product-name"><a href="#">PECES</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product08.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">CHOLUPA</p>
										<h3 class="product-name"><a href="#">CHOLUPA</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product09.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">CAFE</p>
										<h3 class="product-name"><a href="#">CAFE</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix visible-sm visible-xs"></div>
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">PRODUCTOS</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>
						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">PANELA</p>
										<h3 class="product-name"><a href="#">PANELA</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product12.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">ARTESANIA</p>
										<h3 class="product-name"><a href="#">ESTATUAS</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">GANADERIA</p>
										<h3 class="product-name"><a href="#">GANADERIA</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
							</div>
							<div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product11.jpg" alt="" style="width: 110%">
									</div>
									<div class="product-body">
										<p class="product-category">ARTESANIA</p>
										<h3 class="product-name"><a href="#">CHIVA</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product05.webp" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">PANELA</p>
										<h3 class="product-name"><a href="#">PANELA</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product10.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">ATESANIAS</p>
										<h3 class="product-name"><a href="#">SOMBRERO</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
			<center><a class="primary-btn cta-btn2" href="#">CARGAR MAS</a></center>
			<br>
		</div>
		<!-- /SECTION -->

		


		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="logos">
							<div class="shop-img">
								<img src="./img/ghuila.png" alt="" style="width: 60%">
							</div>
							<div class="shop-body">
								
								<a href="#" class="cta-btn"><i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="logos">
							<div class="shop-img">
								<img src="./img/ccneiva.png" alt="" style="width: 60%">
							</div>
							<div class="shop-body">
								
								<a href="#" class="cta-btn"><i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="logos">
							<div class="shop-img">
								<img src="./img/hcrece.jpeg" alt="" style="width: 60%">
							</div>
							<div class="shop-body">
								
								<a href="#" class="cta-btn"><i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>


		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
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
  		<script src="js/jquery.prettyPhoto.js"></script>
  		<script src="js/jquery.flexslider.js"></script>
  		<script src="js/jquery-hover-effect.js"></script>


  <!-- Template Custom JavaScript File -->
		  <script src="js/custom.js"></script>
</body>
</html>
