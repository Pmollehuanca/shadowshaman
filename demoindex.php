<!DOCTYPE html>
<html lang="es">
<head>
	<link href="democss.css" type="text/css" rel="stylesheet" />
	<meta charset="UTF-8">
	<title>Minitienda</title>
</head>
<body>
	<header>
		<figure>
			<a href="#">
				<img src="img/logo.png" alt="konoa">
			</a>
		</figure>
		<nav>
			<ul>
				<li>todo</li>
				<li>chico</li>
				<li>grande</li>
			</ul>
		</nav>
	</header>
	<section>
		<div class="allproducts">
<?php
include("demoproductos.php");
?>
		<div class="clearfix"></div>
		</div>
	</section>
</body>
</html>
