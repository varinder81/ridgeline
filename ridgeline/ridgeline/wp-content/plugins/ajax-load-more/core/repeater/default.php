<div class="recentJobsContent">
          <div class="halfDivBg"></div>
          <div class="col-md-3 col-sm-4">
            <div class="recentJobsImage">
   <?php if (! has_post_thumbnail() ) { echo ' class="img-circle"'; } ?>
   <?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(200,200));
   }?>
            </div>
          </div>
 <div class="col-md-9 col-sm-8">
            <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
            <span class="dateSecton"><?php the_time("F d, Y"); ?></span>
           <a href="<?php the_permalink(); ?>" class="btn btn-default" type="button">Details</a>
            </div>
        </div>