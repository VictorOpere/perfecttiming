<?php
/**
 * perfect functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package perfect
 * @subpackage perfect
 * @since 1.0.0
 */
/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */


function perfect_theme_support()
{
    # code...
    // lets add theme support for the various post formats 
    add_theme_support('post-formats', 
                
                array( 'aside',
                       'gallery',
                       'link',
                       'image',
                       'quote',
                       'status',
                       'video',
                       'audio',
                       'chat'
                       
                    ) 
            
            
            
    );
    
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			// 'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
    );
    
    /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
    add_theme_support( 'post-thumbnails' );
    
    // Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => '#EBEAEB',
		)
    );
    
    // lets add theme support title tag option
    add_theme_support( 'title-tag');
    // lets add theme support for customize select refresh
    add_theme_support( 'customize-selective-refresh-widgets' );
    // lets add custom theme support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
    // lets add theme support for custom headers
    $defaults = array(
        'default-image'          => '',
        'random-default'         => false,
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
        'video'                  => false,
        'video-active-callback'  => 'is_front_page',
    );
    add_theme_support( 'custom-header', $defaults );
    // Enabling theme support for align full and align wide option for the block editor
    add_theme_support( 'align-wide' );
    // lets add theme support for menus
    add_theme_support( 'menus' );
    
}
add_action( 'init', 'perfect_theme_support');
/**
 * 
 * Theme CSS & JS
 * 
 * This section includes enquiuing our css for our theme
 * 
 *  
 * */
function perfect_theme_scripts()
{
    # code...
    // lets add our CSS to our theme
    wp_enqueue_style( 'mygooglefonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'mybs', get_template_directory_uri().'/css/bootstrap.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'myanimate', get_template_directory_uri().'/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'mycarousel', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    
    wp_enqueue_style( 'myionics', get_template_directory_uri().'/fonts/ionicons/css/ionicons.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'myfontawesome', get_template_directory_uri().'/fonts/fontawesome/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'myflaticon', get_template_directory_uri().'/fonts/flaticon/font/flaticon.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'mymain', get_template_directory_uri().'/css/style.css', array(), '1.0.0', 'all' );

    


    // lets register our javascript here

    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'mypopper', get_template_directory_uri().'/js/popper.min.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'myboot', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'myowl', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'mywaypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array('jquery'), '1.0.0', True );
    wp_enqueue_script( 'mystellar', get_template_directory_uri().'/js/jquery.stellar.min.js', array('jquery'), '1.0.0', True );

    wp_enqueue_script( 'mainsrc', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0.0', True );    
    
}
add_action( 'wp_enqueue_scripts', 'perfect_theme_scripts');


/*
	 * Placing the required files needed for our theme to work
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     *****
     
     
*/

require_once(get_template_directory( ).'/inc/class-wp-bootstrap-navwalker.php');

/*
	 * Placing the required files needed for our theme to work
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     *****
     
     
*/

require_once(get_template_directory( ).'/inc/perfect-comment-helper.php');


/*
	 * Lets register the menus for our theme
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     *****
     // Include custom navwalker
     
     
*/
function perfect_register_menus()
{
    # code...
    // lets add menus for our header and the other for footer
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'Perfect' ),
     
    ) );
}
add_action( 'init', 'perfect_register_menus');

/*
	 * Lets Work on creating the Graavatar image for our Author of our various posts
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     *****
     // Include custom navwalker
     
    
 */

function perfect_get_avatar_img_url() {
    $user_email = get_the_author_meta( 'user_email' );
   
    $url = 'http://gravatar.com/avatar/' . md5( $user_email );
    $url = add_query_arg( array(
      's' => 42,
      'd' => 'mm',
    ), $url );
    return esc_url_raw( $url );
}

/**
 * Load Custom Comments Layout file.
 */
// require get_template_directory() . '/inc/comments-helper.php';

function perfect_custom_comment_reply_link($content) {
    $extra_classes = 'btn-reply text-uppercase';
    return preg_replace( '/comment-reply-link/', 'comment-reply-link ' . $extra_classes, $content);
}

add_filter('comment_reply_link', 'perfect_custom_comment_reply_link', 99);

/*
	 * Lets register the sidebars for our theme
	 *
	 * @link 
     *****
     // Include custom sidebar widgets
     
     
*/


function perfect_register_sidebars() {

    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar', 'Perfect' ),
            'description'   => __( 'This is the Primary Sidebar For The Theme.', 'Perfect' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-box">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title heading">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */

    register_sidebar(
        array(
            'id'            => 'footer-one',
            'name'          => __( 'First Footer Sidebar', 'Perfect' ),
            'description'   => __( 'This is the First Footer Sidebar.', 'Perfect' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h6>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-two',
            'name'          => __( 'Second Footer Sidebar', 'Perfect' ),
            'description'   => __( 'This is the Second Footer Sidebar.', 'Perfect' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s single-footer-widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title ">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-three',
            'name'          => __( 'Social Media Footer Sidebar', 'Perfect' ),
            'description'   => __( 'This is the Social Media Footer Sidebar.', 'Perfect' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s mb-5">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title ">',
            'after_title'   => '</h3>',
        )
    );
}

add_action( 'widgets_init', 'perfect_register_sidebars' );






/*
	 * Lets register the Block editor settings and styles for our theme
	 *
	 * @link 
     *****  
*/

function perfect_block_setup_theme_supported_features() {

    // lets add theme support for the editor color palette

    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'warm yellow', 'Perfect' ),
            'slug' => 'warm-yellow',
            'color' => '#ff9907',
        ),
        array(
            'name' => __( 'pint black', 'Perfect' ),
            'slug' => 'pint-black',
            'color' => '#222',
        ),
        array(
            'name' => __( 'light gray', 'Perfect' ),
            'slug' => 'light-gray',
            'color' => '#6c757d',
        ),
    ) );

    // lets add theme support for align-wide for editor images

    add_theme_support( 'align-wide' );

    // lets add theme support for editor block font sizes

    add_theme_support( 'editor-font-sizes', array(
        array(
            'name' => __( 'Small', 'Perfect' ),
            'size' => 12,
            'slug' => 'small'
        ),
        array(
            'name' => __( 'Regular', 'Perfect' ),
            'size' => 16,
            'slug' => 'regular'
        ),
        array(
            'name' => __( 'Large', 'Perfect' ),
            'size' => 36,
            'slug' => 'large'
        ),
        array(
            'name' => __( 'Huge', 'Perfect' ),
            'size' => 50,
            'slug' => 'huge'
        )
    ) );

    // lets add theme support for editor responsive embedded edits

    add_theme_support( 'responsive-embeds' );

    // lets add the theme support for editor block styles
    
    add_theme_support( 'wp-block-styles' );
}
 
add_action( 'after_setup_theme', 'perfect_block_setup_theme_supported_features' );


/*
	 * Placing the required files needed for our theme customizer to work
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     *****
     
     
*/

require_once(get_template_directory( ).'/inc/customizer.php');


/*
	 * Placing the required files needed for our theme customizer to work
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     *****
     
     
*/






