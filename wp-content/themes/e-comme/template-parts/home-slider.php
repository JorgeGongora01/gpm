<?php
/**
* @Theme Name	:	E-Comme
* @file         :	home-slider.php
* @package      :	e-comme
* @author       :	Theme Farmer
* @license      :	readme.txt
* @filesource   :	wp-content/themes/e-comme/templates/home-slider.php
*/
$theme_data = e_comme_get_theme_var();
?>
<?php if(!$theme_data['hide_slider']): ?>
<!-- Slider Start -->
<div class="row ec-slider">
	<div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
				<img src="<?php echo esc_url($theme_data['slider_image_one']); ?>" class="img-responsive" alt="" />
				<div class="overlay-text"></div>
				<?php if(isset($theme_data['slide_1'])): ?>
				<div class="carousel-caption">
					<?php if(isset($theme_data['slide_1']->post_title)): ?>
					<h1 class="animation animated-item-1"><?php echo wp_kses_post($theme_data['slide_1']->post_title); ?></h1>
					<?php endif; ?>
					<?php if(isset($theme_data['slide_1']->post_content)): ?>
					<p class="animation animated-item-2"><?php echo wp_kses_post($theme_data['slide_1']->post_content); ?></p>
					<?php endif; ?>
					<a href="<?php echo esc_url($theme_data['slide_button_link']); ?>" class="btn s_link animation animated-item-3"> <?php echo esc_html($theme_data['slide_button_text']); ?> </a>
				</div>
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<img src="<?php echo esc_url($theme_data['slider_image_two']); ?>" class="img-responsive" alt="" />
				<div class="overlay-text"></div>
				<?php if(isset($theme_data['slide_2'])): ?>
				<div class="carousel-caption">
					<?php if(isset($theme_data['slide_2']->post_title)): ?>
					<h1 class="animation animated-item-1"><?php echo wp_kses_post($theme_data['slide_2']->post_title); ?></h1>
					<?php endif; ?>
					<?php if(isset($theme_data['slide_2']->post_content)): ?>
					<p class="animation animated-item-2"><?php echo wp_kses_post($theme_data['slide_2']->post_content); ?></p>
					<?php endif; ?>
					<a href="<?php echo esc_url($theme_data['slide_button_link']); ?>" class="btn s_link animation animated-item-3"> <?php echo esc_html($theme_data['slide_button_text']); ?> </a>
				</div>
				<?php endif; ?>
			</div>
			<div class="swiper-slide">
				<img src="<?php echo esc_url($theme_data['slider_image_three']); ?>" class="img-responsive" alt="" />
				<div class="overlay-text"></div>
				<?php if(isset($theme_data['slide_3'])): ?>
				<div class="carousel-caption">
					<?php if(isset($theme_data['slide_3']->post_title)): ?>
					<h1 class="animation animated-item-1"><?php echo wp_kses_post($theme_data['slide_3']->post_title); ?></h1>
					<?php endif; ?>
					<?php if(isset($theme_data['slide_3']->post_content)): ?>
					<p class="animation animated-item-2"><?php echo wp_kses_post($theme_data['slide_3']->post_content); ?></p>
					<?php endif; ?>
					<a href="<?php echo esc_url($theme_data['slide_button_link']); ?>" class="btn s_link animation animated-item-3"> <?php echo esc_html($theme_data['slide_button_text']); ?> </a>
				</div>
				<?php endif; ?>
			</div>
        </div>
		<!-- Add Pagination -->
        <div class="swiper-pagination slider-page"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-prev slider-prev"></div>
        <div class="swiper-button-next slider-next"></div>
    </div>
</div>
<!-- Slider End -->
<?php endif; ?>
    