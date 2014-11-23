<?php
/**
 * The Template for displaying all single posts.
 *
 * @package JustMauri
 */

get_header(); ?>

	<div class="row">
		<div id="primary" class="col-sm-8 content-area">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php justmauri_post_nav(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div> <!-- End of row -->
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
<?php get_footer(); ?>