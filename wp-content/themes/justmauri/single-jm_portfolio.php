<?php
/**
 * The Template for displaying all single posts.
 *
 * @package JustMauri
 */

get_header('portfolio'); ?>


	<?php while ( have_posts() ) : the_post(); ?>
		

		

		<div class="row">

			<?php /*Left Side*/ ?>
			<div class="col-sm-3 portfolio-sidebar-left hidden-xs">
				<div class="client-information">
				<h2>About</h2>
				<p class="client_profile"><?php the_field('JMclient_profile'); ?></p>
				</div>
				<div class="tools-used">
					<h2> Tools Used: </h2>
					<p class="toolsUsed"><?php the_field('JMTools'); ?></p>

				</div>
			</div>


			<?php /*Center*/ ?>
			<div id="primary" class="col-sm-6 content-area">
				<main id="main" class="site-main" role="main">
			
					<div class="entry-content">
						<?php the_content(); ?>
					</div>	
					<?php /*get_template_part( 'content', 'single' );*/ ?>

					<?php /*justmauri_post_nav();*/ ?>

			<div class="geekFiles">
				<h4 class="geekTab">Geek Files</h4>
				<div class="geekContent">
					<?php the_field('JMgeek'); ?>
				</div>

			</div>
				</main><!-- #main -->
			
			</div><!-- #primary -->

			<div class="col-sm-3 portfolio-sidebar-left visible-xs">
				<div class="client-information">
					<h2>About</h2>
					<p class="client_profile"><?php the_field('JMclient_profile'); ?></p>
				</div>
				<div class="tools-used">
					<h2> Tools Used: </h2>
					<p class="toolsUsed"><?php the_field('JMTools'); ?></p>

				</div>
			</div>

		
		<?php /*Right Side*/ ?>	
		<div class="col-sm-3 portfolio-sidebar-right pull-right">
			<?php /*get_sidebar();*/ ?>
			<div class="testemonial">
				<h2>Testimonial</h2>
				<?php JM_getImage("JMHeadshot") ?>
				<p><?php the_field('JMTestemonial'); ?></p>

			</div>	
		</div>

	</div> <!-- End of row -->

	<?php endwhile; // end of the loop. ?>

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

<?php 

function JM_getImage($JMsnap) {
	 
	$JM_img = get_field($JMsnap);
	 if (!empty($JM_img)):
		$JMimg_URL = $JM_img['url'];
		echo "<img class=\"img-responsive\" src=\"" . $JMimg_URL . "\" alt=\"" . $JMimg_URL . "\">"; 
	endif;
} ?>