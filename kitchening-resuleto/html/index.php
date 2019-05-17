<?php
	$productos = [
		0 => [
			"id" => 1,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem Ipsum",
			"precio" => 300,
			"imagen" => "img-pdto-1.jpg",
			"enOferta" => true
		],
		1 => [
			"id" => 2,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem Ipsum",
			"precio" => 300,
			"imagen" => "img-pdto-2.jpg",
			"enOferta" => false
		],
		2 => [
			"id" => 3,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem Ipsum",
			"precio" => 300,
			"imagen" => "img-pdto-3.jpg",
			"enOferta" => true
		],
		3 => [
			"id" => 4,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem Ipsum",
			"precio" => 300,
			"imagen" => "img-pdto-1.jpg",
			"enOferta" => true
		],
		4 => [
			"id" => 5,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem Ipsum",
			"precio" => 300,
			"imagen" => "img-pdto-2.jpg",
			"enOferta" => false
		],
		5 => [
			"id" => 6,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem Ipsum",
			"precio" => 300,
			"imagen" => "img-pdto-3.jpg",
			"enOferta" => true
		],
		6 => [
			"id" => 7,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem Ipsum",
			"precio" => 300,
			"imagen" => "img-pdto-1.jpg",
			"enOferta" => true
		],
		7 => [
			"id" => 8,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem Ipsum",
			"precio" => 300,
			"imagen" => "img-pdto-2.jpg",
			"enOferta" => false
		],
		8 => [
			"id" => 9,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem Ipsum",
			"precio" => 300,
			"imagen" => "img-pdto-3.jpg",
			"enOferta" => true
		],
		9 => [
			"id" => 10,
			"titulo" => "Lorem Ipsum",
			"descripcion" => "Lorem Ipsum",
			"precio" => 300,
			"imagen" => "img-pdto-3.jpg",
			"enOferta" => true
		],
	];

	$menu = ["home", "quienes", "servicios", "portfolio", "sucursales", "contactos",];
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<title>Responsive Web Design</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>

			<nav class="main-nav">
				<ul>
					<?php foreach ($menu as $unMenu) : ?>
						<li><a href="#"><?=$unMenu?></a></li>
					<?php endforeach; ?>
					<!--<li><a href="#">home</a></li>
					<li><a href="#">quienes</a></li>
					<li><a href="#">servicios</a></li>
					<li><a href="#">portfolio</a></li>
					<li><a href="#">sucursales</a></li>
					<li><a href="#">contacto</a></li>-->
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
		<section class="vip-products">
			<?php foreach ($productos as $unProducto) :?>
			<article class="product">
				<div class="photo-container">
						<img class="photo" src="images/<?php echo $unProducto['imagen'];?>" alt="pdto 01">
						<img class="special" src="images/img-nuevo.png" alt="plato nuevo">
						<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2><?php echo $unProducto['titulo'];?></h2>
				<p><?php echo $unProducto['descripcion'];?></p>
				<?php if ($unProducto['enOferta'] == true) : ?>
					<p><?php echo "En Oferta"?></p>
				<?php else : ?>
					<p><?php echo "Precio Regular"?></p>
				<?php endif; ?>
				<p><?php echo $unProducto['precio'];?></p>
				<a class="more" href="#">ver más</a>
				</article>
			<?php endforeach; ?>
		</section>

		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
