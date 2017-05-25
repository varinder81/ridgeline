<?php
/**
 * Template name: Contact Us
 *
 */

get_header(); ?>

<!-- <section class="sliderDiv contactPage">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="sliderContent">
            <h2>CONTACT <span>US</span></h2>
        </div>
      </div>
    </div>
  </div>
</section> -->


<section class="solarEnterprise contactPageContent">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php while ( have_posts() ) : the_post();?>
          <?php the_content(); ?>
        <?php  endwhile; ?>
    </div>
    <div class="col-sm-4">
      
       <?php if( have_rows('box') ): ?>
        <?php while( have_rows('box') ): the_row(); ?>
          <?php the_sub_field('content'); ?>
        <?php endwhile; ?>
       <?php endif; ?>
      
     
    </div>
    <div class="col-sm-8">
      <?php echo do_shortcode('[contact-form-7 id="99" title="Contact Us"]'); ?>
    </div>
  </div>
  </div>
</section>
	

<?php get_footer(); ?>
