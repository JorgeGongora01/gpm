<?php
function e_comme_get_theme_var() {
	
	$slide_one_id   = get_theme_mod('e_comme_slider_one', 0);
	$slide_two_id   = get_theme_mod('e_comme_slider_two', 0);
	$slide_three_id = get_theme_mod('e_comme_slider_three', 0);

	if($slide_one_id){
		$slide_one_image = wp_get_attachment_image_src(get_post_thumbnail_id($slide_one_id), 'full');
		$slide_one_image = $slide_one_image[0];
	}else{
		$slide_one_image = get_template_directory_uri() . '/images/50.jpg';
	}
	if($slide_two_id){
		$slide_two_image = wp_get_attachment_image_src(get_post_thumbnail_id($slide_two_id), 'full');
		$slide_two_image = $slide_two_image[0];
	}else{
		$slide_two_image = get_template_directory_uri() . '/images/2.jpg';
	}
	if($slide_three_id){
		$slide_three_image = wp_get_attachment_image_src(get_post_thumbnail_id($slide_three_id), 'full');
		$slide_three_image = $slide_three_image[0];
	}else{
		$slide_three_image = get_template_directory_uri() . '/images/13.jpg';
	}

	$e_comme_theme_data = array(

		'social_link_open_in_new_tab' => get_theme_mod('e_comme_social_link_open_in_new_tab', true),
		'social_link_facebook'        => get_theme_mod('e_comme_social_link_facebook', ''),
		'social_link_google'          => get_theme_mod('e_comme_social_link_google', ''),
		'social_link_youtube'         => get_theme_mod('e_comme_social_link_youtube', ''),
		'social_link_twitter'         => get_theme_mod('e_comme_social_link_twitter', ''),
		'social_link_linkedin'        => get_theme_mod('e_comme_social_link_linkedin', ''),
		'top_email'                   => get_theme_mod('e_comme_top_email', ''),
		'top_phone'                   => get_theme_mod('e_comme_top_phone', ''),

		'hide_slider'				  => get_theme_mod('e_comme_hide_slider', false),
		'slide_1'                     => get_post($slide_one_id),
		'slide_2'                     => get_post($slide_two_id),
		'slide_3'                     => get_post($slide_three_id),

		'slider_image_one'            => $slide_one_image,
		'slider_image_two'            => $slide_two_image,
		'slider_image_three'          => $slide_three_image,

		'slide_button_text'           => get_theme_mod('e_comme_slide_button_text', __('Click To Begin', 'e-comme')),
		'slide_button_link'           => get_theme_mod('e_comme_slide_button_link', ''),

		
		'home_latest_blog_title'      => get_theme_mod('e_comme_home_latest_blog_title', __('Latest News', 'e-comme')),
		'home_latest_blog_desc'       => get_theme_mod('e_comme_home_latest_blog_desc', __('Be updated with latest news', 'e-comme')),

		'home_cta_title'              => get_theme_mod('e_comme_home_cta_title', __('Call Out Section', 'e-comme')),
		'home_cta_desc'               => get_theme_mod('e_comme_home_cta_desc', __('We are a group of passionate designers and developers who really love to create awesome WordPress themes & support.', 'e-comme')),
		'home_cta_one_url'            => get_theme_mod('e_comme_home_cta_one_url', '#'),
		'home_cta_one_text'			  => get_theme_mod('e_comme_home_cta_one_text', __('Register Now','e-comme')),
		'home_cta_two_url'            => get_theme_mod('e_comme_home_cta_two_url', '#'),
		'home_cta_two_text'			  => get_theme_mod('e_comme_home_cta_two_text', __('View Details','e-comme')),
		
		'home_recent_product_title'	  => get_theme_mod('e_comme_home_recent_product_title', __('Latest In Products', 'e-comme')),
		'home_recent_product_desc'	  => get_theme_mod('e_comme_home_recent_product_desc', __('See what is new in latest products', 'e-comme')),
		'home_sale_product_title'	  => get_theme_mod('e_comme_home_sale_product_title', __('Products On Sale', 'e-comme')),
		'home_sale_product_desc'	  => get_theme_mod('e_comme_home_sale_product_desc', __('Grab Offer quick its for few hours only', 'e-comme')),			
		
	);

	return $e_comme_theme_data;
}

?>