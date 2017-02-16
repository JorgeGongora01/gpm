<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package E_Comme
 */

/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function e_comme_post_meta() {

	
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', 'e-comme' ),
		'<li class="ec-time"><i class="fa fa-clock-o"></i><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a></li>'
	);
	

	$byline = sprintf(
		esc_html_x( ' %s' , 'post author', 'e-comme' ),
		'<li class="ec-user"><i class="fa fa-user"></i><span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span></li>'
	);

	echo '<ul class="blog-detail">' . $byline . $posted_on;
	if (! post_password_required() && comments_open()) {
		echo '<li class="ec-comment"><i class="fa fa-comment-o"></i>';
		comments_popup_link( esc_html__( '0 comment', 'e-comme' ), esc_html__( '1 Comment', 'e-comme' ), esc_html__( '% Comments', 'e-comme' ) );
		echo '</li>';
	}
	echo '</ul>'; // WPCS: XSS OK.

	if ( 'post' === get_post_type() ) {
		echo '<ul class="blog-cats">';
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', ' ', '');
		if ( $tags_list ) {
			printf( '<li class="ec-tags"><i class="fa fa-tag"></i>' . esc_html('%1$s') . ' </li>', $tags_list ); // WPCS: XSS OK.
		}
		
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( ' ',' ' );
		if ( $categories_list && e_comme_categorized_blog() ) {
			printf( '<li class="ec-category"><i class="fa fa-folder"></i> ' . esc_html('%1$s') . ' </ul>', $categories_list ); // WPCS: XSS OK.
		}
		echo '</ul>';
	}
		
	?>
	<?php

	
}



/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function e_comme_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'e_comme_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'e_comme_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so e_comme_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so e_comme_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in e_comme_categorized_blog.
 */
function e_comme_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'e_comme_categories' );
}
add_action( 'edit_category', 'e_comme_category_transient_flusher' );
add_action( 'save_post',     'e_comme_category_transient_flusher' );
