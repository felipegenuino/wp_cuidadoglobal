<?php get_header(); ?>






<section id="hero" class="section-hero" data-magellan-target="hero">
	<div class="section__inner">
		<div class="row">
			<div class="small-12 columns">
 				<img data-interchange="[<?php echo get_stylesheet_directory_uri(); ?>/assets/img/background/banner_site--small.jpg, small], [<?php echo get_stylesheet_directory_uri(); ?>/assets/img/background/banner_site--small.jpg, medium], [<?php echo get_stylesheet_directory_uri(); ?>/assets/img/background/banner_site--large.jpg, large]">
   			</div>
		</div>
	</div> <!-- //section__inner -->
</section>




<header class="header-main" >
	<ul class="list-brand">
		<li class="list-brand__list"> <a href="<?php bloginfo('url'); ?>" class="list-brand__list--link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand/brand-cuidado-global.jpg" 		class="list-brand__list--link-cuidadoglobal list-brand__list--link-image" alt="imagem: Cuidado Global"></a> </li>
		<li class="list-brand__list"> <a href="<?php bloginfo('url'); ?>" class="list-brand__list--link"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sponsors/brand-rta-header.png" class="list-brand__list--link-rta list-brand__list--link-image" alt="imagem: RTA"></a> </li>
		<li class="hide list-brand__list list-brand__list-buton">  <a href="#" class="button ">Inscreva-se</a></li>
	</ul>

	<div class="list-booking">
		<a class="list-booking__link button" href="<?php bloginfo('url'); ?>/inscricao">Inscreva-se</a>
	</div>

	 <ul class="horizontal menu header-main__nav" >
		   <li><a href="#hero"><i class="material-icons">home</i></a></li>
		   <li><a href="#about">Sobre o encontro</a></li>
		   <li><a href="#schedule">Cursos e Programa</a></li>
		   <li><a href="#localization">Local</a></li>
		   <li><a href="#sponsors">Realização e Patrocínio</a></li>
		   <li><a href="#booking">Inscreva-se</a></li>
		</ul>
</header>



<?php /* ?>
<section id="realization" class="section-realization" data-magellan-target="about">
	<div class="section__inner">
		<div class="row">


			<div class="small-12 large-10 large-push-1 columns">

				<h2 class="section__title"><strong> Cuidado Global </strong> e <strong> RTA</strong> Apresentam </h2>

				<div class="row small-up-2 large-up-4">
					<div class="realization__column column">
						<div class="realization__item">
							<span class="realization__icon"> <img class="realization__icon-image" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/info/icon-calendar.svg"></span>
							<span class="realization__text"> 5 dias de evento </span>
						</div>  <!--// realization__item -->
					</div> <!-- //column -->
					<div class="realization__column column">
							<div class="realization__item">
								<span class="realization__icon"> <img class="realization__icon-image" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/info/icon-talks.svg"></span>
								<span class="realization__text"> Palestras e Workshops </span>
							</div> <!--// realization__item -->
					</div> <!-- //column -->
					<div class="realization__column column">
						<div class="realization__item">
							<span class="realization__icon"> <img class="realization__icon-image" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/info/icon-coffee.svg"></span>
							<span class="realization__text"> Coffee break para networking </span>
						</div> <!--// realization__item -->
					</div> <!-- //column -->
					<div class="realization__column column">
						<div class="realization__item">
							<span class="realization__icon"> <img class="realization__icon-image" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/info/icon-professional.svg"></span>
							<span class="realization__text"> Presença de profissionais de destaque no Brasil e no Mundo </span>
						</div> <!--// realization__item -->
					</div> <!-- //column -->
				</div> <!--//row small-up-4 -->
			</div> <!-- //small-12 medium-6 large-3 columns -->
		</div>
	</div> <!-- //section__inner -->
</section>
<?php */ ?>


