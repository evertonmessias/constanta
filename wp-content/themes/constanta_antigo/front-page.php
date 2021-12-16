<?php get_header(); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" style="background: url('<?php echo SITEPATH; ?>assets/img/banners/hero-bg.jpg') top center;" class="d-flex justify-cntent-center align-items-center">
	<div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

		<!-- Slide -->
		<div id="slide" class="carousel-item active">
			<div class="animate__animated animate__fadeInUp">
				<div class="bl1">
					<p class="animate__animated animate__fadeInUp">ADEQUAÇÃO E VERSATILIDADE</p>
					<h1 class="animate__animated animate__fadeInDown">Uma Visão<br><span>360<sup>o</sup> GRAUS</span><br>para a manufatura<br>de eletrônicos</h1>
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
			</div>
		</div>
	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= Icon Boxes Section ======= 
	<section id="icon-boxes" class="icon-boxes">
		<div class="container">
			<div class="row">
				<div class="col-md-14 col-lg-14 d-flex" data-aos="fade-up">
					<div class="icon-box">
						<div class="blcs">
							<div class="blc1">
								<hr>
								<h1>Soluções</h1>
								<img src="<?php //echo SITEPATH; ?>assets/img/solution.png" alt="" class="img-fluid">
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
	</section> End Icon Boxes Section -->

	<!-- ======= Video ======= -->
	<section id="video" class="video">
		<div class="container" data-aos="fade-up">
			<div class="row content">
				<img src="<?php echo SITEPATH; ?>assets/img/video.png" title="video" alt="video" class="img-fluid">
				<a href="/video/institucional.mp4" title="open-video" target="_blank">
					<i class="bx bx-play-circle"></i>
				</a>
			</div>
		</div>
	</section><!-- End Video -->

	<!-- ======= TimeLine Section ======= 
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
						<li onclick="filter(2);">1969</li>
						<li onclick="filter(3);">1998</li>
						<li onclick="filter(4);">2016</li>
						<li onclick="filter(5);">2017</li>
						<li onclick="filter(6);">2019</li>
						<li onclick="filter(7);">2020</li>
						<li onclick="filter(8);">2021</li>
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
								<h4>Constanta é fundada por 4 alemães. Produção inicial: resistores de carvão.</h4>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php //echo SITEPATH; ?>assets/img/portfolio/portfolio-1.png">
							</div>
						</div>
					</div>
				</div>

				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter2">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>19<br><span>69</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<h4>Passa a fazer parte do grupo Philips.</h4>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php //echo SITEPATH; ?>assets/img/portfolio/portfolio-1.png">
							</div>
						</div>
					</div>
				</div>
				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter3">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>19<br><span>98</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<h4>Empresários locais compram a Constanta do grupo Philips e a planta é transferida para o bairro do Ipiranga, São Paulo/SP.</h4>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php //echo SITEPATH; ?>assets/img/portfolio/portfolio-1.png">
							</div>
						</div>
					</div>
				</div>
				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter4">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>20<br><span>16</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<h4>Ampliação e modernização da planta fabril em Atibaia.</h4>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php //echo SITEPATH; ?>assets/img/portfolio/portfolio-1.png">
							</div>
						</div>
					</div>
				</div>

				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter5">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>20<br><span>17</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<h4>Certificações: além da ISO 9001, a companhia adquire o certificado ISO 13485 (Área médica, hospitalar).</h4>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php //echo SITEPATH; ?>assets/img/portfolio/portfolio-1.png">
							</div>
						</div>
					</div>
				</div>

				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter6">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>20<br><span>19</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<h4>Centralização das operações na planta de Atibaia.</h4>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php //echo SITEPATH; ?>assets/img/portfolio/portfolio-1.png">
							</div>
						</div>
					</div>
				</div>
				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter7">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>20<br><span>20</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<h4>Expansão da área fabril. Aquisição Absolut Mobile; Reestruturação societária.</h4>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php //echo SITEPATH; ?>assets/img/portfolio/portfolio-1.png">
							</div>
						</div>
					</div>
				</div>
				<div style="display:none" class="col-lg-12 col-md-6 portfoliofilter filter8">
					<div class="portfolio-info">
						<div class="row">
							<div class="col-lg-3 info-block col-md-6">
								<h1>20<br><span>21</span></h1>
							</div>
							<div class="col-lg-6 info-block col-md-6">
								<h4>PIONEIROS EM MANUFATURA DE ELETRÔNICOS</h4>
								<h4>Inauguração do ICI (Instituto Constanta de Inovação).</h4>
							</div>
							<div class="col-lg-3 info-block col-md-6">
								<img src="<?php //echo SITEPATH; ?>assets/img/portfolio/portfolio-1.png">
							</div>
						</div>
					</div>
				</div>



			</div>

		</div>
	</section>
	End TimeLine Section -->

		<!-- ======= Timeline 2 Section ======= -->
		<section id="portfolio" class="portfoio timeline2">
		<div class="containertm" data-aos="fade-up">
			<div class="section-title">
				<hr>
				<h1>Timeline</h1>
			</div>

			<div class="row">
				<div class="col-lg-12 d-flex justify-content-center content-timeline">
					<img src="<?php echo SITEPATH; ?>assets/img/timeline.png" title="timeline" alt="timeline" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
	<!-- End Timeline 2 Section -->

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
	
	<!-- ======= Recado Section ======= -->
	<section id="recado" class="recado">
		<br>
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="100">
					<h5>Contato</h5>
					<h2>Deixe seu recado</h2>
					<p>A Constanta Industrial agradece o seu contato. Caso prefira enviar<br>uma mensagem de forma rápida, preencha o formulário abaixo.</p>
					<a href="/contato"><button type="button">Entre em contato</button></a>
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
	</section><!-- End Post Section -->

</main><!-- End #main -->

<?php get_footer(); ?>