<?php
/**
 * Template Name: HomePage
 */

get_header();
?>
<main id="primary" class="site-main site-home">
	<div class="jumbotron">
		<div class="jumbotron-container">
			<div class="row">
				<div class="col-6">
					<div class="home-newsletter">
						<h1>Hey, I’m Mehul. <span>You will learn all about WordPress.</span></h1>
						<?php echo do_shortcode( '[mc4wp_form id="913"]' ); ?>
					</div>
				</div>
				<div class="col-6">
					<div class="hero-portrait">
						<?php the_post_thumbnail( 'full' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cornerstones">
		<div class="row">
			<div class="col-12">
				<div class="heading">
					<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/down-arrow.svg'; ?>" alt="<?php echo __( 'Start here', 'webergpress' ); ?>"/>
					<h2>Start Here</h2>
					<p>Useful Resources and Guides.</p>
				</div>
			</div>
			<div class="col-4">
				<div class="cornerstone">
					<?php $start_blog_text = esc_html__( 'Start your First WordPress Blog in ' ) . date( 'Y' ); ?>
					<a target="_blank" href="<?php echo esc_url( site_url( '/blog/start-blog/' ) ); ?>" title="<?php echo $start_blog_text; ?>">
						<h3>Start Blog</h3>
						<div class="image">
							<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/setup-blog.svg'; ?>" alt="<?php echo $start_blog_text; ?>"/>
						</div>
						<div class="desc">
							<p>Use my impressive <strong>6 step guide</strong> to easily start your first WordPress blog or website.</p>
						</div>
						<div class="go">
							<span class="dashicons dashicons-arrow-right-alt"></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-4">
				<div class="cornerstone">
					<?php $hosting_text = esc_html__( 'Try the Best Quality WordPress Hosting in ' ) . date( 'Y' ); ?>
					<a target="_blank" href="<?php echo esc_url( site_url( '/blog/best-wordpress-hosting/' ) ); ?>" title="<?php echo $hosting_text; ?>">
						<h3>Hosting</h3>
						<div class="image">
							<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/wordpress-hosting.svg'; ?>" alt="<?php echo $hosting_text; ?>"/>
						</div>
						<div class="desc">
							<p>Try out the <strong>fast</strong>, <strong>secure</strong>, and <strong>recommended</strong> WordPress hosting with <strong>awesome support</strong>.</p>
						</div>
						<div class="go">
							<span class="dashicons dashicons-arrow-right-alt"></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-4">
				<div class="cornerstone">
					<?php $seo_text = esc_html__( 'Search Engine Optimization in ' ) . date( 'Y' ); ?>
					<a target="_blank" href="<?php echo esc_url( site_url( '/blog/what-is-seo/' ) ); ?>" title="<?php echo esc_html( $seo_text ); ?>">
						<h3>SEO</h3>
						<div class="image">
							<img alt="<?php echo esc_html( $seo_text ); ?>" src="<?php echo esc_url_raw( get_template_directory_uri() . '/assets/dist/images/seo.svg' ); ?>"/>
						</div>
						<div class="desc">
							<p>Check my <strong>unique</strong> recommended <strong>strategies</strong> to <strong>improve SEO</strong> for your WordPress site.</p>
						</div>
						<div class="go">
							<span class="dashicons dashicons-arrow-right-alt"></span>
						</div>
					</a>
				</div>
			</div>
			<?php /*
			<div class="col-4">
				<div class="cornerstone">
					<a href="">
						<h3>Speed</h3>
						<div class="image">
							<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/speed.svg'; ?>"/>
						</div>
						<div class="desc">
							<p>Our recommended steps, plugins and strategies for better WordPress SEO.</p>
						</div>
						<div class="go">
							<span class="dashicons dashicons-arrow-right-alt"></span>
						</div>
					</a>
				</div>
			</div>
			*/ ?>
			<div class="col-4">
				<div class="cornerstone">
					<?php $security_text = esc_html__( 'Best Security Tips & Tricks for your WordPress site in ' ) . date( 'Y' ); ?>
					<a target="_blank" href="<?php echo esc_url( site_url( '/blog/wordpress-security/' ) ); ?>" title="<?php echo $security_text; ?>">
						<h3>Security</h3>
						<div class="image">
							<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/wordpress-security.svg'; ?>" alt="<?php echo $security_text; ?>" />
						</div>
						<div class="desc">
							<p>Implement my <strong>tips and tricks</strong> to <strong>secure</strong> your WordPress site like Fort Knox.</p>
						</div>
						<div class="go">
							<span class="dashicons dashicons-arrow-right-alt"></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-4">
				<div class="cornerstone">
					<?php $guide_text = esc_html__( 'Checkout my hand-crafted developer guides for ' ) . date( 'Y' ); ?>
					<a target="_blank" href="<?php echo esc_url( site_url( '/developer-guide/' ) ); ?>" title="<?php echo $guide_text; ?>">
						<h3>Developer Guide</h3>
						<div class="image">
							<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/developer-guide.svg'; ?>" alt="<?php echo $guide_text; ?>"/>
						</div>
						<div class="desc">
							<p>Checkout my <strong>essential</strong> list of useful <strong>guides</strong> hand-crafted for developers.</p>
						</div>
						<div class="go">
							<span class="dashicons dashicons-arrow-right-alt"></span>
						</div>
					</a>
				</div>
			</div>
			<?php /*
			<div class="col-4">
				<div class="cornerstone">
					<a href="">
						<h3>Link Building</h3>
						<div class="image">
							<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/link-building.svg'; ?>"/>
						</div>
						<div class="desc">
							<p>Our recommended steps, plugins and strategies for better WordPress SEO.</p>
						</div>
						<div class="go">
							<span class="dashicons dashicons-arrow-right-alt"></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-4">
				<div class="cornerstone">
					<a href="">
						<h3>Maintenance</h3>
						<div class="image">
							<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/maintenance.svg'; ?>"/>
						</div>
						<div class="desc">
							<p>Our recommended steps, plugins and strategies for better WordPress SEO.</p>
						</div>
						<div class="go">
							<span class="dashicons dashicons-arrow-right-alt"></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-4">
				<div class="cornerstone">
					<a href="">
						<h3>Improve CTR</h3>
						<div class="image">
							<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/click-through-rate.svg'; ?>"/>
						</div>
						<div class="desc">
							<p>Our recommended steps, plugins and strategies for better WordPress SEO.</p>
						</div>
						<div class="go">
							<span class="dashicons dashicons-arrow-right-alt"></span>
						</div>
					</a>
				</div>
			</div>
 */ ?>
			<div class="col-4">
				<div class="cornerstone">
					<?php $snippet_text = __( 'Useful Code Snippets for Developers', 'webergpress' ); ?>
					<a href="<?php echo esc_url( site_url( '/code-snippets/' ) ); ?>" title="<?php echo $snippet_text; ?>">
						<h3>Code Snippets</h3>
						<div class="image">
							<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/code-snippets.svg'; ?>" alt="<?php echo $snippet_text; ?>"/>
						</div>
						<div class="desc">
							<p>Take a look at my <strong>essential</strong> list of useful <strong>code snippets</strong> hand-crafted for developers.</p>
						</div>
						<div class="go">
							<span class="dashicons dashicons-arrow-right-alt"></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php
	$args = array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 5,
		'order'          => 'DESC',
		'orderby'        => 'date',
	);

	$posts = new WP_Query( $args );
	if ( $posts->have_posts() ) {
		$post_count = 1;
		?>
		<div class="home-blog">
			<div class="row">
				<div class="col-12">
					<div class="heading">
						<h2><?php esc_html_e( 'Recent Articles', 'werbergpress' ); ?></h2>
						<p><?php esc_html_e( 'directly from the blog.', 'werbergpress' ); ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
				while ( $posts->have_posts() ) {
					$posts->the_post();

					if ( 1 === $post_count ) {
						?>
						<div class="col-7">
							<article class="latest">
								<div class="image">
									<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail( 'home-large' );
									} else {
										?>
										<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/fallback-image.jpg' ?>"
												alt="No Image Found!"/>
										<?php
									}
									?>
								</div>
								<div class="date"><?php the_modified_date(); ?></div>
								<h3>
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>
								<div class="excerpt">
									<?php the_excerpt(); ?>
								</div>
							</article>
						</div>
						<?php
					} else {
						?>
						<div class="col-5">
							<article class="small">
								<div class="row">
									<div class="col-3">
										<div class="image">
											<?php
											if ( has_post_thumbnail() ) {
												the_post_thumbnail( 'home-small' );
											} else {
												?>
												<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/fallback-image.jpg' ?>"
														alt="No Image Found!"/>
												<?php
											}
											?>
										</div>
									</div>
									<div class="col-9">
										<h3>
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</h3>
										<div class="date"><?php the_modified_date(); ?></div>
									</div>
								</div>
							</article>
						</div>
						<?php
					} // End if().
					$post_count ++;
				} // End while().
				?>
				<div class="more">
					<a href="/blog" class="button button-secondary">View Blog</a>
				</div>
			</div>
		</div>
		<?php
	} // End if().
	?>
</main>
<?php webergpress_bottom_newsletter(); ?>
<?php get_footer(); ?>
