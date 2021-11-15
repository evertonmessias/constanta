<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" style="background: url('<?php echo SITEPATH; ?>assets/img/banners/instalacoes.jpg') top center;" class="solucoes instalacoes d-flex justify-cntent-center align-items-center">
	<div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
		<!-- Slide -->
		<div id="slide" class="carousel-item active">
			<div class="bls pages animate__animated animate__fadeInUp">
				<div class="row">
					<div class="text col-lg-6">
						<p>Home > Responsabilidade Social</p>
					</div>
					<div class="text col-lg-6">
						<h1>Responsabilidade Social</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= Responsabilidade Section ======= -->
	<section id="resp" class="resp">		
		<div class="container" data-aos="fade-up">
			<div class="row responsabilidade">
				<div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="100">
					<hr>
					<h1>Responsabilidade Social</h1>
					<br>
					<p>
						A empresa é socialmente responsável e sustentável quando vai além da obrigação legal de pagar impostos e observar as condições adequadas de segurança e saúde para os trabalhadores ou preservar o meio ambiente.
					</p>
				</div>

				<div class="slide slide1">
					<div class="row respons">
						<div class="col-lg-6 respon1">
							<h5>Coleta seletiva do lixo</h5>
							<p>Desde janeiro de 2004, a Constanta contribui com o meio ambiente e com a sociedade por meio do Programa de Coleta Seletiva de respon.</p>
						</div>
						<div class="col-lg-6 respon2">
							<img src="<?php echo SITEPATH ?>assets/img/respon1.jpg" title="Responsabilidade">
						</div>
					</div>
				</div>

				<div class="slide slide2">
					<div class="row respons">
						<div class="col-lg-6 respon1">
							<h5>Sustentabilidade</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ante dui, tristique quis odio ut, imperdiet aliquet massa.</p>
						</div>
						<div class="col-lg-6 respon2">
							<img src="<?php echo SITEPATH ?>assets/img/respon2.jpg" title="Responsabilidade">
						</div>
					</div>
				</div>

				<div class="slide slide3">
					<div class="row respons">
						<div class="col-lg-6 respon1">
							<h5>Meio Ambiente</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ante dui, tristique quis odio ut, imperdiet aliquet massa.</p>
						</div>
						<div class="col-lg-6 respon2">
							<img src="<?php echo SITEPATH ?>assets/img/respon3.jpg" title="Responsabilidade">
						</div>
					</div>
				</div>
			</div>
			<div class="buttons">
				<button type="button" class="prev"><i class="bx bx-down-arrow"></i></button>
				<button type="button" class="next"><i class="bx bx-up-arrow"></i></button>
			</div>
		</div>
	</section><!-- End Responsabilidade Section -->

</main><!-- End #main -->

<?php get_footer(); ?>