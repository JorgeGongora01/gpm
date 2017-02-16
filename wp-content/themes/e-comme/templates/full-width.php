<?php
/**
Template Name: Full Width 
*/
get_header(); 
?>
<?php e_comme_title_trail(); ?>

<div class="container-fluid ec-blogs-sidebar ec-space">
	<div class="container">
		<div class="col-md-12 ec-blog-left-side port-gallery">
			<div class="col-md-12 home-blog">
				<?php
					while ( have_posts() ) : the_post();
		
						get_template_part( 'template-parts/content', 'page' );
		
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
		
					endwhile; // End of the loop.
				?>
			</div>
		</div>		
	</div>
</div>
<?php
get_footer();
