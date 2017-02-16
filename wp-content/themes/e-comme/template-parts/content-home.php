<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package E_Comme
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class("col-md-4 home-blog"); ?>>
	<div class="row ec-blg">
		<h2 class="entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
		<?php if(has_post_thumbnail()): ?>
		<div class="img-thumbnail">
			<?php the_post_thumbnail('e-comme-home-thumb', array( 'class' => 'img-responsive' )); ?>
		</div>
		<?php endif; ?>
		<?php e_comme_post_meta(); ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn blog-link">
			<?php _e('Read More','e-comme') ?>
		</a>
	</div>
</div>

