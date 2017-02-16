<?php get_header(); ?>

<!-- Breadcum Start -->
<?php e_comme_title_trail(); ?>
<!-- Breadcum End -->

<!-- WooCommrerce -->
<div class="container-fluid ec-blogs-sidebar ec-space">
	<div class="container">
		<div class="col-md-12 ec-blog-left-side port-gallery">
			<?php if ( have_posts() ) : ?>
				<?php woocommerce_content(); ?>
			<?php endif; ?>	
		</div>
	</div>
</div>
<!-- WooCommrerce -->
<?php get_footer(); ?>