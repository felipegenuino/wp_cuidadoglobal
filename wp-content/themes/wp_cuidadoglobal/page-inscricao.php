<?php get_header(); ?>



<div class="row">
	<div class="small-12 columns">
			 <a class="button-back" href="<?php bloginfo('url'); ?>"> <i class="material-icons">&#xE5C4;</i> <span class="text">Voltar para página inicial</span></a>
	</div> <!-- //small-12 columns -->
</div>


<section id="ticket" class="section-ticket">
	<div class="section__inner">

	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="row">
					<section class="section-ticket__page">
									<div class="row collapse">



					<div class="small-12 columns">
 							<header class="section-ticket__page-header">
 					 			<img data-interchange="[<?php echo get_stylesheet_directory_uri(); ?>/assets/img/background/banner-page.jpg, small], [<?php echo get_stylesheet_directory_uri(); ?>/assets/img/background/banner-page.jpg, medium], [<?php echo get_stylesheet_directory_uri(); ?>/assets/img/background/banner-page.jpg, large]">
 							</header>
 					</div> <!-- //small-12 columns -->




<?php  if (get_field('acf_page_latter_table_price_show') === TRUE) {  ?>
      <div class="small-12 columns">
            <header class="section-ticket__prices">
                  <div class="section-ticket__prices_content table-scroll">                
                      <?php the_field('acf_page_latter_table_price');  ?>
                  </div> <!-- //section-ticket__prices_content -->
            <a href="#" class="button section-ticket__prices_button" >  <?php the_field('acf_page_latter_table_price_button_name');  ?> </a>
            </header>
      </div>
 <?php  } ?>
 









				<div class="small-12 medium-4 columns section-ticket__page-content">
						<div class="section-ticket__page-content-inner">
								<div class="callout callout__informative">
								  <h5>Fique atento</h5>
								  <p>Informamos que as inscrições para os cursos pré evento serão aceitas somente para os participantes de todo o Encontro.  </p>
								   <p>Estes valores correspondem as inscrições efetuadas até 10 de maio de 2016, após essa data haverá reajuste.</p>
								</div>

								<h3>FORMAS DE PAGAMENTO</h3>
								<p><strong>PAGAMENTO A VISTA:</strong> depósito bancário - Banco do Brasil - Ag. 3420-7 C/C: 142109-3 - Cuidado Global LTDA – ME – CNPJ: 14.485.861/0001-11.</p>
								<p>	<strong>PAGAMENTO PARCELADO:</strong> após preenchimento da ficha de inscrição você receberá um e-mail com link direto do PagSeguro - Cuidado Global LTDA ME, lá você poderá escolher a melhor forma de parcelamento. Importante: será cobrada taxa de 2,5% para este serviço.</p>
								<p> O preenchimento da ficha de inscrição reserva sua pré-inscrição.
									A vaga será garantida somente após recebimento do pagamento integral ou da primeira parcela.  </p>
								<p> Envie o comprovante para <a href="mailto:cuidadoglobal@gmail.com">cuidadoglobal@gmail.com</a> para receber seu comprovante de matrícula e participação no Evento. </p>

								<hr>
 								 	<a class="list-booking__link button secondary tiny" href="mailto:cuidadoglobal@gmail.com"> <i class="material-icons md-light" style="vertical-align: middle;font-size: 18px;">&#xE0E1;</i> Fale com o organizador</a>


						</div> <!-- //section-ticket__page-content-inner -->
	   			</div> <!-- // columns -->

	   			<div class="small-12 medium-8 columns section-ticket__page-form" >
	   				<div class="section-ticket__page-form-inner">
 							<?php echo do_shortcode( '[contact-form-7 id="39" title="Cuidado Global - Formulário de pré-inscrição"]' ); ?>
	   				</div><!-- //section-ticket__page-form-inner -->
 	   			</div> <!-- // columns -->

 	   </div> <!-- // row collapse -->

 </section> <!-- // ticket-page -->

	</div> <!-- // row -->

 		</article>
	<?php endwhile; // End the loop ?>

	</div>
</div>

	</div> <!-- //section__inner -->
</section>








<div class="reveal large" id="tabela-inscricao-simposio" data-reveal>
  <h1>VALORES DE INSCRIÇÃO NO SIMPÓSIO</h1>
  <p class="lead">Idealizadora e coordenadora do Método Reequilíbrio Toracoabdominal – RTA – Florianópolis/S </p>
  <table>
   <tbody>
      <tr>
         <td>  Categorias  </td>
         <td>  Documentos exigidos para comprovação   </td>
         <td>  De 19/01/2016 até 21/03/2016 </td>
         <td>  De 22/03/2016 até 30/05/2016   </td>
         <td>  No local do evento  </td>
      </tr>
      <tr>
         <td> Diretoria Regional Conselho Fiscal </td>
         <td> ---- </td>
         <td colspan="3"> Verificar valor quando fizer a inscrição   </td>
      </tr>
      <tr>
         <td>
           Conferencista<br />
           Coordenador de Curso<br />
           Instrutor de Curso<br />
           Moderador<br />
           Palestrante
         </td>
         <td> ---- </td>
         <td colspan="3"> Verificar valor quando fizer a inscrições </td>
      </tr>
      <tr>
         <td> Profissionais Sócios da ASSOBRAFIR* </td>
         <td> Comprovante de sócio quite com a anuidade do ano vigente </td>
         <td> 510,00 </td>
         <td> 600,00 </td>
         <td> 690.00 </td>
      </tr>
      <tr>
         <td> Profissionais Não-sócios </td>
         <td> ---- </td>
         <td> 860,00 </td>
         <td> 970,00 </td>
         <td> 1.060,00 </td>
      </tr>
      <tr>
         <td> Estudantes de Graduação* </td>
         <td> Comprovante de matrícula fornecido por õrgão credenciado da instituição de origem. </td>
         <td> 370,00 </td>
         <td> 430,00 </td>
         <td> 500,00 </td>
      </tr>
   </tbody>
</table>

<em>
	OBS: As inscrições como “Profissionais Sócios da ASSOBRAFIR” que foram realizadas previamente durante o ano de 2015 e 2016 só serão efetivadas com o pagamento da anuidade do ano de 2016.
</em>

   <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div> <!-- //tabela-inscricao-simposio -->




<?php get_footer(); ?>
 
