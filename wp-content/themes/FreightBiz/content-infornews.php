
 <div class="news">
   <div class="news-header"><a href="<?php the_field('link'); ?>" target="_blank"><?php the_field('header'); ?></a></div>
   <div class="news-block">
    <div class="news-image"><a href="<?php the_field('link'); ?>" target="_blank">
      <img src="<?php the_field('image'); ?>" alt="">
    </a>
    </div>

    <div class="news-content"><?php the_content(); ?></div>

    <div class="news-bottom">
      <div class="news-date"><?php the_field('date'); ?></div>
      <div class="news-source"><a href="<?php the_field('source'); ?> " target="_blank"><?php the_title(); ?></a></div>
    </div>

   </div>     
</div>