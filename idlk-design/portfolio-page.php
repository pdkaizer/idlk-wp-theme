<?php
/**
 * Template Name: Portfolio page file
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

		
	</div>
 </div>

<?php get_footer(); ?>