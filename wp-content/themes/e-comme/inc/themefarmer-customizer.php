<?php
/**
 * E-Comme Theme Customizer.
 *
 * @package E_Comme
 */


function e_comme_upgrade_control($wp_customize) {

		class E_Comme_Page_Dropdown_Control extends WP_Customize_Control {

			public function render_content() {
				$pages = get_pages(array('hide_empty' => false));
				if (!empty($pages)): ?>
	            <label>
	              	<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	              	<select <?php $this->link();?>>
	                <option value="0"><?php esc_html_e('Select Page', 'e-comme');?></option>
	              	<?php
						foreach ($pages as $page):
							printf('<option value="%s" %s>%s</option>',
								$page->ID,
								selected($this->value(), $page->ID, false),
								$page->post_title
							);
						endforeach;
					?>
	              	</select>
	            </label>
	          	<?php
				endif;
			}
		}

		class E_Comme_Pro_Customize_Control extends WP_Customize_Control {

			public function render_content() {
				?>
	            <div class="theme-farmer-pro">
	              <div class="pro-vesrion">
	                <div class="">
	                  <img src="<?php echo get_template_directory_uri() . '/screenshot.png'; ?>" />
	                </div>
	                <?php _e('The Pro Version gives you more opportunities to enhance your site and business. In order to create effective online presence one have to showcase their wide range of products, have to use contact us enquiry form, have to make effective about us page, have to introduce team members, etc etc . The pro version will give it all. Buy the pro version and give us a chance to serve you better. ', 'e-comme');?>
	              </div>
	              <a href="<?php echo esc_url('https://www.themefarmer.com/product/e-comme-pro/'); ?>" target="_blank" class="cdns-upgrade" id="cdns-upgrade-pro"><?php _e('UPGRADE  TO PRO ', 'e-comme');?></a>
	            </div>
	          <?php
			}

		}

		class E_Comme_Slider_Note_Customize_Control extends WP_Customize_Control {

			public function render_content() {
				?>
				<div class="slider-notes">
						<?php _e('INFO : Create page with featured image to show in select slide dropdown', 'e-comme');?>
				</div>
				<?php
			}

		}

	

	$wp_customize->add_section('e_comme_upgarde_pro_section', array(
		'title'    => __('UPGRADE TO PRO VERSION', 'e-comme'),
		'priority' => 1000,
		// 'panel'    => 'e_comme_homepage_options',
	));

	$wp_customize->add_setting('upgrade_to_pro', array(
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'e_comme_sanitize_html',
	));
	$wp_customize->add_control(new E_Comme_Pro_Customize_Control($wp_customize, 'upgrade_to_pro', array(
		'label'   => __('Discover E-Comme Pro', 'e-comme'),
		'section' => 'e_comme_upgarde_pro_section',
		'setting' => 'upgrade_to_pro',
	)));

}

