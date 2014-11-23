<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package JustMauri
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info text-center">
			<?php printf( __( '%1$s %2$s.', 'justmauri' ), 'I rolled <a href="http://www.getbootstrap.com">Bootstrap</a> into', '<a href="http://underscores.me/" rel="designer">Underscores.me</a> Rock On!' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
