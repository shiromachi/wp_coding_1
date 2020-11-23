    <?php get_header(); ?>

    <!-- contents start -->

    <div class='main-contents'>
      <div class='top-contents'>
        <!-- ここからslide画像の読み込み -->
        <div class='slider-content'>
          <ul class="bxslider">
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/sample1.jpg" alt="" width="100%" height="450px" ></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/sample2.jpg" alt="" width="100%" height="450px" ></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/sample3.jpg" alt="" width="100%" height="450px" ></li>
          </ul>
        </div>
        <!-- ここまでslide画像の読み込み -->
      </div>
      <div class='middle-contents'>
        <div class='sidebar-top'></div>
        <div class='middle-content'>
          <div class='m-content-title'>BLOG</div>
        </div>
      </div>
      <div class='bottom-contents'>
        <div class='sidebar-main'>
          <div class='sidebar-img'><img src="<?php echo get_template_directory_uri(); ?>/images/no_image.png" alt="" width="250px" height="250px"></div>
          <div class='sidebar-img'><img src="<?php echo get_template_directory_uri(); ?>/images/no_image.png" alt="" width="250px" height="250px"></div>
        </div>
        <div class='bottom-content'>
          <?php
		      if ( have_posts() ): ?>
      
		      	<?php while ( have_posts() ): the_post(); ?>
		         <h2>	<?php the_title(); ?></h2>
               <?php endwhile; ?>
		        <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- contents end -->

    <?php get_footer(); ?>
    