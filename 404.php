<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Gutenbergtheme
 */

get_header(); ?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="container-medium">
				<header class="page-header">
					<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/broken-heart.svg'; ?>"/>
					<h1 class="page-title"><?php esc_html_e( 'Oops! This page seems temporarily broken.', 'webergpress' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search or subscribe to a newsletter below?', 'webergpress' ); ?></p>
					<p><?php esc_html_e( ' I\'ll fix this page soon.', 'webergpress' ); ?></p>

					<?php get_search_form(); ?>

					<div class="row">
						<div class="col-4">
							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
						</div>
						<div class="col-4">
							<div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'webergpress' ); ?></h2>
								<ul>
									<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
									?>
								</ul>
							</div><!-- .widget -->
						</div>
						<div class="col-4">
							<?php

							/* translators: %1$s: smiley */
							$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'webergpress' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

							the_widget( 'WP_Widget_Tag_Cloud' );
							?>
						</div>
					</div>
				</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->

	</main><!-- #primary -->

<?php
webergpress_bottom_newsletter();
get_footer();
