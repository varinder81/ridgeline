<?php
/**
 * Template name: News
 *
 */

get_header(); ?>


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

<section class="newsContent">
  <div class="container">
    <div class="row">
    <?php $args = array(
        'posts_per_page'   => 6,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'post_status'      => 'publish',
        'suppress_filters' => true 
      );
     query_posts( $args ); ?>
     <?php $count=0; ?>
      <?php if ( have_posts() ) : ?>
      <?php
      // Start the loop.
      while ( have_posts() ) : the_post(); ?>
        <div class="col-sm-6">
        <div class="newsContentDiv">
        <?php if($count%2 == 0) { ?>
          <?php the_post_thumbnail( 'full', array( 'class' => 'hidden-lg hidden-sm hidden-md' ) ); ?>
        <?php } else { ?>  
        <?php the_post_thumbnail( 'full' ); ?>
        <?php } ?>
          <div class="newsContentInner"> 
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <button type="button" class="btn btn-default">Read More</button>

          </div>
          <?php if($count%2 == 0) { ?>
          <?php the_post_thumbnail( 'full', array( 'class' => 'hidden-xs' ) ); ?>
          <?php } ?>  
        </div>
      </div>

         <?php 
         $count++;
         // End the loop.
        endwhile;
        endif;
        ?>
      
    </div>
    <div class="col-sm-12">
          <button type="button" class="btn btn-default nextButton">Next Page</button>      
    </div>
  </div>
</section>
	

<?php get_footer(); ?>
