<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package E_Comme
 */

?>
<div id="secondary" class="col-md-3 ec-sidebar" role="complementary">
<?php
if (is_active_sidebar( 'sidebar-widget-area' ) ) {
	 dynamic_sidebar( 'sidebar-widget-area' ); 
}else{

	$args = array(
		'name'          => esc_html__( 'Sidebar', 'e-comme' ),
		'id'            => 'sidebar-widget-area',
		'description'   => __('Sidebar Widget Area', 'e-comme' ),
		'before_widget' => '<div id="%1$s" class="col-md-12 sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="row widget-heading"><h2>',
		'after_title'   => '</h2></div>',
	);
	the_widget('WP_Widget_Calendar', 'title='.esc_html__('Calendar', 'e-comme'), $args);
	the_widget('WP_Widget_Search', 'title='.esc_html__('Search', 'e-comme'), $args);
	the_widget('WP_Widget_Archives', null, $args);
	the_widget('WP_Widget_Recent_Posts', null, $args);
	the_widget('WP_Widget_Categories', null, $args);
	the_widget('WP_Widget_Tag_Cloud', null, $args);

}
?>
</div><!-- #secondary -->	