<section id="about" class="section-about" data-magellan-target="about">
	<div class="section__inner">
		<div class="row">

				<div class="medium-10 medium-push-1  large-8 large-push-2 columns ">
						<div class="container-tabs">
							<ul class="container-tabs__list tabs" data-tabs id="example-tabs">
							  <li class="container-tabs__item tabs-title is-active"><a class="container-tabs__item--link" href="#panel1" aria-selected="true"><strong>Sobre o encontro</strong></a></li>
							  <li class="container-tabs__item tabs-title"><a class="container-tabs__item--link" href="#panel2"><strong>Carta da Presidente</strong></a></li>
							</ul>
						</div>

						<div class="container-tabs-content tabs-content" data-tabs-content="example-tabs">
							  <div class="container-tabs-content__panel tabs-panel is-active" id="panel1">
							  			<h3 class="container-tabs-content__panel-title"> <?php the_field('acf_page_about_title'); ?></h3>
							  			<?php the_field('acf_page_about_body'); ?>
							  </div>
							  <div class="container-tabs-content__panel tabs-panel" id="panel2">
										<h3 class="container-tabs-content__panel-title"> <?php the_field('acf_page_letter_from_the_president_title'); ?></h3>
							  			<?php the_field('acf_page_letter_from_the_president_body'); ?>
							  </div>
						</div> <!-- //container-tabs-content -->
				</div> <!-- //medium-10 medium-push-1  large-8 large-push-2 columns -->

 			</div> <!-- //row -->
		</div> <!-- //section__inner -->
 </section>



