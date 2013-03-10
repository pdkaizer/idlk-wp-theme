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

<?php 
    query_posts(array( 
        'post_type' => 'Home page slider', 
    ) );  
?>

	<div id="myCarousel" class="carousel slide">
      <!-- Carousel items -->
      <div class="carousel-inner">
      <?php while (have_posts()) : the_post(); ?>
        <div class="active item"><?php the_content(); ?></div>
       <?php endwhile;?>
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>

	</div>
</div>


<?php get_footer(); ?>