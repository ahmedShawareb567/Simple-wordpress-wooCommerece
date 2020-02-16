<?php

//DEFINE CONSTANTS
define('THEMEROOT', get_template_directory_uri());
define('CSS', THEMEROOT.'/css');
define('JS',THEMEROOT.'/js');
define('IMAGES',THEMEROOT.'/images');
define('CURRENTDOMAIN', 'vshops.online');

//ENQUEU SCRIPTS 77 STYLES
if(!function_exists('theme_enqueue_files')):
    function theme_enqueue_files(){
        wp_enqueue_style('font1', "https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap");
        wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
        wp_enqueue_style('bootstrapStyle', CSS.'/bootstrap.min.css');
        wp_enqueue_style('owlStyle', CSS.'/owl.carousel.min.css');
        wp_enqueue_style('owldefault', CSS.'/owl.theme.default.min.css');
        wp_enqueue_style('mainstyle', CSS.'/mainStyle.css', array(), time(), false);
        wp_enqueue_style('media-query', CSS.'/media-query.css');
        wp_enqueue_script('jquery', JS.'/jquery.js', array(), '', true);
        wp_enqueue_script('bootstrapJs', JS.'/bootstrap.min.js', array(), '', true);
        wp_enqueue_script('popper', JS.'/popper.js', array(), '', true);
        wp_enqueue_script('owlCarousel', JS.'/owl.carousel.min.js', array(), '', true);
        wp_enqueue_script('mainJs', JS.'/mainJs.js', array(), '', true);
    }
    add_action('wp_enqueue_scripts','theme_enqueue_files');
endif;

//SETUP THEME FAVICON
if(!function_exists('theme_favicon_setup')):
    function theme_favicon_setup(){
        echo '<link rel="icon" href="'.IMAGES.'/favicon.ico"/>';
    }
    add_action('wp_head','theme_favicon_setup');
endif;

//SETUP THEME SUPPORT
if(!function_exists('theme_support_setup')):
    function theme_support_setup(){
        add_theme_support('html5', array('search-form'));
        add_theme_support('menus');
        add_theme_support('custom-header');
        add_theme_support('custom-background');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', ['script', 'style']);
        add_theme_support('post-formats', array(
            'aside',
            'gallery',
            'audio',
            'video',
            'quote'
        ));
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
        remove_theme_support( 'wc-product-gallery-zoom' );
        remove_theme_support( 'wc-product-gallery-lightbox' );
        remove_theme_support( 'wc-product-gallery-slider' );
    }
    add_action('after_setup_theme', 'theme_support_setup');
endif;

//  REGISTER MENUS
if(!function_exists('theme_menus_setup')):
    function theme_menus_setup() {
        register_nav_menus(array(
            'main-menu' => __('This main-menu', CURRENTDOMAIN)
        ));
    }
    add_action('init','theme_menus_setup');
endif;

// THEME SIDEBARS SETUP
if(!function_exists('theme_sidebar_setup')):
    function theme_sidebar_setup() {
        $side_arguments = array(
            'name'          => 'Main Sidebar',
            'id'            => 'sidebar-1',
            'description'   => __('This is sidebar-one', CUURENTDOMAIN),
            'class'         => 'sidebarSec',
            'before_widget' => '<ul>',
            'after_widget'  => '</ul>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        );
        register_sidebar($side_arguments);
    }
    add_action('widgets_init', 'theme_sidebar_setup');
endif;

//FILTER THE EXCERPT FUNCTION
if(!function_exists('theme_excerpt_setup')):
    function theme_excerpt_setup($length){
        if(is_search()){
            return 20;
        }
        return 10;
    }
    add_filter('excerpt_length','theme_excerpt_setup');
endif;

//EXCERPT MORE OR FOR [...] CHANGES
if(!function_exists('theme_excerpt_more')):
    function theme_excerpt_more($more){
        return '..';
    }
    add_filter('excerpt_more', 'theme_excerpt_more');
endif;