<section id="schedule" class="section-schedule " data-magellan-target="schedule">
	<div class="section__inner">
		<div class="row">

			<div class="small-12 columns">
				<span class="text-center section__title-icon"> <i class="material-icons">event_available</i></span>
 				<h2 class="section__title">Cursos e Programa</h2>
 			</div>


							<div class="small-12 columns">
									<div class="container-tabs ">
										<ul class="container-tabs__list tabs" data-tabs id="example-tabs">
										  <li class="container-tabs__item tabs-title is-active"><a class="container-tabs__item--link gray" href="#schedule1" aria-selected="true">
										  	<strong>15nov</strong> <br>
										  	<small>curso pré-encontro</small>
										  </a></li>
										  <li class="container-tabs__item tabs-title"><a class="container-tabs__item--link gray" href="#schedule2">
										  	<strong>16nov</strong> <br>
										  	<small>curso pré-encontro</small></a>
										  </li>
										  <li class="container-tabs__item tabs-title"><a class="container-tabs__item--link gray" href="#schedule3">
										  <strong>17,18 e 19 nov</strong> <br>
										  	<small>Evento principal</small>
										  </a></li>
										</ul>
									</div>

									<div class="container-tabs-content tabs-content" data-tabs-content="example-tabs">
										  <div class="container-tabs-content__panel container-tabs-content__panel--clear tabs-panel is-active" id="schedule1">
										  			<div class="schedule__header">
										  				 <div class="row collapse">
												  				<div class="medium-4 large-3 columns text-center ">
												  					<img class="schedule__header-speaker-image" src= "<?php echo get_stylesheet_directory_uri(); ?>/assets/img/speakers/speakers-mariangela.jpg">
												  				</div>
												  				<div class="medium-8 large-9 columns">
												  					<span class="schedule__header-title">Abordagem Clínica Neonatal e Pediátrica com Foco no Desenvolvimento dos Sistemas Respiratório e Sensório Motor</span>
												  					<span class="schedule__header-subtitle">Ministrante:  Mariangela Pinheiro de Lima, idealizadora e coordenadora do Método Reequilíbrio Toracoabdominal – RTA – Florianópolis/SC </span>
												  					<a class="button tiny schedule__header-more" data-open="biografia-mariangela">Conheça a palestrante</a>
												  				</div>
										  				  </div> <!--//row collapse-->
										  			</div> <!-- //schedule__header -->

													<div class="schedule__body">
													  	<div class="row">
													  		<div class="small-12 columns">
													  			<h5 class="schedule__body-title">Conteúdo do curso</h5>
																<ul class="schedule__body-list">
																	<li> O padrão flexor e seus benefícios para o desenvolvimento dos sistemas respiratório e sensório motor </li>
																	<li> Biomecânica Respiratória do Prematuro – repercussões no desenvolvimento sensório motor </li>
																	<li> O padrão de hipotonia da prematuridade – repercussões no desenvolvimento sensório motor </li>
																	<li> Padrões posturais da criança adoecida </li>
																	<li> Doenças Respiratórias Obstrutivas e Restritivas – Bloqueio Inspiratório e Alterações Posturais </li>
																	<li> Sequelas que dificultam o desenvolvimento sensório motor e pondero estatural </li>
																	<li> Deformidades Torácicas e Sinais de Esforço Muscular Ventilatório </li>
																	<li> Desenvolvimento de raciocínio clinico para:
																		<ul>
																			<li> posicionamento adequado </li>
																			<li> redução do esforço muscular ventilatório </li>
																			<li> remoção de secreções </li>
																			<li> reestruturação da geometria toracoabdominal para o desenvolvimento global do bebê e da criança. </li>
																		</ul>
																	</li>
																</ul>
															</div> <!-- // row -->
														</div> <!-- // row -->
													</div> <!-- schedule__body -->
										  </div>


										  <div class="container-tabs-content__panel container-tabs-content__panel--clear tabs-panel" id="schedule2">
										  			<div class="schedule__header">
										  				 <div class="row collapse">
												  				<div class="medium-4 large-3 columns text-center ">
												  					<img class="schedule__header-speaker-image" src= "<?php echo get_stylesheet_directory_uri(); ?>/assets/img/speakers/speakers-oacyveronesi.jpg">
												  				</div>
												  				<div class="medium-8 large-9 columns">
												  					<span class="schedule__header-title">O Bebê de Risco: Identificação e Intervenção através do Conceito Neuro Evolutivo</span>
												  					<span class="schedule__header-subtitle">Ministrante: Oacy Veronesi OTR/L, NDT/C – Chicago/USA  </span>
												  					 <a class="button tiny schedule__header-more"  data-open="biografia-oacy">Conheça a palestrante</a>
												  				</div>
										  				  </div> <!--//row collapse-->
										  			</div> <!-- //schedule__header -->

													<div class="schedule__body">
													  	<div class="row">
													  		<div class="small-12 columns">
													  				<h5 class="schedule__body-title">Conteúdo do curso</h5>
 																	<ol class="schedule__body-list">
																		<li> Desenvolvimento sensório motor típico e atípico </li>
																		<li> Sistemas sensoriais </li>
																		<li> Avaliação baseada no modelo CIF/ NDTA </li>
																		<li> Laboratório de facilitação </li>
																		<li> Demonstrações de tratamento com vídeo </li>
																		<li> Orientação aos pais </li>
																	</ol>
																	<h5 class="schedule__body-title">Objetivos do Curso</h5>
 																	<ul class="schedule__body-list">
																		<li> Identificar os marcos do desenvolvimento típico, sua variabilidade e os sinais de alto risco nas áreas sensorial, motora e neurológica </li>
																		<li> Utilizar o modelo CIF- Neuro Evolutivo para avaliação e planejamento de objetivos funcionais </li>
																		<li> Expor os participantes a algumas intervenções em laboratórios </li>
																		<li> Desenvolver o raciocínio clinico nas intervenções </li>
																		<li> Apresentar o modelo transacional de intervenção precoce de 0 a 3 anos e como aplicá-lo </li>
																	</ul>

  															</div> <!-- // row -->
														</div> <!-- // row -->
													</div> <!-- schedule__body -->
										  </div>


										   <div class="container-tabs-content__panel container-tabs-content__panel--clear tabs-panel" id="schedule3">

<div class="table-scroll table-schedule">
	 

