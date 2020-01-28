<?php 
/**
 * Header file for perfect WordPress theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package perfect
 * @subpackage perfect
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php  bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
   




    <?php if ( is_singular() && pings_open( get_queried_object(  ) )): ?>

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php endif; ?>

    <?php if ( is_singular() && get_option( 'thread_comments' ) )               wp_enqueue_script( 'comment-reply' ); ?>


    <?php wp_head( ); ?>
</head>
<body <?php body_class( );?> >

<header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-9 social">
              <a href="<?php get_theme_mod('twitter_page_link');?>"><span class="fa fa-twitter"></span></a>
              <a href="<?php get_theme_mod('facebook_page_link');?>"><span class="fa fa-facebook"></span></a>
              <a href="<?php get_theme_mod('instagram_page_link');?>"><span class="fa fa-instagram"></span></a>
              <a href="<?php get_theme_mod('youtube_page_link');?>"><span class="fa fa-youtube-play"></span></a>
            </div> 
            <div class="col-3 search-top">
              <!-- <a href="#"><span class="fa fa-search"></span></a> -->
              <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-top-form">
                <span class="icon fa fa-search"></span>
                <input type="text" name="s" class="form-control" id="s" type="text" placeholder="Type keyword to search...">
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="container logo-wrap">
        <div class="row pt-5">
          <div class="col-12 text-center">
            <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
            <h2 class="site-logo"><a title="<?php bloginfo('name');?>"href="<?php echo esc_url( home_url('/') );?>"><?php bloginfo( 'name' );?></a></h2>
          </div>
        </div>
      </div>
      
      <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">
          
         
          <div class="collapse navbar-collapse" id="navbarMenu">
           
          <?php
                    wp_nav_menu([
                        'menu'            => 'primary_menu',
                        'theme_location'  => 'primary_menu',
                        'container'       => '',
                        'container_id'    => '',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav mx-auto',
                        'depth'           => 4,
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ]);
          ?>

          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

