<?php get_header(); ?>

<main id="main">

	<!-- ======= Pricing Section ======= -->
	<section id="noticias" class="pricing">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<hr>
				<h1>News & Feeds</h1><br>				
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
								<p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 100, '...');?></p>
								<br>
								<a href="<?php the_permalink() ?>"><button type="button">Leia mais</button></a>
							</div>
						</div>
					</div>

				<?php }	 ?>

			</div>

		</div>
	</section><!-- End Pricing Section -->

</main><!-- End #main -->

<?php get_footer(); ?>