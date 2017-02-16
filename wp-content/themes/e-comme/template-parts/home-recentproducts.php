<?php
$theme_data = e_comme_get_theme_var();
if ( e_comme_is_woocommerce_activated() ) :
?>
<!-- Home Products Start -->
<div class="container-fluid ec-woocommerce ec-space woocommerce woocommerce-page">
	<div class="container">
		<div class="row ec-product">
			<div class="swiper-container ec-product-slider">
				<div class="row section-heading">
				<h2 class="section-title"><?php echo esc_html($theme_data['home_recent_product_title']); ?></h2>
				<p class="section-description"><?php echo esc_html($theme_data['home_recent_product_desc']); ?></p>
			</div>
		        <div class="swiper-wrapper products">
				<?php
					$query_args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 8, 'orderby' =>'date','order' => 'DESC' );

					$products = new WP_Query( $query_args );
					while($products->have_posts()){
						$products->the_post();
						woocommerce_get_template_part( 'home-content', 'product' ); 
					}
					wp_reset_postdata();

				?>
				</div>
		        <!-- Add Arrows -->
		        <div class="swiper-button-prev ec-product-prev"></div>
		        <div class="swiper-button-next ec-product-next"></div>
			</div>
		</div>
	</div>
</div>
<!-- Home Products End -->
<?php endif; ?>