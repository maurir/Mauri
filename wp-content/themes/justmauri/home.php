<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package JustMauri
 */

get_header(); ?>

<div id="blog-wrap">
	<div class="row">
		<div id="primary" class="content-area col-sm-8">
			<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php justmauri_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary and column -->
	
		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div> <!--end of row-->
	
	<!-- Footer Widgets -->
	<div  id= "footer-widgets" class="row">
		<div id="footer-left" class="col-sm-4 jm-footer-space">
			<?php if ( dynamic_sidebar('FooterLeft') ) : else : endif; ?>
			
		</div> <!--End of Footer Widget 1-->
		<div id="footer-center" class="col-sm-4 jm-footer-space">
			<?php if ( dynamic_sidebar('FooterCenter') ) : else : endif; ?>
				
		</div> <!--End of Footer Widget 2-->
		<div id="footer-right" class="col-sm-4 jm-footer-space">
			<?php if ( dynamic_sidebar('FooterRight') ) : else : endif; ?>
		</div> <!--End of Footer Widget 3-->
	</div> <!-- End of Widget Area-->


<!-- </div> --> <!--end of container-->

<?php get_footer(); ?>
