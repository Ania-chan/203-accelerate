<?php
/**
 * The template for displaying About Page
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

 <div id="primary" class="home-page hero-content">
  	<div class="main-content" role="main">
      <div class="about-page-header">
      <?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
    </div>
	 </div><!-- .main-content -->
 </div><!-- #primary -->

 <section class="featured-work">
   <div class="site-content clearfix">

     <h4 id="our-services">Our Services</h4>
  	 <p class="about-page-header">We take pride in our clients and the content we create for them. <br>Here's a brief overview of our offeered services.</p>

     <ul class="about" clearfix>
         <?php query_posts('post_type=about_page&order=ASC'); ?>
          <?php while ( have_posts() ) : the_post();
              $service_image = get_field('service_image');
				      $size = "full"; ?>

             <li class="service-item">
              <div class="service-description clearfix">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
              </div>

              <div class="about-images clearfix">
                <?php if($service_image) {
                 echo wp_get_attachment_image( $service_image, $size);
                 } ?>
              </div>
            </li>

         <?php endwhile; ?>
       <?php wp_reset_query(); ?>
       </ul>
     </div>
 </section>

  	<div class="site-content clearfix">
      <div class="contact-us">
        <div class="contact-us-text">
        <h1>Interested in working with us?</h1>
      </div>
      <div class="contact-us-button">
        <a class="about button" href="<?php echo site_url('/case-studies/') ?>">Contact Us</a>
    </div>
  </div><!-- .contact-us -->
</div><!-- site-content -->


<?php get_footer(); ?>
