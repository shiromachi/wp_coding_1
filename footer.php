
<?php
/**
 * フッターテンプレート
 */

?>

<footer>
      <div class='footer'>
        <div class='footer-left'>
          <ul class='bottom-lists'>
            <li class='bottom-list'>TEXT</li>
            <li class='bottom-list'>TEXT</li>
            <li class='bottom-list'>TEXT</li>
            <li class='bottom-list'>TEXT</li>
          </ul>
        </div>
        <div class='footer-right'>
          <div><iframe class='map' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51821.21370556439!2d139.7363884334508!3d35.730501109579045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188dc29230686b%3A0x88d3096cc309a9b3!2z55Sw56uv6aeF!5e0!3m2!1sja!2sjp!4v1605817390750!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
        </div>
      </div>
	    <?php wp_footer(); ?>
	    <script type="text/javascript">
         jQuery(function($){
           jQuery('.bxslider').bxSlider({
              controls:false,
              auto:true,
              speed:500,
              minSlides: 3,
            });
         });
       </script>
    </footer>
  </body>
</html>