<?php get_header(); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="sobre">
	<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<!-- Slide 1 -->
			<div class="carousel-item active" style="background-image: url(<?php echo SITEPATH; ?>assets/img/slide/noticias.jpg)">
				<div class="carousel-container">
					<hr>
					<h2 class="animate__animated animate__fadeInDown">NEWS</span></h2>
				</div>
			</div>
		</div>
	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= Post Section ======= -->
	<section id="noticias" class="pricing">
		<div class="container" data-aos="fade-up">
	<br><br>
			<div class="section-title">				
				<h1>Noticias</h1><br>
				<p>Fique por dentro das últimas<br>noticias do mundo da tecnologia.</p>
			</div>

			<div class="row noticias">

				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 100,
					'order' => 'DESC'
				);
				$loop = new WP_Query($args);
				while ($loop->have_posts()) {
					$loop->the_post();
				?>

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
						<div class="box">
							<img src="<?php the_post_thumbnail_url('full') ?>" title="<?php the_title() ?>">
							<div class="content">
								<h5><?php the_title() ?></h5>
								<br>								
								<a href="<?php the_permalink() ?>"><button type="button">Leia mais</button></a>
							</div>
						</div>
					</div>

				<?php }	 ?>

			</div>
		</div>
		<br>
	</section><!-- End Post Section -->

</main>
<!-- End #main -->
<?php get_footer(); ?>