<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package E_Comme
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		if ( is_single() ) {
			the_title( '<h2 class="entry-title">', '</h2>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
	?>
	<?php if ( 'post' === get_post_type() ) e_comme_post_meta(); ?>
	<?php if(has_post_thumbnail()): ?>
	<div class="img-thumbnail">
		<?php the_post_thumbnail('e-comme-fullwidth', array( 'class' => 'img-responsive' )); ?>
		<?php if ( is_single() ): 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );	 ?>
		<div class="overlay">
			<a class="ec-left" href="<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-chain"></i></a>
			<a class="ec-right" href="<?php echo $image[0]; ?>"><i class="fa fa-search"></i></a>
		</div>
		<?php endif; ?>
	</div>
	<?php endif; ?>
	<?php if ( is_single() ): ?>
	<div class="entry-content clearfix">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'e-comme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'e-comme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
</div><!-- #post-## -->
<div class="clearfix"></div>