<?php  
	if (get_field('acf_page_about_programacao_show') === TRUE) {

		echo the_field('acf_page_about_programacao');

		//echo the_field('acf_page_about_programacao'); 

	} else {   ?>
			<div style="text-align:center;padding: 100px 0;"> 
					<span style=" padding: 50px; display: inline-block; font-size: 30px; text-transform: uppercase; opacity: 0.5; font-weight: 100; ">Em breve</span>
			</div>
<?php  } ?>
 

 

 </div><!-- //table-scroll -->



 										 	</div> <!-- //container-tabs-content -->
							</div> <!-- //medium-10 medium-push-1  large-8 large-push-2 columns -->


 		</div> <!-- //large-10 large-pull-1 columns -->
	</div> <!-- //section__inner -->
</section>




<section id="localization" class="section-localization section-light" data-magellan-target="localization">
	<div class="section__inner">
			<div class="container-map">
				<div class="map__info">
					<div class="section__title-icon section__title-icon--light"> <i class="material-icons">location_on</i> </div>
					<h2 class="section__title section__title--light">Localização</h2>
					<div class="row collapse">
						<div class="small-12 columns">
							<span class="place-name">Hotel Bahia Othon Palace</span>
							<span class="place-address">Av. Oceânica, 2294 - Ondina, <br> Salvador - BA, 40170-010</span>
							<a class="place-view-in-map button" target="_blank" href="https://maps.google.com/maps?ll=-13.010189,-38.513071&z=16&t=m&hl=en-US&gl=BR&mapclient=embed&cid=11840385926297989253">Ver no Google maps</a>
						</div>
					</div>
		  		</div>

				 <div id="map"></div>
			</div>
	</div> <!-- //section__inner -->
  </section>






<section id="sponsors" class="section-sponsors" data-magellan-target="sponsors">
	<div class="section__inner">
			<div class="row">
				<div class="small-12 columns">
 					<h2 class="section__title">Realização e patrocínio</h2>
							<div class="medium-6 medium-pull-3 columns">
								 <div class="row small-up-3">
										  <div class="column">  <a href="http://www.escoladocorpo.com.br/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sponsors/brand-escoladocorpo.png" class="thumbnail" alt="imagem: Escola do corpo"></a> </div>
										  <div class="column">  <a href="http://rtaonline.com.br/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sponsors/brand-rta.png" class="thumbnail" alt="imagem: RTA"></a> </div>
										  <div class="column">  <a href="mailto:cuidadoglobal@gmail.com" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sponsors/brand-new-sponsor.png" class="thumbnail" alt="imagem: Seja um patrocinador"></a> </div>
								</div>
							</div>
				</div>
			</div>
	</div> <!-- //section__inner -->
</section>


<section id="booking" class="section-booking" data-magellan-target="booking">
	<div class="section__inner">
			<div class="row">
				<div class="small-12 columns">
 					<a href="<?php bloginfo('url'); ?>/inscricao" class="button large">Inscreva-se</a>
		 		</div>
			</div>
	</div> <!-- //section__inner -->
</section>




