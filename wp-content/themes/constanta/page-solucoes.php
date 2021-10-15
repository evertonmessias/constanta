<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" style="background: url('<?php echo SITEPATH; ?>assets/img/banners/solucoes.jpg') top center;" class="solucoes d-flex justify-cntent-center align-items-center">
	<div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
		<!-- Slide -->
		<div id="slide" class="carousel-item active">
			<div class="bls animate__animated animate__fadeInUp">
				<div class="row">
					<div class="text col-lg-6">
						<h5>Home > Soluções</h5>
					</div>
					<div class="text col-lg-6">
						<h1>Soluções</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- End Hero -->
<main id="main">

	<!-- ======= Why Us Section ======= -->
	<section id="industria" class="why-us quadros solucoes">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<img src="<?php echo SITEPATH ?>assets/img/quadros/quadro1.png" title="Constanta">
				</div>
				<div class="col-lg-6">
					<img src="<?php echo SITEPATH ?>assets/img/quadros/quadro2.png" title="Constanta">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<img src="<?php echo SITEPATH ?>assets/img/quadros/quadro3.png" title="Constanta">
				</div>
				<div class="col-lg-6">
					<img src="<?php echo SITEPATH ?>assets/img/quadros/quadro4.png" title="Constanta">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<img src="<?php echo SITEPATH ?>assets/img/quadros/quadro5.png" title="Constanta">
				</div>
				<div class="col-lg-6">
					<img src="<?php echo SITEPATH ?>assets/img/quadros/quadro6.png" title="Constanta">
				</div>
			</div>
		</div>
	</section>
	<!-- End Why Us Section -->

	<!-- ======= Pionerismo Section ======= -->
	<section id="pion" class="about solucoes">
		<div class="container" data-aos="fade-up">

			<div class="row pionerismo">

				<div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
					<hr>
					<h1>Do pionerismo<br>do mercado eletrônico<br>a evolução tecnológica</h1>
					<br>
					<p>
						Há 70 anos, a Constanta Industrial foi idealizada para ser uma fabricante de
						componentes para o mercado eletrônico brasileiro. Investindo continuamente desde
						então, nos tornamos uma empresa conceituada e em permanente evolução.
						Hoje, oferecemos as melhores opções do mercado para montagens eletrônicas em
						regime de turnkey. Seguindo nossa tradição, investimos em uma estrutura ímpar,
						voltada para agregar qualidade, produtividade e competitividade aos nossos serviços
						e aos produtos de nossos clientes.
					</p>
					<ul>
						<li>
							<div class="row">
								<div class="col-lg-2">
									<img src="<?php echo SITEPATH ?>assets/img/ico-smd.png" class="img-fluid" alt="">
								</div>
								<div class="col-lg-10">
									<h5>Montagens SMD</h5>
									<p>Realizadas em equipamentos de última geração, proteção contra eletricidade estética,
										proteção ao meio ambiente, componentes de qualidade comprovada e atendimento aos prazos contratados.
									</p>
								</div>
							</div>
						</li>
						<br>
						<li>
							<div class="row">
								<div class="col-lg-2">
									<img src="<?php echo SITEPATH ?>assets/img/ico-pth.png" class="img-fluid" alt="">
								</div>
								<div class="col-lg-10">
									<h5>Montagens PTH</h5>
									<p>Realizamos o processo PTH completo, incluindo complementação de partes mecânicas, inspeção de montagem, integração, testes e assistência técnica.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
					<img src="<?php echo SITEPATH ?>assets/img/pionerismo.png" class="img-fluid" alt="">
				</div>
			</div>

		</div>
	</section><!-- End Pionerismo Section -->


</main><!-- End #main -->

<?php get_footer(); ?>