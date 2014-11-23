<?php
/**
 * Template Name: Full Width Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php get_header(); ?>

<div id="main-content" class="main-content">
<!--
	<?php
		if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
			// Include the featured content template.
			get_template_part( 'featured-content' );
		}
	?>
-->
    
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

				<!-- Carousel
			    ================================================== -->
			    <div id="myCarousel" class="carousel slide" data-ride="carousel">
			      <!-- Indicators -->
			      <ol class="carousel-indicators">
			        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			        <li data-target="#myCarousel" data-slide-to="1"></li>
			        <li data-target="#myCarousel" data-slide-to="2"></li>
			      </ol>
			      <div class="carousel-inner">
					
						<div class="item active">
							<img class="col-xs-12 visible-sm visible-md visible-lg" alt="First slide" src="/wp-content/uploads/2014/10/DSC_08721.jpg" height="500" /> 
							<img class="col-xs-12 visible-xs" alt="First slide" src="/wp-content/uploads/2014/10/DSC_0872.jpg" height="500" />
						</div>
						<div class="item">
							<img class="col-xs-12 visible-sm visible-md visible-lg" alt="First slide" src="/wp-content/uploads/2014/10/DSC_08721.jpg" height="500" /> 
							<img class="col-xs-12 visible-xs" alt="First slide" src="/wp-content/uploads/2014/10/DSC_0872.jpg" height="500" />
						</div>
						<div class="item">
							<img class="col-xs-12 visible-sm visible-md visible-lg" alt="First slide" src="/wp-content/uploads/2014/10/DSC_08721.jpg" height="500" /> 
							<img class="col-xs-12 visible-xs" alt="First slide" src="/wp-content/uploads/2014/10/DSC_0872.jpg" height="500" />
						</div>
			      </div>
			      	<div class="container hidden-xs">
								<div class="carousel-caption col-sm-4 col-xs-4">
									<h2 id="slogan">Safe. Dependable. Professional.</h2>
								</div>
					</div>
			      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="sprite chevron-left"></span></a>
			      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="sprite chevron-right"></span></a>
			    </div><!-- /.carousel -->
					<div id="home-content" class="container">
						<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'content', 'wysiwyg' );
						endwhile;
						?>
					</div>
			
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
	/**get_sidebar(); Commented out for this full page width*/
	get_footer();
?>