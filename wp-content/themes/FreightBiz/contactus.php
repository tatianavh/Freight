<!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3><?php the_title(); ?></h3>
          <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
        </div>
        
        <?php

          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post(); 
              //
             get_template_part('content','contactus');
              //
            } // end while
          } // 
            
            //Restore original Post data                    
            wp_reset_postdata();                
        ?>
         
      </div>
    </section><!-- #contact -->
