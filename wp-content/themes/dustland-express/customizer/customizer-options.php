<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library Demo
 */

function customizer_library_dustlandexpress_options() {

	// Theme defaults
	$primary_color = '#955cce';
	$secondary_color = '#7f18ce';
    
    $body_font_color = '#4F4F4F';
    $heading_font_color = '#5E5E5E';

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;

    
    // Layout Settings
    $section = 'kra-layout';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Layout Options', 'dustland-express' ),
        'priority' => '30'
    );
    
    $choices = array(
        'kra-header-layout-standard' => 'Standard Layout',
        'kra-header-layout-centered' => 'Centered Layout'
    );
    $options['kra-header-layout'] = array(
        'id' => 'kra-header-layout',
        'label'   => __( 'Header Layout', 'dustland-express' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'kra-header-layout-standard'
    );
    
    $options['kra-header-search'] = array(
        'id' => 'kra-header-search',
        'label'   => __( 'Show Search', 'dustland-express' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'Enable to a slogan for your site. This uses the site Tagline', 'dustland-express' ),
        'default' => 0,
    );
    $options['kra-show-header-top-bar'] = array(
        'id' => 'kra-show-header-top-bar',
        'label'   => __( 'Show Top Bar', 'dustland-express' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'This will show/hide the top bar in the header', 'dustland-express' ),
        'default' => 0,
    );
    
    // Upsell Button
    $options['kra-upsell-layout'] = array(
        'id' => 'kra-upsell-layout',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( 'Premium has custom settings for styling font, size and spacing of the site title and description<br /><br />As well as extra WooCommerce layout settings', 'dustland-express' ),
    );
    
    
    // Blog Settings
    $section = 'kra-slider';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Slider Options', 'dustland-express' ),
        'priority' => '35'
    );
    
    $choices = array(
        'kra-slider-default' => 'Default Slider',
        'kra-meta-slider' => 'Meta Slider',
        'kra-no-slider' => 'None'
    );
    $options['kra-slider-type'] = array(
        'id' => 'kra-slider-type',
        'label'   => __( 'Choose a Slider', 'dustland-express' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'kra-slider-default'
    );
    $options['kra-slider-cats'] = array(
        'id' => 'kra-slider-cats',
        'label'   => __( 'Slider Categories', 'dustland-express' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the ID\'s of the post categories you want to display in the slider. Eg: "13,17,19" (no spaces and only comma\'s).<br /><a href="https://kairaweb.com/documentation/setting-up-the-default-slider/" target="_blank"><b>Follow instructions here</b></a>', 'dustland-express' )
    );
    $options['kra-meta-slider-shortcode'] = array(
        'id' => 'kra-meta-slider-shortcode',
        'label'   => __( 'Slider Shortcode', 'dustland-express' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the shortcode given by meta slider.', 'dustland-express' )
    );
    
    // Upsell Button
    $options['kra-upsell-slider'] = array(
        'id' => 'kra-upsell-slider',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( 'Premium has extra slider settings', 'dustland-express' ),
    );


	// Colors
	$section = 'kra-styling';
    $font_choices = customizer_library_get_font_choices();

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Styling Options', 'dustland-express' ),
		'priority' => '38'
	);
    
	$options['kra-main-color'] = array(
		'id' => 'kra-main-color',
		'label'   => __( 'Main Color', 'dustland-express' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $primary_color,
	);
	$options['kra-main-color-hover'] = array(
		'id' => 'kra-main-color-hover',
		'label'   => __( 'Secondary Color', 'dustland-express' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $secondary_color,
	);
    
    $options['kra-body-font'] = array(
        'id' => 'kra-body-font',
        'label'   => __( 'Body Font', 'dustland-express' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_choices,
        'default' => 'Open Sans'
    );
    $options['kra-body-font-color'] = array(
        'id' => 'kra-body-font-color',
        'label'   => __( 'Body Font Color', 'dustland-express' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $body_font_color,
    );
    $options['kra-heading-font'] = array(
        'id' => 'kra-heading-font',
        'label'   => __( 'Headings Font', 'dustland-express' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_choices,
        'default' => 'Raleway'
    );
    $options['kra-heading-font-color'] = array(
        'id' => 'kra-heading-font-color',
        'label'   => __( 'Heading Font Color', 'dustland-express' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $heading_font_color,
    );
    
    $options['kra-custom-css'] = array(
        'id' => 'kra-custom-css',
        'label'   => __( 'Custom CSS', 'dustland-express' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( '', 'dustland-express'),
        'description' => __( 'Add custom CSS to your theme', 'dustland-express' )
    );
    
    
    // Blog Settings
    $section = 'kra-blog';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Blog Options', 'dustland-express' ),
        'priority' => '50'
    );
    
    $choices = array(
        'blog-post-side-layout' => 'Side Layout',
        'blog-post-top-layout' => 'Top Layout'
    );
    $options['kra-blog-layout'] = array(
        'id' => 'kra-blog-layout',
        'label'   => __( 'Blog Post Layout', 'dustland-express' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'blog-post-side-layout'
    );
    $options['kra-blog-title'] = array(
        'id' => 'kra-blog-title',
        'label'   => __( 'Blog Page Title', 'dustland-express' ),
        'section' => $section,
        'type'    => 'text',
        'default' => 'Blog'
    );
    $options['kra-blog-cats'] = array(
        'id' => 'kra-blog-cats',
        'label'   => __( 'Exclude Blog Categories', 'dustland-express' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the ID\'s of the post categories you\'d like to EXCLUDE from the Blog, enter only the ID\'s with a minus sign (-) before them, separated by a comma (,)<br />Eg: "-13, -17, -19"<br />If you enter the ID\'s without the minus then it\'ll show ONLY posts in those categories.', 'dustland-express' )
    );
    $choices = array(
        'blog-use-images-loop' => 'Post Images Carousel',
        'blog-use-featured-image' => 'Use the post featured image'
    );
    $options['kra-blog-list-image-type'] = array(
        'id' => 'kra-blog-list-image-type',
        'label'   => __( 'Blog List Image', 'dustland-express' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'blog-use-featured-image'
    );
    
    
    // Social Settings
    $section = 'kra-social';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Social Links', 'dustland-express' ),
        'priority' => '80'
    );
    
    $options['kra-social-email'] = array(
        'id' => 'kra-social-email',
        'label'   => __( 'Email Address', 'dustland-express' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['kra-social-facebook'] = array(
        'id' => 'kra-social-facebook',
        'label'   => __( 'Facebook', 'dustland-express' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['kra-social-twitter'] = array(
        'id' => 'kra-social-twitter',
        'label'   => __( 'Twitter', 'dustland-express' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['kra-social-instagram'] = array(
        'id' => 'kra-social-instagram',
        'label'   => __( 'Instagram', 'dustland-express' ),
        'section' => $section,
        'type'    => 'text',
    );
    // Upsell Button
    $options['kra-upsell-social'] = array(
        'id' => 'kra-upsell-social',
        'section' => $section,
        'type'    => 'upsell',
        'description' => __( 'Premium has more social network profiles', 'dustland-express' ),
    );
    
    
    // Site Text Settings
    $section = 'kra-website';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Website Text', 'dustland-express' ),
        'priority' => '50'
    );
    
    $options['kra-header-info-text'] = array(
        'id' => 'kra-header-info-text',
        'label'   => __( 'Header Info Text', 'dustland-express' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Call Us: 082 444 BOOM', 'dustland-express'),
        'description' => __( 'This is the text in the header', 'dustland-express' )
    );
    $options['kra-website-error-head'] = array(
        'id' => 'kra-website-error-head',
        'label'   => __( '404 Error Page Heading', 'dustland-express' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Oops! <span>404</span>', 'dustland-express'),
        'description' => __( 'Enter the heading for the 404 Error page', 'dustland-express' )
    );
    $options['kra-website-error-msg'] = array(
        'id' => 'kra-website-error-msg',
        'label'   => __( 'Error 404 Message', 'dustland-express' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'It looks like that page does not exist. <br />Return home or try a search', 'dustland-express'),
        'description' => __( 'Enter the default text on the 404 error page (Page not found)', 'dustland-express' )
    );
    $options['kra-website-nosearch-msg'] = array(
        'id' => 'kra-website-nosearch-msg',
        'label'   => __( 'No Search Results', 'dustland-express' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dustland-express'),
        'description' => __( 'Enter the default text for when no search results are found', 'dustland-express' )
    );

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_dustlandexpress_options' );
