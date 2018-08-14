<?php
/**
 * The template for displaying all pages
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

 <div id="primary" class="home-page hero-content">
  	<div class="main-content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
	 </div><!-- .main-content -->
 </div><!-- #primary -->

 <section class="featured-work">
   <div class="site-content clearfix">
     <h4 id="our-services">Our Services</h4>
  	 <p class="about-page-header">We take pride in our clients and the content we create for them. <br>Here's a brief overview of our offeered services.</p>
     <ul class="about" clearfix>
         <?php query_posts('category_name=about&order=ASC'); ?>
         <?php while ( have_posts() ) : the_post(); ?>
           <li class="about-item clearfix">
             <div class="about-title">
               <h2><?php the_title(); ?></h2>
            </div>
            <div class="about-content">
              <?php the_content(); ?>
            </div>
          </li>
         <?php endwhile; ?>
       <?php wp_reset_query(); ?>
       </ul>
     </div>
 </section>

 <div class="contact-us">
  	<div class="site-content clearfix">
      <div class="contact-us-button">
        <h1>Interested in working with us?</h1>
        <a class="about button" href="<?php echo site_url('/case-studies/') ?>">Contact Us</a>
    </div>
	 </div><!-- .main-content -->
 </div><!-- #primary -->


<?php get_footer(); ?>
