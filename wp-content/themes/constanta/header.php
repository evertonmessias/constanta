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
          <li><a class="nav-link scrollto" href="/#video">Institucional</a></li>
          <li class="dropdown"><a class="nav-link scrollto" href="/#industria">Indústria <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="/solucoes">Soluções</a></li>
              <li><a href="/instalacoes">Instalações</a></li>
            </ul>
          </li>          
          <li><a class="nav-link scrollto" href="/#noticias">Notícias</a></li>
          <li><a class="nav-link scrollto" href="/#recado">Contatos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->