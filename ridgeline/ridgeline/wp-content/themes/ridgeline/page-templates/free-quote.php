<?php
/**
 * Template name: Free Quote
 *
 */

get_header(); ?>

<!-- <section class="sliderDiv contactPage freeQuote">
  <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="sliderContent">
              <h2><span>FREE </span>QUOTE</h2>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section class="freeQuoteContent">
  <div class="container">
    <div class="row">
    <?php if( have_rows('box') ): ?>
       <?php while( have_rows('box') ): the_row(); ?>
      <div class="col-sm-4">
        <div class="contactDiv">
        <img class="contactDivImg" src="<?php the_sub_field('image'); ?>" alt="">
          <?php the_sub_field('content'); ?>
        </div>
      </div>
       <?php endwhile; ?>
       <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
      <?php echo do_shortcode('[contact-form-7 id="61" title="Contact form"]'); ?>
      </div>
    </div>
  </div>
</section>
<section class="freeQuoteImageSection">
  <?php the_post_thumbnail(); ?>
</section>
	

<?php get_footer(); ?>
