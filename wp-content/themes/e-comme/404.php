<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package E_Comme
 */

get_header(); ?>
<!-- Breadcum Start -->
<?php e_comme_title_trail(); ?>
<!-- Breadcum End -->
<div class="container-fluid">
	<!-- Left Sidebar Start -->
	<div class="container">
		<div class="col-md-12 cp-error">
				<section class="error-404 not-found">
					<div class="col-md-12 page-header error">
							<h1>40<span class="grey">4</span></h1>
							<h2><span class="fa fa-exclamation-circle"></span><?php _e('ERROR','e-comme'); ?></h2>
							<h3><?php _e('Page cannot be found','e-comme'); ?></h3>
							<p><?php _e('The Page you requested is not be found. This could be spelling error in the url.','e-comme'); ?></p>
							<a href="<?php echo esc_url(home_url()); ?>" class="btn"><?php _e('Go back to homepage','e-comme'); ?></a>
					</div><!-- .page-header -->	
				</section><!-- .error-404 -->
		</div><!-- #primary -->
	</div>
</div>
<?php
get_footer();
