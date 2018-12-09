<!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3><?php the_title(); ?></h3>
        </header>

        <div class="row">

         <?php
              // The Query
                  $args = array('post_type'=>'services');
              $the_query = new WP_Query( $args );

              // The Loop
              global $active;
              $active = 'active';
              while ( $the_query->have_posts() ) {                
                  $the_query->the_post();
                  get_template_part('content','services');
                  $active = '';
              }
              //Restore original Post data                    
              wp_reset_postdata();                
          ?>

        </div>

      </div>
    </section><!-- #services -->