<?php
$theme_data = e_comme_get_theme_var();
if ( e_comme_is_woocommerce_activated() ) :
?>
<!-- Home Products Start -->
<div class="container-fluid ec-woocommerce ec-space woocommerce woocommerce-page">
	<div class="container">
		<div class="row ec-product">
			<div class="swiper-container product-slider">
				<div class="row section-heading">
					<h2 class="section-title"><?php echo esc_html($theme_data['home_sale_product_title']); ?></h2>
					<p class="section-description"><?php echo esc_html($theme_data['home_sale_product_desc']); ?></p>
				</div>
		        <div class="swiper-wrapper products">
			        <?php
						$query_args = array(
						    'posts_per_page'    => 8,
						    'no_found_rows'     => 1,
						    'post_status'       => 'publish',
						    'post_type'         => 'product',
						    'meta_query'        => WC()->query->get_meta_query(),
						    'post__in'          => array_merge( array( 0 ), wc_get_product_ids_on_sale() )
						);

						$products = new WP_Query( $query_args );
						while($products->have_posts()){
							$products->the_post();
							woocommerce_get_template_part( 'home-content', 'product' ); 
						}
						wp_reset_postdata();
					?>
				</div>
		    	
		        <!-- Add Arrows -->
		        <div class="swiper-button-prev product-prev"></div>
		        <div class="swiper-button-next product-next"></div>
			</div>
		</div>
	</div>
</div>
<!-- Home Products End -->
<?php endif; ?>