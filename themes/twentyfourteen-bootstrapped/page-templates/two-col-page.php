<?php
/**
 * Template Name: Two Column Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content gallery">
<!--
	<?php
		if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
			// Include the featured content template.
			get_template_part( 'featured-content' );
		}
	?>
-->
    
	<div id="primary" class="content-area">
		<div id="content" class="site-content two-col-page" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
			      	// Include the page content template.
					get_template_part( 'content', 'wysiwyg' ); 
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
	/**get_sidebar(); Commented out for this full page width*/
	get_footer();
?>