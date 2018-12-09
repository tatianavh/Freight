 <?php 
  global $delay;

  if(isset($delay) == false){
    $delay = 0;
  }else{
    $delay = $delay + 0.2;
  }
?>

 <div data-wow-delay="<?php echo $delay ?>s" class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
 	<div class="service-item">
 		<div class="service-heading">
		<h4 class="title"><?php the_title(); ?></h4>
		 </div>

	    <div class="service-body">
	    	<div class="service-img"  style="background-image:url(<?php the_field('icon')?>);">
	    	</div>
	    	<div class="description"><?php the_content(); ?></div>
	    </div>
 	</div>
    
    
  </div>

  