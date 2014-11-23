<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->
		</div><!-- #page -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<ul>
					<li>AllState Scaffolding: 1-888-628-6222 <span class="sepBar">|</span></li>
					<li>Vacaville Office: 1-707-448-4100 <span class="sepBar">|</span></li>
					<li>Sacramento Office: 1-916-441-5900 <span class="sepBar">|</span></li>
					<li><a href="allstatescaffolding@yahoo.com">Email: allstatescaffolding@yahoo.com</a></li>
				</ul>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	<?php wp_footer(); ?>
</body>
</html>