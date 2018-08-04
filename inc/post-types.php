<?php
/**
 * Post Types.
 */

function webergpress_init_post_types() {

	$snippet_labels = array(
		'name'                  => _x( 'Snippets', 'Snippets', 'webergpress' ),
		'singular_name'         => _x( 'Snippet', 'Snippet', 'webergpress' ),
		'menu_name'             => _x( 'Snippets', 'Snippets', 'webergpress' ),
		'name_admin_bar'        => _x( 'Snippet', 'Snippet', 'webergpress' ),
		'add_new'               => __( 'Add New', 'webergpress' ),
		'add_new_item'          => __( 'Add New Snippet', 'webergpress' ),
		'new_item'              => __( 'New Snippet', 'webergpress' ),
		'edit_item'             => __( 'Edit Snippet', 'webergpress' ),
		'view_item'             => __( 'View Snippet', 'webergpress' ),
		'all_items'             => __( 'All Snippets', 'webergpress' ),
		'search_items'          => __( 'Search Snippets', 'webergpress' ),
		'parent_item_colon'     => __( 'Parent Snippets:', 'webergpress' ),
		'not_found'             => __( 'No snippets found.', 'webergpress' ),
		'not_found_in_trash'    => __( 'No snippets found in Trash.', 'webergpress' ),
		'featured_image'        => _x( 'Snippet Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'webergpress' ),
		'set_featured_image'    => _x( 'Set Snippet Cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'webergpress' ),
		'remove_featured_image' => _x( 'Remove Snippet Cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'webergpress' ),
		'use_featured_image'    => _x( 'Use as Snippet Cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'webergpress' ),
		'archives'              => _x( 'Snippet archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'webergpress' ),
		'insert_into_item'      => _x( 'Insert into Snippet', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'webergpress' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Snippet', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'webergpress' ),
		'filter_items_list'     => _x( 'Filter Snippets list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'webergpress' ),
		'items_list_navigation' => _x( 'Snippets list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'webergpress' ),
		'items_list'            => _x( 'Snippets list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'webergpress' ),
	);

	$snippet_args = array(
		'labels'             => $snippet_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'code-snippets', 'with_front' => false ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' ),
	);

	register_post_type( 'code-snippets', $snippet_args );

}
add_action( 'init', 'webergpress_init_post_types' );


function webergpress_snippet_list_callback( $atts ) {

	$atts = shortcode_atts( array(
		'post_status'   => 'publish',
		'post_per_page' => 10,
	), $atts, 'snippets' );

	$args = array(
		'post_type'     => 'code-snippets',
		'post_status'   => $atts['post_status'],
		'post_per_page' => $atts['post_per_page'],
		'orderby'       => 'ID',
		'order'         => 'DESC',
	);

	$snippets = new WP_Query( $args );
	?>
	<div class="snippets-list">
		<?php
		if ( $snippets->have_posts() ) {
			?>
			<ol>
				<?php
				while ( $snippets->have_posts() ) {
					$snippets->the_post();
					?>
					<li>
						<p>
							<a href="<?php the_permalink(); ?>" target="_blank">
								<?php the_title(); ?>
							</a>
						</p>
					</li>
					<?php
				}

				/* Restore original Post Data */
				wp_reset_postdata();
				?>
			</ol>
			<?php
		} else {
			?>
			<p><?php esc_attr_e( 'No Snippets Found.', 'webergpress' ); ?></p>
			<?php
		}
		?>
	</div>
	<?php
}

add_shortcode( 'snippets', 'webergpress_snippet_list_callback' );
