<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" style="background: url('<?php echo SITEPATH; ?>assets/img/banners/news.jpg') top center;" class="solucoes instalacoes index-news d-flex justify-cntent-center align-items-center">
	<div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
		<!-- Slide -->
		<div id="slide" class="carousel-item active">
			<div class="bls pages animate__animated animate__fadeInUp">
				<div class="row">
					<div class="text col-lg-6">
						&nbsp;
					</div>
					<div class="text col-lg-6">
						<h1>News</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- End Hero -->
<main id="main" class="page post" data-aos="fade-up">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2><?php the_title() ?></h2>
        <ol>
          <li><a href="/">home</a></li>
          <li>
            <?php
            if (url_active()[2] == "") echo url_active()[1];
            else echo "<a href='/" . url_active()[1] . "'>" . url_active()[1] . "</a>";
            ?>
          </li>
          <li>
            <?php
            if (url_active()[2] != "") echo url_active()[2];
            ?>
          </li>
        </ol>
      </div>
    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= Portfolio Details Section ======= -->
  <section class="portfolio-details">
    <div class="container">

      <div class="portfolio-details-container">

        <?php if(has_post_thumbnail()){ ?>
        <div class="owl-carousel portfolio-details-carousel">
          <a href="<?php the_post_thumbnail_url('full'); ?>" target="_blank">
            <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid" title="<?php the_title() ?>">
          </a>
        </div>  
        <?php } ?>
      </div>

      <div class="portfolio-description">
        <?php the_content() ?>
      </div>
    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
<?php get_footer(); ?>