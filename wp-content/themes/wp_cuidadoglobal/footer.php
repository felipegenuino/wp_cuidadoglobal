  <footer class="footer-main">
  	<div class="row">
  		<div class="small-12 columns">
  			<p class="footer__about"> <a href="<?php bloginfo('url'); ?>"><strong class="footer__about--name">Cuidado Global</strong> </a>  <span class="footer__about--tagline">cuidadoglobal@gmail.com</span></p>
  		</div>
  	</div>
  </footer>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/what-input/what-input.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/foundation-sites/dist/foundation.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/libs/motion-ui/dist/motion-ui.min.js"></script>
 	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHSH1flN71IsLrMCh9oen0gF6UPhohCb8 &libraries=visualization&callback=initMap"> </script>
 	<!-- script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/app.js"></script>


<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3tMQp5sIz7HoyFzE9v5vVD7cheCNR2mY";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->

<?php wp_footer(); ?>

</body>
</html>
