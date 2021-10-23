<?php get_header(); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" style="background: url('<?php echo SITEPATH; ?>assets/img/banners/hero-bg.jpg') top center;" class="d-flex justify-cntent-center align-items-center">
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
	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= Icon Boxes Section ======= -->
	<section id="icon-boxes" class="icon-boxes">
		<div class="container">
			<div class="row">
				<div class="col-md-14 col-lg-14 d-flex" data-aos="fade-up">
					<div class="icon-box">
						<div class="blcs">
							<div class="blc1">
								<hr>
								<h1>Soluções</h1>
								<img src="<?php echo SITEPATH; ?>assets/img/solution.png" alt="" class="img-fluid">
								<div class="forml">
									<p>Mais informações</p>
									<h3>Inscreva-se</h3>
									<form>
										<input type="email" placeholder="E-mail">
										<button class="btn0">Enviar</button>
									</form>
								</div>
							</div>
							<div class="blc2">
								<br>
								<h5>Com segurança</h5>
								<p>Do projeto até a entrega do produto acabado, nossos serviços são pensados segundo a sua necessidade, otimizando o uso de mão de obra, armazenagem, processos, suprimentos, seguros, transportes, proporcionando ganhos financeiros e agilidade para enfrentar os desafios do mercado. </p>
								<button class="btn1">Saiba mais</button>
								<button class="btn2">Entre em contato</button>
								<h1>&nbsp;</h1>
								<hr>
								<h1>O que fazemos</h1>
								<p>Nós oferecemos mais e melhores serviços.<br>Do projeto até a entrega do produto acabado.</p>
								<button class="btn3">Nossas soluções</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Icon Boxes Section -->

	<!-- ======= Video ======= -->
	<section id="video" class="video">
		<div class="container" data-aos="fade-up">
			<div class="row content">
				<img src="<?php echo SITEPATH; ?>assets/img/video.png" title="video" alt="video" class="img-fluid">
				<a href="http://constanta.com.br/video/demo.mp4" title="open-video" target="_blank">
					<i class="bx bx-play-circle"></i>
				</a>
			</div>
		</div>
	</section><!-- End Video -->

	<!-- ======= Portfoio Section ======= -->
	<section id="portfolio" class="portfoio timeline">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<hr>
				<h1>Timeline</h1>
			</div>

			<div class="row">
				<div class="col-lg-12 d-flex justify-content-center">
					<ul id="portfolio-flters">
						<li onclick="filter(1);" class="filter-active">1952</li>
						<li onclick="filter(2);">1962</li>
						<li onclick="filter(3);">1972</li>
						<li onclick="filter(4);">1982</li>
						<li onclick="filter(5);">1992</li>
						<li onclick="filter(6);">2002</li>
						<li onclick="filter(7);">2012</li>
						<li onclick="filter(8);">2022</li>
					</ul>
				</div>
			</div>

			<div class="row portfolio-container">

				<div style="display:block" class="col-lg-12 col-md-6 portfoliofilter filter1">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>19<br><span>52</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<p>A Constanta foi inaugurada em abril de 1952, na cidade de Ribeirão Preto, por quatro alemães que desembarcaram no Brasil com o objetivo de expandir o mercado de eletrônicos, sendo que se iniciou a partir da produção de resistores de carvão.</p>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php echo SITEPATH; ?>assets/img/portfolio/portfolio-1.png">
							</div>
						</div>
					</div>
				</div>

				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter2">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>19<br><span>62</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ligula nisl, sodales at metus aliquam, fermentum euismod ex. Suspendisse potenti. Fusce a ultricies sapien.</p>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php echo SITEPATH; ?>assets/img/portfolio/portfolio-2.jpg">
							</div>
						</div>
					</div>
				</div>
				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter3">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>19<br><span>72</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ligula nisl, sodales at metus aliquam, fermentum euismod ex. Suspendisse potenti. Fusce a ultricies sapien.</p>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php echo SITEPATH; ?>assets/img/portfolio/portfolio-3.jpg">
							</div>
						</div>
					</div>
				</div>
				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter4">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>19<br><span>82</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ligula nisl, sodales at metus aliquam, fermentum euismod ex. Suspendisse potenti. Fusce a ultricies sapien.</p>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php echo SITEPATH; ?>assets/img/portfolio/portfolio-4.jpg">
							</div>
						</div>
					</div>
				</div>

				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter5">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>19<br><span>92</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ligula nisl, sodales at metus aliquam, fermentum euismod ex. Suspendisse potenti. Fusce a ultricies sapien.</p>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php echo SITEPATH; ?>assets/img/portfolio/portfolio-5.jpg">
							</div>
						</div>
					</div>
				</div>

				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter6">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>20<br><span>02</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ligula nisl, sodales at metus aliquam, fermentum euismod ex. Suspendisse potenti. Fusce a ultricies sapien.</p>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php echo SITEPATH; ?>assets/img/portfolio/portfolio-6.jpg">
							</div>
						</div>
					</div>
				</div>
				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter7">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>20<br><span>12</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ligula nisl, sodales at metus aliquam, fermentum euismod ex. Suspendisse potenti. Fusce a ultricies sapien.</p>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php echo SITEPATH; ?>assets/img/portfolio/portfolio-7.jpg">
							</div>
						</div>
					</div>
				</div>
				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter8">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>20<br><span>22</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ligula nisl, sodales at metus aliquam, fermentum euismod ex. Suspendisse potenti. Fusce a ultricies sapien.</p>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php echo SITEPATH; ?>assets/img/portfolio/portfolio-8.jpg">
							</div>
						</div>
					</div>
				</div>



			</div>

		</div>
	</section>
	<!-- End Portfoio Section -->

	<!-- ======= Why Us Section ======= -->
	<section id="industria" class="why-us quadros">
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
			<div class="row">
				<div class="col-lg-6 numeros">
					<div class="instal">
						<h3>Nossas instalações</h3>
						<p>Nossa planta oferece espaço, equipamentos de últimia geração e um amplo estoque.</p>
						<button class="btn0">Nossos números</button>
					</div>
				</div>
				<div class="col-lg-6 numeros">
					<section id="circleBar" class="counts">
						<div class="container">
							<div class="row">
								<div class="col-md-4 rounds">
									<div class="round round1" data-value="0.90" data-size="100" data-thickness="10">
										<strong data-toggle="counter-up">2100</strong>
									</div>
									<p>M<sup>2</sup> de planta<br>contruída</p>
								</div>
								<div class="col-md-4 rounds">
									<div class="round round2" data-value="0.90" data-size="100" data-thickness="10">
										<strong data-toggle="counter-up">1200</strong>
									</div>
									<p>Projetos<br>próprios</p>
								</div>
								<div class="col-md-4 rounds">
									<div class="round round3" data-value="0.90" data-size="100" data-thickness="10">
										<strong data-toggle="counter-up">9060</strong>
									</div>
									<p>Clientes<br>atendidos</p>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
	<!-- End Why Us Section -->

	<!-- ======= Pionerismo Section ======= -->
	<section id="pion" class="about">
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

	<!-- ======= Responsabilidade Section ======= -->
	<section id="resp" class="resp">
		<div class="cta resp"></div>
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

	<!-- ======= Recado Section ======= -->
	<section id="recado" class="recado">
		<br>
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="100">
					<h5>Contato</h5>
					<h2>Deixe seu recado</h2>
					<p>A Constanta Industrial agradece o seu contato. Caso prefira enviar<br>uma mensagem de forma rápida, preencha o formulário abaixo.</p>
					<button type="button">Entre em contato</button>
				</div>
			</div>
		</div>
	</section><!-- End Recado Section -->

	<!-- ======= Post Section ======= -->
	<section id="noticias" class="pricing">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<hr>
				<h1>Noticias</h1><br>
				<p>Fique por dentro das últimas noticias do mundo da tecnologia.</p>
			</div>

			<div class="row noticias">

				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 3,
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
		<a href="/noticias"><button class="maisnews" type="button">+ Notícias</button></a>
	</section><!-- End Pricing Section -->

</main><!-- End #main -->

<?php get_footer(); ?>