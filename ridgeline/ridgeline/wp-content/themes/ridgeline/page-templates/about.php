<?php
/**
 * Template name: About
 *
 */

get_header(); ?>

<!-- <section class="sliderDiv aboutPage">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="sliderContent">
            <h2>about <span>us</span></h2>
           </div> 
      </div>
    </div>
  </div>
</section> -->


<section class="solarEnterprise AboutPageContent">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>WHO <span>WE ARE</span></h2>
        <div class="borderLine">
         <?php while ( have_posts() ) : the_post();?>
          <?php the_content(); ?>
        <?php  endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="projectDetails">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-6">
        <h2> <span class="counter">20</span>+ </h2>
        <h4>YEARS EXPERIENCE</h4>
      </div>
      <div class="col-sm-3 col-xs-6">
        <h2><span class="counter">150</span>+</h2>
        <h4>GOOD ENGINEER</h4>
      </div>
      <div class="col-sm-3 col-xs-6">
        <h2><span class="counter">300</span>+</h2>
        <h4>CUSTOMER</h4>
      </div>
      <div class="col-sm-3 col-xs-6">
        <h2><span class="counter">550</span>+</h2>
        <h4>PROJECTS COMPLETE</h4>
      </div>
    </div>
  </div>
</section>
	

<?php get_footer(); ?>
