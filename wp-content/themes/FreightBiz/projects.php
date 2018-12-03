<!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title"><?php the_title(); ?></h3>
        </header>

        <div class="row portfolio-container">
          <?php
              // The Query
                  $args = array('post_type'=>'project','posts_per_page'=> -1);
              $the_query = new WP_Query( $args );

              // The Loop
              global $active;
              $active = 'active';
              while ( $the_query->have_posts() ) {                
                  $the_query->the_post();
                  get_template_part('content','projects');
                  $active = '';
              }
              //Restore original Post data                    
              wp_reset_postdata();                
          ?>

        </div>

      </div>
    </section><!-- #portfolio -->