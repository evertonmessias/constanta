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
  <link href="<?php echo SITEPATH; ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <?php wp_head(); ?>
</head>

<body>
  <a href="/">
    <img class="logoalt" src="<?php echo SITEPATH; ?>assets/img/logo.png" title="Constanta">
  </a>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i><a href="mailto:vendas@constanta.com">vendas@constanta.com</a>
        &emsp;
        <i class="bi bi-telephone-outbound"></i> +55 (11) 4417-7550
      </div>
      &ensp;
      <div class="social d-md-block">
        <a href="#"><i class="bx bxl-facebook"></i></a>
        &ensp;
        <a href="#"><i class="bx bxl-twitter"></i></a>
        &ensp;
        <a href="#"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="/" class="logo"><img src="<?php echo SITEPATH; ?>assets/img/logo.png" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#video">Institucional</a></li>
          <li><a class="nav-link scrollto" href="#industria">Indústria</a></li>          
          <li><a class="nav-link scrollto" href="#recado">Contatos</a></li>
          <li><a class="nav-link scrollto" href="#noticias">Notícias</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide -->
      <div id="slide" class="carousel-item active">
        <div class="bls animate__animated animate__fadeInUp">
          <div class="bl1">
            <p class="animate__animated animate__fadeInUp">ADEQUAÇÃO E VERSATILIDADE</p>
            <h1 class="animate__animated animate__fadeInDown">Um olhar<br><span>360<sup>o</sup> GRAUS</span><br>para a manufatura<br>de eletrônicos</h1>
            <div class="blcs animate__animated animate__fadeInUp">
              <div class="blc1">
                <img src="<?php echo SITEPATH; ?>assets/img/icone1.png" alt="" class="img-fluid">
                <p>Indústria 4.0<br>Internet das Coisas</p>
              </div>
              <div class="blc2">
                <img src="<?php echo SITEPATH; ?>assets/img/icone2.png" alt="" class="img-fluid">
                <p>Automação<br>Industrial</p>
              </div>
            </div>
          </div>
          <div class="bl2">
            <img class="persona" src="<?php echo SITEPATH; ?>assets/img/persona.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>

      <!-- ex Slide 2 
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>-->

      <!--<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>-->

    </div>
  </section><!-- End Hero -->