function e_comme_register_customizer_control($wp_customize) {
	

	
	$wp_customize->add_panel('e_comme_homepage_options', array(
		'priority'    => 1,
		'capability'  => 'edit_theme_options',
		'title'       => __('Home Page Options', 'e-comme'),
		'description' => __('Here you can customize theme data', 'e-comme'),
	));

	$wp_customize->add_panel('e_comme_header_options', array(
		'priority'    => 1,
		'capability'  => 'edit_theme_options',
		'title'       => __('Header Options', 'e-comme'),
		'description' => __('Here you can customize theme data', 'e-comme'),
	));

	/** Top Bar **/

	$wp_customize->add_section('e_comme_top_bar_section', array(
		'title'      => __('Top Bar Settings', 'e-comme'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
		'panel'      => 'e_comme_header_options',
	));

	$wp_customize->add_setting('e_comme_social_link_open_in_new_tab',
		array(
			'default'           => true,
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'e_comme_sanitize_checkbox',
		));

	$wp_customize->add_control('e_comme_social_link_open_in_new_tab', array(
		'type'     => 'checkbox',
		'priority' => 200,
		'section'  => 'e_comme_top_bar_section',
		'label'    => __('Open social links in new tab', 'e-comme'),
	));

	$wp_customize->add_setting('e_comme_social_link_facebook',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'e_comme_sanitize_url',
		)
	);

	$wp_customize->add_control('e_comme_social_link_facebook', array(
		'type'     => 'url',
		'priority' => 200,
		'section'  => 'e_comme_top_bar_section',
		'label'    => __('Facebook Page URL', 'e-comme'),
	));

	$wp_customize->add_setting('e_comme_social_link_google',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'e_comme_sanitize_url',
		)
	);

	$wp_customize->add_control('e_comme_social_link_google', array(
		'type'     => 'url',
		'priority' => 200,
		'section'  => 'e_comme_top_bar_section',
		'label'    => __('Google Page URL', 'e-comme'),
	));

	$wp_customize->add_setting('e_comme_social_link_youtube',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'e_comme_sanitize_url',
		)
	);

	$wp_customize->add_control('e_comme_social_link_youtube', array(
		'type'     => 'url',
		'priority' => 200,
		'section'  => 'e_comme_top_bar_section',
		'label'    => __('Youtube Page URL', 'e-comme'),
	));

	$wp_customize->add_setting('e_comme_social_link_twitter',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'e_comme_sanitize_url',
		)
	);
	$wp_customize->add_control('e_comme_social_link_twitter', array(
		'type'     => 'url',
		'priority' => 200,
		'section'  => 'e_comme_top_bar_section',
		'label'    => __('Twitter Page URL', 'e-comme'),
	));

	$wp_customize->add_setting('e_comme_social_link_linkedin',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'e_comme_sanitize_url',
		)
	);
	$wp_customize->add_control('e_comme_social_link_linkedin', array(
		'type'     => 'url',
		'priority' => 200,
		'section'  => 'e_comme_top_bar_section',
		'label'    => __('Linkedin Page URL', 'e-comme'),
	));

	$wp_customize->add_setting('e_comme_top_email',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'e_comme_sanitize_nohtml',
		)
	);
	$wp_customize->add_control('e_comme_top_email', array(
		'type'     => 'email',
		'priority' => 200,
		'section'  => 'e_comme_top_bar_section',
		'label'    => __('Top Bar Email', 'e-comme'),
	));

	$wp_customize->add_setting('e_comme_top_phone',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'e_comme_sanitize_nohtml',
		)
	);
	$wp_customize->add_control('e_comme_top_phone', array(
		'type'     => 'text',
		'priority' => 200,
		'section'  => 'e_comme_top_bar_section',
		'label'    => __('Top Bar Phone', 'e-comme'),
	));

	/** Top Bar **/

	/** Slider **/
	$wp_customize->add_setting('e_comme_hide_slider',
		array(
			'default'           => false,
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'e_comme_sanitize_checkbox',
		)
	);

	$wp_customize->add_control('e_comme_hide_slider', array(
		'type'     => 'checkbox',
		'priority' => 1,
		'section'  => 'e_comme_slider_section',
		'label'    => __('Hide Home Slider ', 'e-comme'),
	));

	$wp_customize->add_section('e_comme_slider_section', array(
		'title'      => __('Slider Settings', 'e-comme'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
		'panel'      => 'e_comme_homepage_options',
	));

	$wp_customize->add_setting('e_comme_slider_note', array(
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'e_comme_sanitize_html',
	));
	$wp_customize->add_control(new E_Comme_Slider_Note_Customize_Control($wp_customize, 'e_comme_slider_note', array(
		'label'    => __('Slider Documentation', 'e-comme'),
		'priority' => 1000,
		'section' => 'e_comme_slider_section',
		'setting' => 'e_comme_slider_note',
	)));

	

	$wp_customize->add_setting('e_comme_slider_one', array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'absint',

	));
	$wp_customize->add_control(new E_Comme_Page_Dropdown_Control($wp_customize, 'e_comme_slider_one',
		array(
			'label'    => __('Slide One Page', 'e-comme'),
			'section'  => 'e_comme_slider_section',
			'priority' => 1,
		)));
	

	

	$wp_customize->add_setting('e_comme_slider_two', array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'absint',

	));
	$wp_customize->add_control(new E_Comme_Page_Dropdown_Control($wp_customize, 'e_comme_slider_two',
		array(
			'label'    => __('Slide Two Page', 'e-comme'),
			'section'  => 'e_comme_slider_section',
			'priority' => 1,
		)));

	

	$wp_customize->add_setting('e_comme_slider_three', array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'absint',

	));
	$wp_customize->add_control(new E_Comme_Page_Dropdown_Control($wp_customize, 'e_comme_slider_three',
		array(
			'label'    => __('Slide Three Page', 'e-comme'),
			'section'  => 'e_comme_slider_section',
			'priority' => 1,
		)));

	

	$wp_customize->add_setting('e_comme_slide_button_text',
		array(
			'default'           => __('Click To Begin', 'e-comme'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'e_comme_sanitize_nohtml',
		));

	$wp_customize->add_control('e_comme_slide_button_text', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'e_comme_slider_section',
		'label'    => __('Button Text', 'e-comme'),
	));

	$wp_customize->add_setting('e_comme_slide_button_link',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'e_comme_sanitize_url',
		));

	$wp_customize->add_control('e_comme_slide_button_link', array(
		'type'     => 'url',
		'priority' => 1,
		'section'  => 'e_comme_slider_section',
		'label'    => __('Button Link', 'e-comme'),
	));

	/** Slider **/
	
	/* Latest Products */

	$wp_customize->add_section('e_comme_home_recent_product_section', array(
		'title'      => __('Latest Product Settings', 'e-comme'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
		'panel'      => 'e_comme_homepage_options',
	));

	$wp_customize->add_setting('e_comme_home_recent_product_title',
		array(
			'default'           => __('Latest In Products', 'e-comme'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control('e_comme_home_recent_product_title', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'e_comme_home_recent_product_section',
		'label'    => __('Heading', 'e-comme'),
	));

	$wp_customize->add_setting('e_comme_home_recent_product_desc',
		array(
			'default'           => __('See what is new in latest products', 'e-comme'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control('e_comme_home_recent_product_desc', array(
		'type'     => 'textarea',
		'priority' => 1,
		'section'  => 'e_comme_home_recent_product_section',
		'label'    => __('Description', 'e-comme'),
	));

	/* Latest Products */

	/* Sale Products */

	$wp_customize->add_section('e_comme_home_sale_product_section', array(
		'title'      => __('Sale Product Settings', 'e-comme'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
		'panel'      => 'e_comme_homepage_options',
	));

	$wp_customize->add_setting('e_comme_home_sale_product_title',
		array(
			'default'           => __('Products On Sale', 'e-comme'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control('e_comme_home_sale_product_title', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'e_comme_home_sale_product_section',
		'label'    => __('Heading', 'e-comme'),
	));

	$wp_customize->add_setting('e_comme_home_sale_product_desc',
		array(
			'default'           => __('Grab Offer quick its for few hours only', 'e-comme'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control('e_comme_home_sale_product_desc', array(
		'type'     => 'textarea',
		'priority' => 1,
		'section'  => 'e_comme_home_sale_product_section',
		'label'    => __('Description', 'e-comme'),
	));

	/* Sale Products */

	/* Latest Posts*/

	$wp_customize->add_section('e_comme_home_latest_blog_section', array(
		'title'      => __('Latest Blog Settings', 'e-comme'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
		'panel'      => 'e_comme_homepage_options',
	));

	$wp_customize->add_setting('e_comme_home_latest_blog_title',
		array(
			'default'           => __('Latest Blog', 'e-comme'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control('e_comme_home_latest_blog_title', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'e_comme_home_latest_blog_section',
		'label'    => __('Heading', 'e-comme'),
	));

	$wp_customize->add_setting('e_comme_home_latest_blog_desc',
		array(
			'default'           => __('Be updated with latest news', 'e-comme'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control('e_comme_home_latest_blog_desc', array(
		'type'     => 'textarea',
		'priority' => 1,
		'section'  => 'e_comme_home_latest_blog_section',
		'label'    => __('Description', 'e-comme'),
	));

	/* Latest Posts*/

	/* CTA */
	$wp_customize->add_section( 'e_comme_home_cta_section', array(
		'title'         =>    __( 'CTA Settings', 'e-comme' ), 
		'priority'      =>    1, 
		'capability'    =>    'edit_theme_options', 
		'panel'         =>    'e_comme_homepage_options',
		));

	$wp_customize->add_setting( 'e_comme_home_cta_title', 
		array(
			'default' =>__('Call Out Section', 'e-comme'),
			'type' => 'theme_mod', 
			'capability' => 'edit_theme_options', 
			'transport' => 'refresh', 
			'sanitize_callback' => 'sanitize_text_field',
			));

	$wp_customize->add_control( 'e_comme_home_cta_title', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'e_comme_home_cta_section',
		'label'    => __('Heading', 'e-comme'),
		));

	$wp_customize->add_setting( 'e_comme_home_cta_desc', 
		array(
			'default' => __('We are a group of passionate designers and developers who really love to create awesome WordPress themes & support.','e-comme'),
			'type' => 'theme_mod', 
			'capability' => 'edit_theme_options', 
			'transport' => 'refresh', 
			'sanitize_callback' => 'sanitize_text_field',
			));

	$wp_customize->add_control( 'e_comme_home_cta_desc', array(
		'type'     => 'textarea',
		'priority' => 1,
		'section'  => 'e_comme_home_cta_section',
		'label'    => __('Description', 'e-comme'),
		));


	$wp_customize->add_setting( 'e_comme_home_cta_one_text', 
		array(
			'default' => __('Register Now','e-comme'),
			'type' => 'theme_mod', 
			'capability' => 'edit_theme_options', 
			'transport' => 'refresh', 
			'sanitize_callback' => 'sanitize_text_field',
			));

	$wp_customize->add_control( 'e_comme_home_cta_one_text', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'e_comme_home_cta_section',
		'label'    => __('Button One Text', 'e-comme'),
		));

	$wp_customize->add_setting( 'e_comme_home_cta_one_url', 
		array(
			'default' =>'#',
			'type' => 'theme_mod', 
			'capability' => 'edit_theme_options', 
			'transport' => 'refresh', 
			'sanitize_callback' => 'e_comme_sanitize_url',
			));

	$wp_customize->add_control( 'e_comme_home_cta_one_url', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'e_comme_home_cta_section',
		'label'    => __('Button One URL', 'e-comme'),
		));


	$wp_customize->add_setting( 'e_comme_home_cta_two_text', 
		array(
			'default' => __('View Details','e-comme'),
			'type' => 'theme_mod', 
			'capability' => 'edit_theme_options', 
			'transport' => 'refresh', 
			'sanitize_callback' => 'sanitize_text_field',
			));

	$wp_customize->add_control( 'e_comme_home_cta_two_text', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'e_comme_home_cta_section',
		'label'    => __('Button Two Text', 'e-comme'),
		));

	$wp_customize->add_setting( 'e_comme_home_cta_two_url', 
		array(
			'default' => '#',
			'type' => 'theme_mod', 
			'capability' => 'edit_theme_options', 
			'transport' => 'refresh', 
			'sanitize_callback' => 'e_comme_sanitize_url',
			));

	$wp_customize->add_control( 'e_comme_home_cta_two_url', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'e_comme_home_cta_section',
		'label'    => __('Button Two URL', 'e-comme'),
		));
	/* CTA */

	

	$wp_customize->get_section('title_tagline')->priority     = 10;
	$wp_customize->get_section('static_front_page')->priority = 30;
	$wp_customize->get_section('header_image')->priority      = 50;
}

add_action('customize_register', 'e_comme_upgrade_control');
add_action('customize_register', 'e_comme_register_customizer_control');

function e_comme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'e_comme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function e_comme_customize_preview_js() {
	wp_enqueue_script( 'e_comme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'e_comme_customize_preview_js' );

?>
