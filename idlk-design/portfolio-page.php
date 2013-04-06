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

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h1 class="blue"><?php the_title();?></h1>
	<?php the_content();?>
	<?php endwhile; ?>

    <ul class="work-grid">
    <?php $temp_query = $wp_query; ?>
	<?php query_posts('category_name=Portfolio'); ?>
	<?php while (have_posts()) : the_post(); ?>	
      <li><a href="#<?php the_ID(); ?>" data-toggle="modal"><?php the_post_thumbnail('small'); ?></a><br />
	  <a href="#<?php the_ID(); ?>" data-toggle="modal"><?php the_title(); ?></a>
      </li>
	<?php endwhile; ?>
    </ul>
		
<?php $temp_query = $wp_query; ?>
<?php query_posts('category_name=Portfolio'); ?>
<?php while (have_posts()) : the_post(); ?>	

<!-- Modal -->
<div id="<?php the_ID(); ?>" class="modal hide fade" tabindex="-1" role="dialog">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 class="blue" id="myModalLabel"><?php the_title(); ?></h3>
  </div>
  <div class="modal-body">
	<?php the_content(); ?>
  </div>
</div>
<?php endwhile; ?>

		
	</div>
 </div>

<?php get_footer(); ?>