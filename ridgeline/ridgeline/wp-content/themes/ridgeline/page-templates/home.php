<?php
/**
 * Template name: Homepage
 *
 */

get_header(); ?>



<section class="solarEnterprise">
  <div class="container">
    <div class="row">
    <?php
      while ( have_posts() ) : the_post(); ?> 
      <?php the_content(); ?>
     <?php
      endwhile; 
     ?>
    </div>
  </div>
</section>

<section class="weOffers">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
         <h2>SERVICES <span>WE OFFER</span></h2>
        <h4>There are many variations of passages of Lorem Ispum available, but the majority have suffered</h4>
      </div>
      
      

       <?php 
       $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
       <?php $query = new WP_Query( array('post_type' => 'services', 'paged' => $paged) );?>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="col-sm-6">
          <div class="offerDetails">
            <div class="col-xs-4">
              <div class="offerIonDiv">
                <img src="<?php the_field('icon'); ?>" alt=""> 
              </div>
            </div>
            <div class="col-xs-8">
              <div class="offerContentDiv">
                <h5><?php the_title(); ?></h5>
                <p><?php $content = get_the_content();
                  $content = strip_tags($content);
                  echo substr($content, 0, 120);
                  ?></p>
                <a href="<?php the_permalink(); ?>"> More </a>
              </div> 
            </div>
            </div>
            </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>


<section class="whyUSDiv">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
         <h2>WHY <span>CHOOSE US</span></h2>
      </div>
      <div class="col-sm-4">
      	<div class="whyUSDivContent">
        
        <?php if( have_rows('w_list', 'option') ): ?>
          <?php while( have_rows('w_list', 'option') ): the_row();
          $list[] = "<div class='whyUSInner'>
            <h5>".get_sub_field('w_title', 'option')."</h5>
              <p>".get_sub_field('w_content', 'option')."</p>
            <div class='roundImage'>
               <img src='".get_sub_field('w_icon', 'option')."' alt=".get_sub_field('w_title', 'option').">
            </div>
          </div>" ?>
          <?php 
          endwhile;
          endif;   
          $sliced_list1 = array_slice($list, 0, 3);
          foreach ($sliced_list1 as $item) {
             echo $item;
          } ?>
      	</div> 
      </div>
      <div class="col-sm-4">
      	<div class="whyUSDivImgSec">
      		<img src="<?php the_field('w_image', 'option'); ?>" alt="">
      	</div>
      </div>
      <div class="col-sm-4">
      	<div class="whyUSDivContent whyUSLeftAlign">

          <?php
           $sliced_list2 = array_slice($list, 3, 3);
          foreach ($sliced_list2 as $item) {
             echo $item;
          } ?>

      	</div>
      </div>
    </div>
  </div>
</section>

<section class="findJob">
	<div class="halfBgDiv"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="findJobContent">
					<h2>FIND YOUR JOB <span></span></h2>
      			   <img src="<?php bloginfo('template_directory') ?>/images/find-job-icon.png" alt="">
      			   <p>Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh.</p>
      			   <form action="/ridgeline/get-work/" method="get">
      			   	<input type="text" name="search_keywords" placeholder="Enter keyword">
      			   	<input type="submit" class="btn btn-default" value="FIND JOB"/>
      			   </form>
				</div>
			</div>
		</div>
	</div>
</section>

	

<?php get_footer(); ?>
