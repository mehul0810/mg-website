<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Gutenbergtheme
 */

get_header(); ?>

	<main id="primary" class="site-main">
		<div class="container-medium">
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'webergpress' ), '<span>' . get_search_query() . '</span>' );
					?></h1>
			</header><!-- .page-header -->

			<div class="row">
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();
					?>
					<div class="col-4">
						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

						?>
					</div>
				<?php
				endwhile;
				?>
			</div>
			<?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</div>
	</main><!-- #primary -->

<?php
webergpress_bottom_newsletter();
get_footer();
