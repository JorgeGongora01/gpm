<?php
/**
* @Theme Name	:	E-Comme
* @file         :	home-blog.php
* @package      :	e-comme
* @author       :	Theme Farmer
* @license      :	readme.txt
* @filesource   :	wp-content/themes/e-comme/templates/home-blog.php
*/

$theme_data = e_comme_get_theme_var();
?>
<!-- Home Blog Start -->
<div class="container-fluid ec-home-blog ec-space">
	<div class="container">
		<div class="row section-heading">
			<h2 class="section-title"><?php echo esc_html($theme_data['home_latest_blog_title']); ?></h2>
			<p class="section-description"><?php echo esc_html($theme_data['home_latest_blog_desc']); ?></p>
		</div>
		<div class="row ec-blog">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array( 'post_type' => 'post', 'paged'=>$paged, 'posts_per_page' => 3, 'ignore_sticky_posts' => 1, );	
				$post_type_data = new WP_Query( $args );
				while($post_type_data->have_posts()){
					$post_type_data->the_post();
					get_template_part( 'template-parts/content', 'home' );
				}
				wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<!-- Home Blog End -->