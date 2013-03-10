<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package IDLK Design
 * @since IDLK Design 1.0
 */
?>


	<h1 class="blue"><?php the_title(); ?></h1>


	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'idlk_design' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'idlk_design' ), '<span class="edit-link">', '</span>' ); ?>

