<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package E_Comme
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 home-blog"); ?>>
	<h2 class="entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
	<?php e_comme_post_meta(); ?>
	<?php if(has_post_thumbnail()): 
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>	
	<div class="img-thumbnail">
		<?php the_post_thumbnail('e-comme-fullwidth', array( 'class' => 'img-responsive' )); ?>
		<div class="overlay">
			<a class="ec-left" href="<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-chain"></i></a>
			<a class="ec-right" href="<?php echo $image[0]; ?>"><i class="fa fa-search"></i></a>
		</div>
	</div>
	<?php endif; ?>
	<div class="entry-summary"><?php the_excerpt(); ?></div>
	<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn blog-link"><?php _e('Read More','e-comme') ?></a>
</div><!-- #post-## -->
<div class="clearfix"></div>