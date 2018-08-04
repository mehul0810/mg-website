<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gutenbergtheme
 */

get_header(); ?>

	<main id="primary" class="site-main">
		<header class="page-header">
			<h1 class="page-title"><?php _e( 'Code Snippets', 'webergpress' ); ?></h1>
		</header><!-- .page-header -->
		<div class="snippets-list">
			<?php
			if ( have_posts() ) { ?>
				<ol>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						/**
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'code-snippets' );


					endwhile;
					?>
				</ol>

				<?php

				the_posts_navigation();

			} else {

				get_template_part( 'template-parts/content', 'none' );

			} ?>
		</div>

	</main><!-- #primary -->

<?php
webergpress_bottom_newsletter();
get_footer();
