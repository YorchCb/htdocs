			<header>
				<section class="main row">
					<section id="Top" class="col-xs-12">
						<br>
						<img src="<?php echo base_url(); ?>images/Portada.jpg" class="img-responsive">
						<br>
					</section>
					<section id="Menu" class="col-xs-12">
						<?php include 'plantillas/qs.php'; ?> / 
						<a href="/main/eventos"> Lista de eventos </a> /
						<a href="https://www.youtube.com" target="_blank"> YouTube </a> /
						<a href="./"> RazerComms </a>
						<?php include './app/login.php'; ?>
					</section>
				</section>
			</header>
					<section id="Juegos">
						<br>
						<article id="Bt1" class="col-xs-6 col-sm- col-md- col-lg-6">
							<a href="/bt1"> <img src="<?php echo base_url(); ?>images/Battlefield1.jpg" class="img-responsive"> </a>
							<br>
						</article>
						<article id="Bt4" class="col-xs-6 col-sm- col-md- col-lg-6">
							<a href="/bt4"> <img src="<?php echo base_url(); ?>images/Battlefield4.jpg" class="img-responsive"> </a>
							<br>
						</article>			
						<article id="GtaV" class="col-xs-6 col-sm- col-md- col-lg-6">
							<a href="/gtav"> <img src="<?php echo base_url(); ?>images/GtaV.jpg" class="img-responsive"> </a>
							<br>
						</article>
						<article id="Proximamente" class="col-xs-6 col-sm- col-md- col-lg-6">
							<img src="<?php echo base_url(); ?>images/Proximamente.jpg" class="img-responsive">
							<br>
						</article>
					</section>
<!--	
	<?php
		$output = '<h1>Facebook Profile Details </h1>';
		$output .= '<img src="'.$userData['picture'].'">';
        $output .= '<br/>Facebook ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Facebook';


						 echo $output;
?>
-->