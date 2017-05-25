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
   <?php 
   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
   <?php $query = new WP_Query( array('post_type' => 'post', 'paged' => $paged,'posts_per_page'=>4 ) );?>
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
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
            <a href="<?php the_permalink(); ?>" class="btn btn-default">Read More</a>

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
        if(function_exists('wp_pagenavi')) {
           wp_pagenavi(array( 'query' => $query ));
          }
          wp_reset_postdata();
          
        ?>
      
    </div>
   <!--  <div class="col-sm-12">
          <button type="button" class="btn btn-default nextButton">Next Page</button>      
    </div> -->
  </div>
</section>
	

<?php get_footer(); ?>
