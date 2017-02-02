<!doctype html>
<html lang="es">
	<head>
		<title>Home</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0; maxium-scale=1.0, minium-scale=1.0">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/style.css">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script type="text/javascript">
			document.oncontextmenu = function(){return false;}
		   </script>
	</head>
	 <div class="container">
	 	<body>
			<header>
				<section class="main row">
					<section id="Top" class="col-xs-12">
						<br>
						<img src="./images/Portada.jpg" class="img-responsive">
						<br>
					</section>
					<section id="Menu" class="col-xs-12">
						<a href=""> ¿Quiénes somos? </a> /
						<a href="./"> Lista de eventos </a> /
						<a href="https://www.youtube.com" target="_blank"> YouTube </a> /
						<a href="./"> RazerComms </a> /
						<?php include './app/login.php'; ?>
					</section>
				</section>
			</header>
					<section id="Juegos">
						<br>
						<article id="Bt1" class="col-xs-6 col-sm- col-md- col-lg-6">
							<a href="./"> <img src="./images/Battlefield1.jpg" class="img-responsive"> </a>
							<br>
						</article>
						<article id="Bt4" class="col-xs-6 col-sm- col-md- col-lg-6">
							<a href="./"> <img src="./images/Battlefield4.jpg" class="img-responsive"> </a>
							<br>
						</article>			
						<article id="GtaV" class="col-xs-6 col-sm- col-md- col-lg-6">
							<a href="./"> <img src="./images/GtaV.jpg" class="img-responsive"> </a>
							<br>
						</article>
						<article id="Proximamente" class="col-xs-6 col-sm- col-md- col-lg-6">
							<img src="./images/Proximamente.jpg" class="img-responsive">
							<br>
						</article>
				</section>
				<script scr="./js/jQuery.js"></script>
				<script scr="./js/bootstrap.min.js"></script>
		</body>
		<footer class="col-xs-12">
			Diseñada por <a href="https://www.facebook.com/Yorch.Computacion">Yorch Computación</a>
		</footer>
	</div>
</html>
