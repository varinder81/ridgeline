<?php
/**
 * Template name: Our Service
 *
 */

get_header(); ?>

<!-- <section class="sliderDiv aboutPage">
  <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="sliderContent">
              <h2>our <span>service</span></h2>
             </div>
      </div>
    </div>
  </div>
</section> -->


<section class="solarEnterprise text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
       <?php while ( have_posts() ) : the_post();?>
        <?php the_content(); ?>
      <?php  endwhile; ?>
      </div>
    </div>
  </div>
</section>

<section class="ourServiceContent">
  <div class="container">

  <?php if( have_rows('our_services') ): ?>
    <?php $count=1; ?>
       <?php while( have_rows('our_services') ): the_row(); ?>
    <div class="row">
         <div class="col-sm-6 col-xs-12 <?php if($count%2 == 0) { ?> pull-right paddingLeftZero<?php } ?> <?php if($count%2 == 1) { ?>paddingRightZero<?php } ?>">
    <div class="ourServiceImg text-right">
          <img src="<?php the_sub_field('service_image'); ?>" alt="">
        </div>
      </div>
      <div class="col-sm-6"> 
        <div class="ourServiceContentInner text-left">
          <div class="contentCenterDiv">
            <?php the_sub_field('service_content'); ?>
          </div>
        </div>
      </div>
    </div>
   <?php $count++; ?>
 <?php endwhile; ?>
       <?php endif; ?>
  </div>
</section>
	

<?php get_footer(); ?>
