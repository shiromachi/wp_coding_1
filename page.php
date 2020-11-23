<?php get_header(); ?>

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
            <?php 
              if ( has_post_thumbnail() ) {
	                    the_post_thumbnail();
                 }else{ ?>
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/no_image.png">
              <?php } ?>
        </div>
      </div>

<?php get_footer(); ?>