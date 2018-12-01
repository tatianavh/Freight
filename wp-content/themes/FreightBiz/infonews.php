<section id="infornews">
  
  <div class="container">

    <div class="home-info-news">
      <div class="home-info">
        <?php the_content(); ?>
      </div>

      <div class="home-news">
        <div class="news">
           <div class="news-header"><a href="">Header For NEWS</a></div>
           <div class="news-block">
            <div class="news-image"><a href="">
              <img src="" alt="">
            </a>
            </div>

            <div class="news-content">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae officiis quaerat labore libero earum amet dolores neque aliquid, corporis asperiores soluta sapiente iure nostrum delectus nemo placeat? Sint blanditiis, accusamus!
            </div>

            <div class="news-bottom">
              <div class="news-date">12/DEC/2018</div>
              <div class="news-source"><a href="">Some source</a></div>
            </div>

           </div>     
        </div>
        <div class="news">
           <div class="news-header"><a href="">Header For NEWS</a></div>
           <div class="news-block">
            <div class="news-image"><a href="">
              <img src="" alt="">
            </a>
            </div>

            <div class="news-content">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae officiis quaerat labore libero earum amet dolores neque aliquid, corporis asperiores soluta sapiente iure nostrum delectus nemo placeat? Sint blanditiis, accusamus!
            </div>

            <div class="news-bottom">
              <div class="news-date">12/DEC/2018</div>
              <div class="news-source"><a href="">Some source</a></div>
            </div>

           </div>     
        </div>
        <div class="news">
           <div class="news-header"><a href="">Header For NEWS</a></div>
           <div class="news-block">
            <div class="news-image"><a href="">
              <img src="" alt="">
            </a>
            </div>

            <div class="news-content">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae officiis quaerat labore libero earum amet dolores neque aliquid, corporis asperiores soluta sapiente iure nostrum delectus nemo placeat? Sint blanditiis, accusamus!
            </div>

            <div class="news-bottom">
              <div class="news-date">12/DEC/2018</div>
              <div class="news-source"><a href="">Some source</a></div>
            </div>

           </div>     
        </div>
      </div>

      
    </div>


  </div>
</section>


<!-- <?php
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
        ?> -->