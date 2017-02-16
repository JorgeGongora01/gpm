<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package E_Comme
 */

get_header(); ?>
<!-- Breadcum Start -->
<?php e_comme_title_trail(); ?>
<!-- Breadcum End -->	
<!-- Blog Start -->
<div class="container-fluid ec-blogs-sidebar ec-space">
	<div class="container">
		<div class="col-md-9 ec-blog-left-side port-gallery">
			<div class="col-md-12 home-blog">
				<?php
					if ( have_posts() ) : the_post();
			
						get_template_part( 'template-parts/content', 'single' );
			
						?>	
						<div class="clearfix"></div>
						<div class="row pagination">
							<ul class="pager">
							  	<li class="previous"><?php previous_post_link('%link', '<i class="fa fa-arrow-left"></i>'.__('Previous Post','e-comme'), TRUE); ?></li>
								<li class="next"><?php next_post_link('%link', __('Next Post', 'e-comme').'<i class="fa fa-arrow-right"></i>', TRUE); ?> </li>
							</ul>
						</div>							
						<div class="clearfix"></div>
					        
						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endif; // End of the loop.
				?>
			</div>
		</div>
		<!-- Sidebar -->
		<?php get_sidebar(); ?>
	</div>
</div>
<!-- Blog End -->
<?php
get_footer();
