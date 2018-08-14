<?php
/**
 * The template for displaying about page services
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
				 $image = get_field('image');
				 $size = "full"; ?>

				 <article class="about-page">

			  	 <div class="service-description">
			  		 <h2><?php the_title(); ?></h2>
			  		 <?php the_content(); ?>
			  		 <?php if($image) {
			  			echo wp_get_attachment_image( $image, $size);
				  		} ?>
			  	 </div>

					 <div class="about-images">
			 		 <?php if($image_1) {
			  		  echo wp_get_attachment_image( $image, $size);
				  	  } ?>
				   </div>

		  	<?php endwhile; // end of the loop. ?>
			</article>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
