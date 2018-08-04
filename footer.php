<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */

?>

<footer id="colophon" class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
	<div class="container-medium">
		<div class="row">
			<div class="col-7">
				<div class="site-info">
					<?php
					echo sprintf(
						/* translators: 1. CMS URL 2. CMS Name */
						__( 'Proudly powered by <a target="_blank" href="%1$s">%2$s</a>', 'webergpress' ),
						esc_url( __( 'https://wordpress.org/', '_s' ) ),
						esc_html__( 'WordPress', 'webergpress' )
					);
					?>
					<span class="sep"> | </span>
					<?php
					echo sprintf(
						/* translators: 1. Hosting URL 2. Hosting Name */
						__( 'Hosted with Speed on <a target="_blank" href="%1$s">%2$s</a>', 'webergpress' ),
						esc_url_raw( get_site_url() . '/recommends/flywheel-hosting/' ),
						esc_html__( 'FlyWheel', 'webergpress' )
					);
					?>
				</div><!-- .site-info -->
			</div>
			<div class="col-5">
				<div class="site-social">
					<ul>
						<li>
							<a href="https://facebook.com/mehulgohilindia/" target="_blank">
								<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/facebook.svg'?>"/>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/mehul_gohil0810/" target="_blank">
								<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/twitter.svg'?>"/>
							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/mehulgohilindia/" target="_blank">
								<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/linkedin.svg'?>"/>
							</a>
						</li>
						<li>
							<a href="https://profiles.wordpress.org/mehul0810/" target="_blank">
								<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/wordpress.svg'?>"/>
							</a>
						</li>
						<li>
							<a href="https://github.com/mehul0810/" target="_blank">
								<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/github.svg'?>"/>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url( '/feed/' ); ?>" target="_blank">
								<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/rss.svg'?>"/>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
