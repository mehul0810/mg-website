<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Gutenbergtheme
 */

if ( ! function_exists( 'webergpress_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function webergpress_posted_on() {
		$time_string = '<div class="published updated">%1$s <span>%2$s</span></div>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<div class="published">%1$s <span>%2$s</span></div><div class="updated">%3$s <span>%4$s</span></div>';
		}

		$posted_on = sprintf( $time_string,
			__( 'Published on', 'webergpress' ),
			esc_html( get_the_date() ),
			__( 'Updated on', 'webergpress' ),
			esc_html( get_the_modified_date() )
		);

		echo '<div class="dates">' . $posted_on . '</div>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'webergpress_author_meta' ) ) :
	/**
	 * Prints HTML with meta information for the author.
	 */
	function webergpress_author_meta() {

		$byline = sprintf(
			/* translators: %s: post author. */
			'<span class="author vcard"><a class="url fn n" href="%1$s">%2$s <span class="text">%3$s</span></a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_avatar( get_bloginfo( 'admin_email' ), '48' ),
			esc_html( get_the_author() )
		);

		echo '<div class="byline"> ' . $byline . '</div>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'webergpress_get_primary_category' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function webergpress_get_primary_category() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'webergpress' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links badge">%1$s</span>', $categories_list ); // WPCS: XSS OK.
			}
		}
	}
endif;

if ( ! function_exists( 'webergpress_get_tags' ) ) :
	/**
	 * Prints HTML with meta information for the tags and comments.
	 */
	function webergpress_get_tags() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ' ', 'list item separator', 'webergpress' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">%1$s</span>', $tags_list ); // WPCS: XSS OK.
			}
		}
	}

endif;

if ( ! function_exists( 'webergpress_leave_comment' ) ) :
	/**
	 * Prints HTML with meta information for the comments.
	 */
	function webergpress_leave_comment() {

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'webergpress' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'webergpress' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;
