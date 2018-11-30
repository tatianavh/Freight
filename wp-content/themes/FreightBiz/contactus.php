<!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3><?php the_title(); ?></h3>
          <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
        </div>

        <div class="row contact-info">
          <?php

            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post(); 
                //
               get_template_part('content','contactus');
                //
              } // end while
            } // 
              // // The Query
              //     $args = array('page'=>'contact-us');
              // $the_query = new WP_Query( $args );

              // // The Loop
              // global $active;
              // $active = 'active';
              // while ( $the_query->have_posts() ) {                
              //     $the_query->the_post();
              //     get_template_part('content','contactus');
              //     $active = '';
              // }
              //Restore original Post data                    
              wp_reset_postdata();                
          ?>
          
        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->
