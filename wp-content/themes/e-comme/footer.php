<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package E_Comme
 */

?>
			
	</div><!-- #content -->
	
	<!-- Footer Start -->
	<?php 
	    $footer_widget  = array(
    		'name' => esc_html__( 'Footer Widget Area', 'e-comme' ),
    		'id' => 'footer-widget-area',
    		'description' => esc_html__( 'footer widget area', 'e-comme' ),
    		'before_widget' => '<div class="col-md-3 col-sm-6 footer-widget">',
    		'after_widget'  =>  '</div>',
    		'before_title'  =>  '<div class="row widget-heading"><h2>',
    		'after_title'   =>  '</h2></div>',
		);
	?>
<footer>
	<div class="container-fluid ec-footer">
		<div class="container">
			<div class="row ec-footer-widget">
				<?php	if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
            			<?php dynamic_sidebar( 'footer-widget-area'); ?>
				    <?php }else{ 
				        the_widget('WP_Widget_Calendar', 'title='.esc_attr__('Calendar', 'e-comme'), $footer_widget);
                		the_widget('WP_Widget_Categories', null, $footer_widget);
                		the_widget('WP_Widget_Pages', null, $footer_widget);
                		the_widget('WP_Widget_Archives', null, $footer_widget);
				    } ?>
			</div>
		</div>
	</div>
	<div class="container-fluid ec-footercopy">
		<div class="container">
			<div class="row ec-foots">
				<p>&copy; <?php echo esc_html(date('Y')).' '; bloginfo( 'name' ); ?> | <?php printf( esc_html__( 'Theme by %1$s', 'e-comme' ),  '<a href="'.esc_url('https://www.themefarmer.com').'" rel="designer">Theme Farmer</a>' ); ?></p>
			</div>
		</div>
	</div>
</footer>
<!-- Footer End -->

</div><!-- .wrapper -->
<?php wp_footer(); ?>
</body>
</html>
