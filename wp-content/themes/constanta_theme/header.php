<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?php bloginfo() ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?php echo SITEPATH; ?>assets/img/favicon.png" rel="icon">

	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Saira:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo SITEPATH; ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo SITEPATH; ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/css/constanta.css" rel="stylesheet">

	<!-- Google Translate -->
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script type="text/javascript">
  function googleTranslateElementInit() {
	new google.translate.TranslateElement({
		pageLanguage: 'pt'
	  },
	  'google_translate_element');
  }
</script>

	<?php wp_head(); ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="/" class="logo"><img src="<?php echo SITEPATH; ?>assets/img/logo.png" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/#timeline">Institucional</a></li>
          <li class="dropdown"><a class="nav-link scrollto" href="/#slide-boxs">Indústria <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="/solucoes">Soluções</a></li>
              <li><a href="/instalacoes">Instalações</a></li>
              <li><a href="/responsabilidade-social">Responsabilidade Social</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/#noticias">Notícias</a></li>
          <li><a class="nav-link scrollto" href="/#recado">Contatos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div id="google_translate_element" class="google-translate"></div>

    </div>
  </header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

			<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

			<div class="carousel-inner" role="listbox">

				<!-- Slide 1 -->
				<div class="carousel-item active" style="background-image: url(<?php echo SITEPATH; ?>assets/img/slide/slide-1.gif)">
					<div class="carousel-container">
						<div class="container">
							<p class="animate__animated animate__fadeInUp">Uma visão</p>
							<h2 class="animate__animated animate__fadeInDown">360<sup>o</sup> GRAUS</span></h2>
							<p class="animate__animated animate__fadeInUp">para manufatura de<br>eletrônicos</p>
							<a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sobre nós</a>
						</div>
					</div>
				</div>

				<!-- Slide 2 -->
				<div class="carousel-item" style="background-image: url(<?php echo SITEPATH; ?>assets/img/slide/slide-2.jpg)">
					<div class="carousel-container">
						<div class="container">
							<h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
							<p class="animate__animated animate__fadeInUp">Lorem Ipsum Dolor</p>
							<a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
						</div>
					</div>
				</div>

				<!-- Slide 3 -->
				<div class="carousel-item" style="background-image: url(<?php echo SITEPATH; ?>assets/img/slide/slide-3.jpg)">
					<div class="carousel-container">
						<div class="container">
							<h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
							<p class="animate__animated animate__fadeInUp">Lorem Ipsum Dolor</p>
							<a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
						</div>
					</div>
				</div>

				<!-- Slide 4 -->
				<div class="carousel-item" style="background-image: url(<?php echo SITEPATH; ?>assets/img/slide/slide-4.jpg)">
					<div class="carousel-container">
						<div class="container">
							<h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
							<p class="animate__animated animate__fadeInUp">Lorem Ipsum Dolor</p>
							<a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
						</div>
					</div>
				</div>

			</div>

			<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
			</a>

			<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
			</a>

		</div>
	</section><!-- End Hero -->