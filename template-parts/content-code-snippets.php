<?php
/**
 * Template part for displaying posts on blog page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WebergPress
 */
?>
<li>
	<p>
		<a href="<?php the_permalink(); ?>" target="_blank">
			<?php the_title(); ?>
		</a>
	</p>
</li>
