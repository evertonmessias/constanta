<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" style="background: url('<?php echo SITEPATH; ?>assets/img/banners/contato.jpg') top center;" class="solucoes d-flex justify-cntent-center align-items-center">
	<div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
		<!-- Slide -->
		<div id="slide" class="carousel-item active">
			<div class="bls pages animate__animated animate__fadeInUp">
				<div class="row">
					<div class="text col-lg-6">
						<p>Home > Contato</p>
					</div>
					<div class="text col-lg-6">
						<h1>Contato</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- End Hero -->
<main id="main">

	<section id="maps" class="contato">
		<div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14685.62511863695!2d-46.6772397!3d-23.0455621!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7baa151ce975601e!2sConstanta%20Industrial%20Ltda!5e0!3m2!1spt-BR!2sbr!4v1635185935648!5m2!1spt-BR!2sbr" class="mapa" allowfullscreen="" loading="lazy"></iframe>
		</div>

		<div class="container">
			<div class="row row2">
				<div class="col-lg-4 contato1">
					<br><br>
					<i class="bx bx-map"></i>
					<h3>Visit Here</h3>
					<p>Av. Tégula, 888 - Pte. Alta,<br>Atibaia - SP, 12952-820</p>
				</div>
				<div class="col-lg-4 contato2">
					<br><br>
					<i class="bx bx-phone"></i>
					<h3>Call Us</h3>
					<p>(11) 4417-7550</p>
				</div>
				<div class="col-lg-4 contato3">
					<br><br>
					<i class="bx bx-envelope"></i>
					<h3>Mail Here</h3>
					<p><a href="mailto:contato@constanta.com">contato@constanta.com</a></p>
				</div>
			</div>
		</div>

	</section>

</main><!-- End #main -->

<?php get_footer(); ?>