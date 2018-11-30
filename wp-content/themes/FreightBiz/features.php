

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <?php
              // The Query
                  $args = array('post_type'=>'feature');
              $the_query = new WP_Query( $args );

              // The Loop
              global $active;
              $active = 'active';
              while ( $the_query->have_posts() ) {                
                  $the_query->the_post();
                  get_template_part('content','features');
                  $active = '';
              }
              //Restore original Post data                    
              wp_reset_postdata();                
          ?>

         
        </div>

        
      </div>
    </section><!-- #featured-services -->