<!-- This is the first modal -->
<div class="reveal reveal-main" data-animation-in="fade-in" data-animation-out="fade-out" id="biografia-oacy" data-reveal>
  		<div class="reveal_header">
  			    <img class="schedule__header-speaker-image" src= "<?php echo get_stylesheet_directory_uri(); ?>/assets/img/speakers/speakers-oacyveronesi.jpg">
		  		<h1 class="reveal_title">Oacy Veronesi </h1>
		  		<p class="lead reveal_subtitle">OTR/L, NDT/C – Chicago/USA </p>
      	</div><!-- // reveal_header -->
  		<div class="reveal_content">
		  		<p> Oacy Veronesi graduou-se em Terapia Ocupacional pela Universidade de Medicina da Universidade de São Paulo, Brasil. </p>
		  		<p> É instrutora de Terapia Ocupacional no Conceito de Tratamento Neuroevolutivo/Bobath da Neurodevelopment Treatment Association dos Estados Unidos (NDTA) e ABRADIMENE do Brasil.  Fez sua formação no com o Dr. e Mrs. Bobath, com quem trabalhou em Londres, Inglaterra.   A sua formação em especialização no tratamento com bebês foi feita com a Fisioterapeuta Mary Quinton e Dra. E. Kong, em Bern, na Suíssa. </p>
				<p> Em 1981 fez parte da equipe de pesquisa clinica do Dr. Arnold Sameroff, PhD no Illinois Institute for the Study of Developmental Disabilities da University of Illinois, do primeiro modelo de intervenção precoce do Estado de Illinois. </p>
				<p> Atualmente reside e trabalha nos Estados Unidos, há mais de 25 anos.  Ministra cursos locais e internacionalmente no conceito NeuroEvolutivo/Bobath para o tratamento de bebês de alto risco e de crianças com paralisia cerebral e outras disfunções neurológicas. </p>
				<p> Em sua clínica Focus on Kids, em Glenview, Illinois, atende crianças nas áreas de fisioterapia, terapia ocupacional e terapia aquática.</p>
      	</div><!-- // reveal_content -->
    <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="reveal reveal-main" data-animation-in="fade-in" data-animation-out="fade-out" id="biografia-mariangela" data-reveal>
  		<div class="reveal_header">
  			<img class="schedule__header-speaker-image" src= "<?php echo get_stylesheet_directory_uri(); ?>/assets/img/speakers/speakers-mariangela.jpg">
  			<h1 class="reveal_title">Mariangela Pinheiro de Lima</h1>
  			<p class="lead reveal_subtitle">Idealizadora e coordenadora do Método Reequilíbrio Toracoabdominal - RTA – Florianópolis/S </p>
      	</div><!-- // reveal_header -->
  		<div class="reveal_content">
  			<p> Iniciou a carreira como professora da Pontifícia Universidade do Paraná, ensinando Fisioterapia Pediátrica e Fisioterapia Respiratória. Seu campo de atuação, durante sete anos, foram os hospitais pediátricos, Pequeno Príncipe e César Pernetta, na cidade de Curitiba. Esta experiência na pediatria e neonatologia vieram acompanhadas de uma necessidade de especialização no conceito de tratamento do Método Bobath, através do Curso Básico e do Baby Course. Suas grandes mestras foram Oacy Veronesi e Sherry Arndt. </p>
			<p> O grande interesse pela Fisioterapia Respiratória levou Mariangela à idealização e desenvolvimento do Método Reequilíbrio Tóracoabdominal (RTA) que tem sido ensinado aos fisioterapeutas de todo o Brasil nos últimos vinte e cinco anos. O Método RTA transformou a fisioterapia respiratória em uma prática mais humanizada e aprofundou os conceitos de biomecânica respiratória, traduzidos em um manuseio sutil e com grande resposta funcional. </p>
			<p> Ainda nos anos 80, começou a trabalhar com adultos, especialmente com alterações da postura e dor nas costas. Especializou-se em Reeducação Postural Global (RPG) e criou metodologia específica que engloba os conceitos de várias técnicas de Fisioterapia Global. Nos últimos 12 anos vem tratando, além de outros clientes, os que apresentam patologias da articulação do quadril, especialmente a Lesão Labral do Quadril. Desenvolveu o Método de Desimpactação do Quadril e, juntamente com sua equipe, tem alcançado grande sucesso na cura dos sintomas desta lesão. </p>
			<p> Há três anos, idealizou e realizou o projeto da Escola do Corpo, espaço destinado a avaliação e tratamento global do indivíduo, desde a prematuridade até todos os anos futuros. Ministra cursos de RTA, Fisioterapia Neonatal Global, Reeducação da Postura e do Movimento e de Desimpactação do Quadril. </p>
      	</div><!-- // reveal_content -->
   <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>




<?php get_footer(); ?>
