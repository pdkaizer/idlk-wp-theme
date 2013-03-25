<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package IDLK Design
 * @since IDLK Design 1.0
 */
?>

  <footer class="row">
     <div class="span3"><p style=margin-top:4px;>&copy; 2013 Izzy Kaizer</p></div>
     <div class="span2 offset6"><a href="http://www.linkedin.com/pub/izzy-kaizer/65/78b/580"><img src="<?php bloginfo('template_url'); ?>/images/linkedin-32x32.png" alt="Find me on LinkedIn"></a> <a href="http://twitter.com/izzy42290"><img src="<?php bloginfo('template_url'); ?>/images/twitter-32x32.png" alt="Find me on Twitter" style="margin-left:20px;"></a></div>
  </footer>


</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
	    $('.carousel').carousel({
	  		interval: 5000	
	  	})
	});
</script>
</body>
</html>

<?php wp_footer(); ?>

</body>
</html>