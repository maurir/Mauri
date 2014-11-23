<?php
/**
 * The Home.php file. 
 *
 * This file is created for the front page www.www.justmauri.dev
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package JustMauri
 */

get_header('bootstrap'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		<!-- Heading Divider -->

			<div id="jm-heading-divider"> 
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="text-center">I build web solutions using Wordpress</h4>
						</div>
						<div class="text-center col-sm-4">
							<button id="#lets-talk" class="btn btn-default btn-lg"><a href="#jm-contact-me"> Let's Talk</a></button>
						</div>
					</div>
				</div>
			</div>
		<!-- Introduction -->
		
		<div id="jm-intro"> 
				<div class="container">
					<div class="row">
						<div class="col-sm-offset-1 col-sm-3 text-center">
							<img class="img-responsive jm-portrait" src="<?php echo get_template_directory_uri(). '/library/img/profile.jpg'; ?> ">

						</div>
						<div class="col-sm-8">
							<h2 class="text-center">
								A Los Angeles based web developer taking the scary out of technology <br>
								<small>Helping others is what gets me up in the morning</small>
							</h2>

						</div>
					</div>
				</div>
			</div>


		<!--Happenings-->
		<div id="jm-happenings">
			
			<h3 class="text-center jm-title">Happenings in My World</h3>
			<div class="container">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-7">
						<p>
							<?php $the_query = new WP_Query( 'showposts=1' ); ?>
							
							<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
								
									<?php echo substr(strip_tags($post->post_content), 0, 250);?>
									<a href="<?php the_permalink() ?>">[ Read More ]</a>
							<?php endwhile;?>
						</p>
						<hr>
							<h4 class="jm-blog-title">
								<strong><a href="<?php echo get_site_url() . "/blog"; ?>">From The Blog</a></strong> &raquo;
								<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							</h4>
					</div>

					<div class="col-sm-4">
						<?php if ( dynamic_sidebar('TwitterSpace') ) : else : endif; ?>

					</div>
				</div>
			</div>
		</div>
		

		<!--Form-->

		<div id="jm-contact-me">
			<div class="container">
				<?php echo do_shortcode("[gravityform id=\"1\" name=\"Contact Me\"]"); ?>
			</div>
		</div>



				
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>