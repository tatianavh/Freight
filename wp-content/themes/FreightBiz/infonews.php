<section id="infornews">
  
  <div class="container">

    <div class="home-info-news">
      <div class="home-info">
        <?php the_content(); ?>
      </div>

      <div class="home-news">
         <?php
              // The Query
                  $args = array('post_type'=>'news');
              $the_query = new WP_Query( $args );

              // The Loop
              global $active;
              $active = 'active';
              while ( $the_query->have_posts() ) {                
                  $the_query->the_post();
                  get_template_part('content','infornews');
                  $active = '';
              }
              //Restore original Post data                    
              wp_reset_postdata();                
          ?>
       
      </div>
    </div>
  </div>
</section>

