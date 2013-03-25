<?php
/**
 * Template Name: Home page file
 *
 * @package IDLK Design
 * @since IDLK Design 1.0
 */

get_header(); ?>

<div class="row page">
    <div class="span7 offset3">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>


<?php wp_reset_query(); ?>

<div id="myCarousel" class="carousel slide">
       <div class="carousel-inner">
        <?php 
         $the_query = new WP_Query(array(
          'post_type' => 'Home page slider', 
          'posts_per_page' => 1, 
          )); 
         while ( $the_query->have_posts() ) : 
         $the_query->the_post();
        ?>
           <div class="item active">
            <?php the_content(); ?>
           </div><!-- item active -->
        <?php 
         endwhile; 
         wp_reset_postdata();
        ?>
        <?php 
         $the_query = new WP_Query(array(
          'post_type' => 'Home page slider',  
          'offset' => 1 
          )); 
         while ( $the_query->have_posts() ) : 
         $the_query->the_post();
        ?>
           <div class="item">
            <?php the_content(); ?>
           </div><!-- item -->
        <?php 
         endwhile; 
         wp_reset_postdata();
        ?>
       </div><!-- carousel-inner -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div><!-- #myCarousel -->

  </div>
 </div>


<?php get_footer(); ?>