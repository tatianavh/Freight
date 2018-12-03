<div class="footer-content">

  <div class="footerlogo">
    <img src="<?php the_field('logo'); ?>" alt="">
  </div>

  <div class="footer-contact">

    <div><?php the_field('address'); ?></div>
    <div><?php the_field('city'); ?></div>
    <div><strong>Phone: </strong><a href="tel:"><?php the_field('phone'); ?></a></div>
    <div><strong>Mobile: </strong><a href="tel:"><?php the_field('mobile'); ?></a></div>
    <div><strong>Email: </strong> <?php the_field('email'); ?></div>
    <!-- <p>
      <?php the_field('address'); ?><br>
      <?php the_field('city'); ?><br>
      <strong>Phone:</strong> <?php the_field('phone'); ?><br>
      <strong>Mobile:</strong> <?php the_field('mobile'); ?><br>
      <strong>Email:</strong> <?php the_field('email'); ?><br>
    </p>
 -->
  </div>

</div>
  
