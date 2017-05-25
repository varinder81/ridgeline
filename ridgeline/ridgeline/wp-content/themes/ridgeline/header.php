<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/jquery.mmenu.all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700,800" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
<header class="headerDiv">
  <div class="topBar">            <!-- Topbar -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-7">
                        <ul class="socialIcons">
                            <li><a href="<?php echo the_field('fecebook', 'option'); ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo the_field('instagram', 'option'); ?>"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="<?php echo the_field('vimeo', 'option'); ?>"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="<?php echo the_field('twitter', 'option'); ?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php echo the_field('google_plus', 'option'); ?>"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-5">
                        <ul class="contactUl">
                         <?php if( have_rows('header_top_bar', 'option') ): ?>
                        <?php while( have_rows('header_top_bar', 'option') ): the_row(); ?>
                        <li>
                          <?php the_sub_field('header_top_content', 'option'); ?>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>

                            <!-- <li>
                              <a href="tel:+911234567890">
                                <i class="fa fa-phone"></i>
                                <span>+91 1234567890</span>
                              </a>
                            </li>
                            <li>
                              <a href="mailto:example@example.com"><i class="fa fa-envelope"></i><span>example@example.com</span></a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<div class="navigationDiv">
  <div class="">
<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo home_url(''); ?>"><img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'walker'	 => new BootstrapNavMenuWalker() ) ); ?>
    </div><!-- /.navbar-collapse -->
</nav> 
 <a class="toggle" href="#menu"></a>
           <nav id="menu" class="mbmenu">
             <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right','walker'   => new BootstrapNavMenuWalker() ) ); ?>
           </nav>
  </div><!-- /.container-fluid -->


</div>
</header>


<section class="sliderDiv page-banner" style="background-image: url('<?php echo get_field('banner_image', get_the_ID()); ?>');">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="sliderContent">
          <?php if(is_page(4)) { ?>
            <?php the_field('banner_content', 'option'); ?>
           <?php } else { ?>
            <h2><?php the_title(); ?></h2>
          <?php } ?>

          </div>
      </div>
    </div>
  </div>
</section>

