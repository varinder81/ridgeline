<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<footer class="footerDiv">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-xs-6">
				<div class="socialLinks">
				<div class="divShadow"></div>
					
					<?php echo the_field('footer_logo', 'option'); ?>
					<ul> 	 
						<li><a href="<?php echo the_field('fecebook', 'option'); ?>"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php echo the_field('instagram', 'option'); ?>"><i class="fa fa-instagram"></i></a></li>
						<li><a href="<?php echo the_field('vimeo', 'option'); ?>"><i class="fa fa-vimeo"></i></a></li>
						<li><a href="<?php echo the_field('twitter', 'option'); ?>"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php echo the_field('google_plus', 'option'); ?>"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-sm-3 col-xs-6">
				<div class="footerContent">
					<h2>RECENT POSTS</h2>
					<?php 
					   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
					   <?php $query = new WP_Query( array('post_type' => 'post', 'paged' => $paged,'posts_per_page'=>4 ) );?>
					  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<a class="recentPosts" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php  endwhile; ?> 
					<!-- <p>Lorem Ipsum is simply dummy text of the printing</p>
					<p>Lorem Ipsum is simply dummy text of the printing</p>
					<p>Lorem Ipsum is simply dummy text of the printing</p> -->
				</div>
			</div>

			<div class="col-sm-3 col-xs-6">
				<div class="footerContent footerForm">
					<h2>SUBSCRIBE</h2>
					<p>Get instantupdate  about our new product and spacial promos!</p>
					<form>
						<input type="text" placeholder="Your e-mail address">
						<button class="btn btn-default" type="button">Susbcribe</button>
					</form>
				</div>
			</div>

			<div class="col-sm-3 col-xs-6">
				<div class="footerContent">
					<h2>LATEST NEWS</h2>
					<?php 
					   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
					   <?php $query = new WP_Query( array('post_type' => 'post', 'paged' => $paged,'posts_per_page'=>4 ) );?>
					  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-xs-6 thumb">
						 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
					</div>
					<?php  endwhile; ?>

					<!-- <div class="col-xs-6 thumb">
						<a href=""><img src="<?php bloginfo('template_directory') ?>/images/news-2.jpg" alt=""></a>
					</div>
					<div class="col-xs-6 thumb">
						<a href=""><img src="<?php bloginfo('template_directory') ?>/images/news-3.jpg" alt=""></a>
					</div>
					<div class="col-xs-6 thumb">
						<a href=""><img src="<?php bloginfo('template_directory') ?>/images/news-4.jpg" alt=""></a>
					</div>
					<div class="col-xs-6 thumb">
						<a href=""><img src="<?php bloginfo('template_directory') ?>/images/news-5.jpg" alt=""></a>
					</div>
					<div class="col-xs-6 thumb">
						<a href=""><img src="<?php bloginfo('template_directory') ?>/images/news-6.jpg" alt=""></a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<div class="footerCopyRight">
		<p>Copyright 2016-2017 ALL RIGHT RESERVED</p>
	</div>
</footer>
</div><!-- /#wrapper -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mmenu.min.all.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/counter.js"></script>
    <script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();

	
</script>
<script type="text/javascript">
	$(function() {
      $('nav#menu').mmenu();
    });

    jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
</script>
<script type="text/javascript">
	$(document).ready(function(){

    var highestBox = 0;
        $('.ourServiceImg').each(function(){  
                if($(this).height() > highestBox){  
                highestBox = $(this).height();  
        }
    });    
    $('.ourServiceContentInner').height(highestBox);

});
</script>
<?php wp_footer(); ?>

</body>
</html>
