</main>
<!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <?php 
            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post(); 
                //
                get_template_part('content','footer');
                //
              } // end while
            } // end if
          ?>

        </div>
      </div>
    </div>

    
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/wow/wow.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo get_bloginfo('template_directory'); ?>/contactform/contactform.js"></script>


  <!-- Template Main Javascript File -->
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>

  <?php wp_footer(); ?>
</body>
</html>
