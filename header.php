<?php
/**
 * ヘッダーテンプレート
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/style.css" />
	  <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/jquery.bxslider.css" type="text/css" />
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.bxSlider.min.js"></script>
     <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class='header-contents'>
        <div class='header-left'>
          <div class='title-logo'>
            <img src="<?php echo get_template_directory_uri(); ?>/images/main_logo.png" alt="" width="200px" height="200px">
          </div>
        </div>
        <div class='header-right'>
          <div class='header-right-content'>
            <div class='text'>営業時間 10:00〜18:00</div>
            <div class='text'>TEL 0795-XXXX-XXXX</div>
          </div>
          <div class='navbar'>
            <ul class='nav-lists'>
              <?php wp_list_pages('title_li='); ?>
            </ul>
          </div>
        </div>
      </div>
    </header>