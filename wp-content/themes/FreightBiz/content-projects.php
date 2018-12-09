<?php 
  global $delay;

  if(isset($delay) == false){
    $delay = 0;
  }else{
    $delay = $delay + 0.2;
  }
?>

<div data-wow-delay="<?php echo $delay ?>s" class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
  <div class="portfolio-wrap">
    <figure>
      <div class="project-img img-fluid"  style="background-image:url(<?php the_field('photo')?>);">
      </div>
      <!-- <img src="img/portfolio/app1.jpg" class="img-fluid" alt=""> -->
      <a href="<?php the_field('photo')?>" data-lightbox="portfolio" data-title="<?php the_content()?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
      <a href="<?php the_field('link')?>" target="_blank" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
    </figure>

    <div class="portfolio-info">
      <h4 class="project-caption"><?php the_title(); ?></h4>
      <p><?php the_field('description'); ?></p>
    </div>
  </div>
</div>
