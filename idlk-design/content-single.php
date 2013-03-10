<?php
/**
 * @package IDLK Design
 * @since IDLK Design 1.0
 */
?>

		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php idlk_design_posted_on(); ?>
		</div><!-- .entry-meta -->


	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'idlk_design' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->



