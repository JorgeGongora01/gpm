<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package E_Comme
 */

get_header(); ?>
<!-- Breadcum Start -->
<?php e_comme_title_trail(); ?>
<!-- Breadcum End -->
<div class="container-fluid ec-blogs-sidebar ec-space">
	<div class="container">
		<div class="col-md-9 ec-blog-left-side port-gallery">
		<?php
			if (have_posts()):
					?>
					<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'e-comme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->
				<?php
				while ( have_posts() ) : the_post();
		
					get_template_part( 'template-parts/content', 'search' );

				endwhile; // End of the loop.
				?>
				<div class="clearfix"></div>
				<div class="row pagination">
					<ul class="pager">
					  <li class="previous"> <?php previous_posts_link( '<i class="fa fa-arrow-left"></i>'.__('Previous Posts', 'e-comme') ); ?></a></li>
					  <li class="next"> <?php next_posts_link( __('Next Posts', 'e-comme').'<i class="fa fa-arrow-right"></i>' ); ?> </a></li>
					</ul>
				</div>	
				<div class="clearfix"></div>
			<?php
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif; 
		?>
		</div>
		<!-- Sidebar -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();
