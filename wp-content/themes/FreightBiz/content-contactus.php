<div class="row contact-info">

  <div class="col-md-3">
    <div class="contact-address">
      <i class="ion-ios-location-outline"></i>
      <h3>Address</h3>
      <address><?php the_field('address'); ?></address>
      <address><?php the_field('city'); ?></address>
    </div>
  </div>

  <div class="col-md-3">
    <div class="contact-phone">
      <i class="ion-ios-telephone-outline"></i>
      <h3>Phone</h3>
      <p><a href="tel:+155895548855"><?php the_field('phone'); ?></a></p>
    </div>
  </div>

  <div class="col-md-3">
    <div class="contact-phone">
      <i class="ion-ios-telephone-outline"></i>
      <h3>Mobile</h3>
      <p><a href="tel:+155895548855"><?php the_field('mobile'); ?></a></p>
    </div>
  </div>

  <div class="col-md-3">
    <div class="contact-email">
      <i class="ion-ios-email-outline"></i>
      <h3>Email</h3>
      <p><a href="mailto:info@example.com"><?php the_field('email'); ?></a></p>
    </div>
  </div>
</div>

<div class="form">
  <div id="sendmessage">Your message has been sent. Thank you!</div>
  <div id="errormessage"></div>
<!--   <form action="" method="post" role="form" class="contactForm">
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
  </form> -->
  <?php echo do_shortcode('[contact-form-7 id="156" title="Untitled"]') ?>
</div>