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

	<?php wp_head(); ?>

</head>

<body>

	<!-- ======= Header ======= -->

	<header id="header" class="fixed-top d-flex align-items-center">
	<div class="translate">
		<img class="flagbr" src="<?php echo SITEPATH; ?>assets/img/flagbr.png">
		<img class="flagen" src="<?php echo SITEPATH; ?>assets/img/flagen.png">
	</div>
		<div class="container d-flex align-items-center justify-content-between">
			<a href="/" class="logo"><img src="<?php echo SITEPATH; ?>assets/img/logo.png" alt="" class="img-fluid"></a>
			
			<nav id="navbar" class="navbar portugues">
				<ul>
					<li><a class="nav-link scrollto sobre" href="/sobre">Institucional</a></li>
					<li class="dropdown"><a class="nav-link scrollto industria" href="/industria"><span>Indústria</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a class="nav-link scrollto certificacoes" href="/certificacoes">Certificações</a></li>
						</ul>
					</li>
					<li><a class="nav-link scrollto noticias" href="/noticias">Notícias</a></li>
					<li><a class="nav-link scrollto contato" href="/contato">Contato</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

			<nav id="navbar" class="navbar ingles">
				<ul>
					<li><a class="nav-link scrollto sobre" href="/sobre">About</a></li>
					<li class="dropdown"><a class="nav-link scrollto industria" href="/industria"><span>Industry</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a class="nav-link scrollto certificacoes" href="/certificacoes">Certifications</a></li>
						</ul>
					</li>
					<li><a class="nav-link scrollto noticias" href="/noticias">News</a></li>
					<li><a class="nav-link scrollto contato" href="/contato">Contact</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->
		</div>

	</header><!-- End Header -->