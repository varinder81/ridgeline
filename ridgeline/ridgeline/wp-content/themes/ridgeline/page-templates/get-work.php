<?php
/**
 * Template name: Get Work
 *
 */

get_header(); ?>

<!-- <section class="sliderDiv aboutPage getWork">
  <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="sliderContent">
              <h2>GET  <span>WORK</span></h2>
             
        </div>
      </div>
    </div>
  </div>
</section>
  -->
<section class="solarEnterprise text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
       <?php while ( have_posts() ) : the_post();?>
          <?php the_content(); ?>
        <?php  endwhile; ?>
      </div>
    </div>
  </div>
</section>

<section class="getWorkContent">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <div class="getWorkContentInner">
                <img src="<?php echo the_field('get_work_image'); ?>" alt="">
            <div class="getWorkDis">
              <div class="col-md-6 col-sm-8">
                <div class="getWorkDisInner">
                  
                <?php echo the_field('get_work_content'); ?>
                </div>
              </div>
            </div>
        </div>

      </div>
    </div>
  </div>
</section>



<!-- <section class="solarEnterprise text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h2> <span>CURRENT RENEWABLE </span>ENERGY JOBS LIST</h2>
        <p>Lorem ipsum dolor sit amet, non odio tincidunt ut ante, lorem a euismod suspendisse vel, sed quam nulla mauris iaculis. Erat eget vitae malesuada, tortor tincidunt porta lorem lectus.</p>
      </div>
      <div class="col-sm-12">
        <div class="jobSearch">
            <h4>JOB SEARCH</h4>
            <form>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Keyword SEARCH</label>
                  <input class="form-control" placeholder="Search Job By Keywords" type="text">
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>Radius Search</label>
                  <select class="form-control">
                    <option>10 Miles</option>
                    <option>15 Miles</option>
                    <option>20 Miles</option>
                    <option>25 Miles</option>
                  </select>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>Form</label>
                  <input class="form-control" placeholder="Your Location" type="text">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label></label>
                  <button class="btn btn-default" type="button">Search</button>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</section> -->


<section class="recentJobs">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      <h4>JOB SEARCH</h4>
        <?php echo do_shortcode('[jobpost]') ?>

        <!-- <?php //echo do_shortcode('[ajax_load_more id="recentJobsload" container_type="ul" css_classes="loaderrecentJobs" post_type="jobpost" images_loaded="true"]') ?> -->

        <!-- <p>Here you cAn see</p>
        <h2> <span>Recent </span>JOBS</h2> 
    
            <button class="btn btn-default allJobs" type="button">LOAD ALL JOBS</button>
-->

      </div>
    </div>
  </div>
</section>
	

<?php get_footer(); ?>
