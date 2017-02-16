<?php  
$theme_data = e_comme_get_theme_var();

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'e-comme' ); ?></a>
	<!-- Header Start  -->
	<header>
		<!-- Top Bar -->
		<div class="container-fluid ec-top">
			<div class="container">
				<div class="row ec-topbar">
					<div class="col-md-6 col-sm-6 ec-top-social">
						<?php e_comme_get_social_block(); ?>
					</div>
					<div class="col-md-6 col-sm-6 ec-top-contact">
						<ul class="ec-contact">
							<?php if(!empty($theme_data['top_email'])): ?>
							<li class="ec-phone"><a href="mailto:<?php echo esc_attr($theme_data['top_email']); ?>"><i class="fa fa-phone"></i><?php echo esc_html($theme_data['top_email']); ?></a></li>
							<?php endif; ?>
							<?php if(!empty($theme_data['top_phone'])): ?>
							<li class="ec-email"><a href="callto:<?php echo esc_attr($theme_data['top_phone']); ?>"><i class="fa fa-envelope"></i><?php echo esc_html($theme_data['top_phone']); ?></a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Top Bar -->
		
		<!-- Menu -->
		<nav class="navbar navbar-default ec-menu">
			<div class="container-fluid">
				<div class="container">
					<div class="row ec-menu-head">
						<div class="col-md-2 navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#TF-Navbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
						  <div class="site-branding">
							<?php
							if ( function_exists( 'the_custom_logo' ) && function_exists( 'has_custom_logo' ) && has_custom_logo()) :
								
								if ( is_front_page() && is_home() ) : ?>
									<h1 class="site-title navbar-brand"><?php the_custom_logo();?></h1>
								<?php else : ?>
									<p class="site-title navbar-brand"><?php the_custom_logo();?></a></p>
								<?php
								endif;
							else :
								if ( is_front_page() && is_home() ) : ?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php else : ?>
									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
								endif;
								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
									<p class="site-description"><?php echo $description; ?></p>
								<?php
								endif; 
							endif;
							?>	
						  </div><!-- .site-branding -->
						</div>
						<?php 
							$args = array(
							                'theme_location'    => 'primary',
							                'depth'             =>  0,
							                'container'         => 'div',
							                'container_class'   => 'collapse navbar-collapse',
							        		'container_id'      => 'TF-Navbar',
							                'menu_class'        => 'nav navbar-nav navbar-right',
							                'fallback_cb'       => 'e_comme_fallback_page_menu',
							                'walker'            => new e_comme_nav_walker()
							      );
							wp_nav_menu($args);
						?>
					</div>
				</div>
			</div>
		</nav>
		<!-- Menu -->
	</header>	
	<div id="content" class="site-content">
