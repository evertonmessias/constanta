<?php get_header(); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="sobre">
	<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<!-- Slide 1 -->
			<div class="carousel-item active" style="background-image: url(<?php echo SITEPATH; ?>assets/img/slide/contato.jpg)">
				<div class="carousel-container">
					<hr>
					<h2 class="animate__animated animate__fadeInDown">CONTATO</span></h2>
				</div>
			</div>
		</div>
	</div>
</section><!-- End Hero -->

<main id="main">

	<section id="contato" class="contato" style="background-image: url(<?php echo SITEPATH; ?>assets/img/background/contato.jpg)">
		<div class="container">
			<br><br>
			<h2>CONTATO</h2>
			<br><br>
			<div class="row quadro-contatos">
				<div class="col-lg-4 contatobox">
					<br><br>
					<i class="bx bx-map"></i>
					<h3>Visit Here</h3>
					<p>Av. Tégula, 888 - Pte. Alta,<br>Atibaia - SP, 12952-820</p>
				</div>
				<div class="col-lg-4 contatobox">
					<br><br>
					<i class="bx bx-phone"></i><br>
					<h3>Call Us</h3>
					<p>(11) 4417-7550</p>
				</div>
				<div class="col-lg-4 contatobox">
					<br><br>
					<i class="bx bx-envelope"></i>
					<h3>Mail Here</h3>
					<p><a href="mailto:contato@constanta.com">contato@constanta.com</a></p>
				</div>
			</div>
			<div class="row formulario">
				<div class="col-lg-6">
					<h1>&nbsp;</h1>
				</div>
				<div class="col-lg-6 form">
					<?php echo do_shortcode("[wpforms id='45']"); ?>
				</div>
			</div>
		</div>

	</section>

	<section id="mapa" class="mapa">
		<div class="row">
			<div class="col-lg-8 maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14685.62511863695!2d-46.6772397!3d-23.0455621!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7baa151ce975601e!2sConstanta%20Industrial%20Ltda!5e0!3m2!1spt-BR!2sbr!4v1635185935648!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<div class="col-lg-4 imagem">
				<a href="https://www.google.com/maps/place/Constanta+Industrial+Ltda/@-23.040645,-46.660131,14z/data=!4m5!3m4!1s0x0:0x7baa151ce975601e!8m2!3d-23.0455769!4d-46.6771845?hl=pt-BR" target="_blank">
					<img src="<?php echo SITEPATH ?>assets/img/background/localizacao.png" title="Google Maps">
				</a>
			</div>
		</div>
	</section>

</main>
<!-- End #main -->
<?php get_footer(); ?>