<?php
/**
Constants->>
*/
defined('THEME_NAME') or define('THEME_NAME', 'sedge');
defined( 'THEME_DIR' ) or define( 'THEME_DIR', get_template_directory() );
defined( 'THEME_URI' ) or define( 'THEME_URI', get_template_directory_uri() );

defined( 'HOMEID' ) or define( 'HOMEID', get_option('page_on_front') );

/**
Theme Setup->>
*/
if( !function_exists('cbv_theme_setup') ){
    
    function cbv_theme_setup(){
        
      load_theme_textdomain( 'sedge', get_template_directory() . '/languages' );
        add_theme_support( 'title-tag' );
        add_theme_support('woocommerce');
        add_theme_support('post-thumbnails');
        if(function_exists('add_theme_support')) {
            add_theme_support('category-thumbnails');
        }
        add_image_size( 'hm_intro', 550, 656, true );
        add_image_size( 'hmproduct', 260, 152, true );
        add_image_size( 'about_banner', 1070, 670, true );
        add_image_size( 'about_intro', 424, 582, true );
        add_image_size( 'about_gallery1', 682, 392, true );
        add_image_size( 'about_gallery2', 414, 624, true );
        add_image_size( 'about_gallery3', 304, 446, true );
        // add size to media uploader
        add_filter( 'image_size_names_choose', 'cbv_custom_image_sizes' );
        function cbv_custom_image_sizes( $sizes ) {
            return array_merge( $sizes, array(
                'vgrid2' => __( 'Gallery Grid' ),
            ) );
        }

        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        register_nav_menus( array(
            'cbv_main_menu_1' => __( 'Hoofdmenu 1', THEME_NAME ),
            'cbv_main_menu_2' => __( 'Hoofdmenu 2', THEME_NAME ),
            'cbv_main_mbmenu_mobiel' => __( 'Mobiel Menu', THEME_NAME ),
            'cbv_copyright_mobiel' => __( 'Copyright Mobiel Menu', THEME_NAME ),
            'cbv_fta_menu' => __( 'Footer Menu 1', THEME_NAME ),
            'cbv_ftb_menu' => __( 'Footer Menu 2', THEME_NAME ),
            'cbv_copyright_menu' => __( 'Copyright Menu', THEME_NAME ),
        ) );

    }

}
add_action( 'after_setup_theme', 'cbv_theme_setup' );

/**
Enqueue Scripts->>
*/
function cbv_theme_scripts(){
    include_once( THEME_DIR . '/enq-scripts/popper.php' );
    include_once( THEME_DIR . '/enq-scripts/bootstrap.php' );
    include_once( THEME_DIR . '/enq-scripts/fonts.php' );
    include_once( THEME_DIR . '/enq-scripts/fancybox.php' );
    include_once( THEME_DIR . '/enq-scripts/slick.php' );
    include_once( THEME_DIR . '/enq-scripts/swiper.php' );
    include_once( THEME_DIR . '/enq-scripts/google.maps.php' );
    include_once( THEME_DIR . '/enq-scripts/matchheight.php' );
    include_once( THEME_DIR . '/enq-scripts/app.php' );
    include_once( THEME_DIR . '/enq-scripts/animate.php' );
    include_once( THEME_DIR . '/enq-scripts/theme.default.php' );
}

add_action( 'wp_enqueue_scripts', 'cbv_theme_scripts');
/**
Includes->>
*/
include_once(THEME_DIR .'/inc/class-cbv_attributes-widgets.php');
include_once(THEME_DIR .'/inc/widgets-area.php');
include_once(THEME_DIR .'/inc/breadcrumbs.php');
include_once(THEME_DIR .'/inc/cbv-functions.php');
include_once(THEME_DIR .'/inc/wc-functions.php');
/**
ACF Option pages->>
*/
if( function_exists('acf_add_options_page') ) { 
    
    //parent tab
    //acf_add_options_page( 'Opties' );
    acf_add_options_page(array(
        'page_title'    => __('Options', THEME_NAME),
        'menu_title'    => __('Options', THEME_NAME),
        'menu_slug'     => 'cbv_options',
        'capability'    => 'edit_posts',
        //'redirect'        => false
    ));

}
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyBo2-QJ7RdCkLw3NFZEu71mEKJ_8LczG-c';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// theme conditioanl tags
function is_blog() {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}
function is_cbv_wc() {
    return ( is_cart() || is_checkout() || is_account_page());
}
function is_cbv_title() {
    return ( is_cart() || is_account_page());
}
function is_show_footer_form() {
    return ( is_cart() || is_shop() || is_product_category() || is_product_tag() || is_product());
}

function is_social_show_hide() {
    return ( is_cart() || is_shop() || is_account_page() || is_product_category() || is_product_tag() || is_product() || is_checkout() || is_page( get_title_by_page_template('page-contact.php') ));
}

function is_show_hide_cart(){
    return ( (is_account_page() && is_user_logged_in()) || is_page( get_title_by_page_template('page-contact.php') ));
}

function is_show_hide_global_sidebar(){
    return ( is_front_page() || is_cart() || is_shop() || is_account_page() || is_product_category() || is_product_tag() || is_product() || is_checkout() || is_page( get_title_by_page_template('page-contact.php') ));
}

add_post_type_support( 'page', 'excerpt' );

add_filter('use_block_editor_for_post', '__return_false');

function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) || strpos( $url, 'jquery-migrate.min.js' ) ) return $url;
    return "$url' defer ";
    
}
if ( ! is_admin() ) {
    //add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
function my_wp_nav_menu_objects( $items, $args ) {
    // loop
    foreach( $items as &$item ) {
        // vars
        $icon = get_field('icon', $item);   
        // append icon
        if( $icon ) {   
            $item->title .= ' <img src="'.$icon.'"/>';  
        }
        
    }
    // return
    return $items;
}

function custom_body_classes($classes){
    // the list of WordPress global browser checks
    // https://codex.wordpress.org/Global_Variables#Browser_Detection_Booleans
    $browsers = ['is_iphone', 'is_chrome', 'is_safari', 'is_NS4', 'is_opera', 'is_macIE', 'is_winIE', 'is_gecko', 'is_lynx', 'is_IE', 'is_edge'];
    // check the globals to see if the browser is in there and return a string with the match
    $classes[] = join(' ', array_filter($browsers, function ($browser) {
        return $GLOBALS[$browser];
    }));
    return $classes;
}
// call the filter for the body class
add_filter('body_class', 'custom_body_classes');

add_filter( 'wpcf7_autop_or_not', '__return_false' );

if( !function_exists('cbv_custom_both_breadcrump')){
  function cbv_both_breadcrump(){
    if ( is_product_category() || is_product() || is_shop() || is_cart() || is_checkout()
       || is_woocommerce() || is_product_tag() || is_account_page() || is_wc_endpoint_url()
       || is_ajax()) {
                woocommerce_breadcrumb();
            }else{
                cbv_breadcrumbs();
            }
    }
}
/**
Debug->>
*/
function printr($args){
    echo '<pre>';
    print_r ($args);
    echo '</pre>';
}