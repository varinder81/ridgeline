<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section class="singlePage">
<div class="container">
	<div class="row">
		
		
	

<div class="col-sm-8">
			<div class="singlePageImage">
				
			
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

			// Previous/next post navigation.
			// the_post_navigation( array(
			// 	'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
			// 		'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
			// 		'<span class="post-title">%title</span>',
			// 	'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
			// 		'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
			// 		'<span class="post-title">%title</span>',
			// ) );

		// End the loop.
		endwhile;
		?>
		</div>
		</div>

		<div class="col-sm-4">
		<div class="singlePage">
		<div class="widget">
			<h2>Services</h2>
			<ul>
			  <?php 
			   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
			   <?php $query = new WP_Query( array('post_type' => 'services', 'paged' => $paged) );?>
			  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
			</ul>	
			</div>
			</div>		
		</div>


		</div>
	</div>
</section>

<?php get_footer(); ?>
