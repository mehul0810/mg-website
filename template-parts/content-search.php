<?php
/**
 * Template part for displaying posts on blog page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WebergPress
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="featured-image">
		<?php
		if ( has_post_thumbnail() ) :
			the_post_thumbnail( 'medium' );
		endif;
		?>
	</div><!-- .entry-meta -->
	<header class="entry-header">
		<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
	</header><!-- .entry-header -->

	<div class="desc">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
