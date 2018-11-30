<!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

         <?php
          // Carousel slider was moved to content-slide.php
              // The Query
                  $args = array('post_type'=>'slide');
              $the_query = new WP_Query( $args );

              // The Loop
              global $active;
              $active = 'active';
              while ( $the_query->have_posts() ) {                
                  $the_query->the_post();
                  get_template_part('content','slider');
                  $active = '';
              }
              //Restore original Post data                    
              wp_reset_postdata();                
          ?>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->