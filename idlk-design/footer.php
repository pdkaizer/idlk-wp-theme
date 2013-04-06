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

      <div class="span3 offset5 social">

     	 <a href="http://www.linkedin.com/pub/izzy-kaizer/65/78b/580"><div class="genericon genericon-linkedin-alt"></div></a> &nbsp;&nbsp; <a href="http://pinterest.com/izzy42290/"><div class="genericon genericon-pinterest-alt"></div></a>  &nbsp;&nbsp; <a href="http://twitter.com/izzy42290"><div class="genericon genericon-twitter"></div></a>  &nbsp;&nbsp; <a href="http://dribbble.com/izzy42290"><div class="genericon genericon-dribbble"></div></a> 
     </div>
     
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