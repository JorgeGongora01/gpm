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
	<h2 class="entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
	<?php e_comme_post_meta(); ?>
	<?php if(has_post_thumbnail()): ?>
	<div class="img-thumbnail">
		<?php the_post_thumbnail('e-comme-fullwidth', array( 'class' => 'img-responsive' )); ?>
	</div>
	<?php endif; ?>
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
</div><!-- #post-## -->
<div class="clearfix"></div>