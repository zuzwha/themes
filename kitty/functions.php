<?php

add_action('after_setup_theme', 'kitty_setup');
function kitty_setup()
{

add_theme_support ('menus');
add_theme_support ('title-tag');
add_theme_support('post-thumbnails');
add_theme_support ('automatic-feed-links');
add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption'));
add_action('pre_get_posts', 'wpb_exclude_from_home');	

	register_nav_menus(array(
    'primary'=>'Primary Menu',
));	
}




/*Add scripts & styles*/
add_action('wp_enqueue_scripts', 'add_theme_scripts');
function add_theme_scripts()
{
wp_enqueue_script(
       'kitty-app', get_template_directory_uri().'/js/app.js',
        array('jquery'), '',true
        );

wp_enqueue_style(
        'kitty-style',get_stylesheet_uri()
        );
wp_enqueue_style(
        'kitty-animations',get_template_directory_uri().'/css/animations',
        );
wp_enqueue_style(
        'kitty-fonts','http://fonts.googleapis.com/css?family=Montserrat:400,700'
        );
}
/*wp_enqueue_script('jquery');
/*wp_enqueue_script('underscore');
wp_enqueue_script('jquery-color');
/*wp_enqueue_script('jquery-masonry');*/

function wpb_exclude_from_home($query) {
      if ($query->is_home() ) {
          $query->set('post__not_in', array(1,47));
      }
}
/*for 404.php css style*/ 
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

//Add specific CSS class by filter
add_filter( 'body_class','kitty_body_classes');
function kitty_body_classes($classes)
{
    $slug = get_post_field('post_name', get_post());
    
    $classes = array ($slug);
    
    return $classes;
    
}
/**
 * Sidebars & Widgets
 */
add_action( 'widgets_init', 'kitty_widgets_init' );
function kitty_widgets_init()
{
    register_sidebar( array(
        'name'          => __( 'Primary' ),
        'id'            => 'primary',
        'description'   => __( 'A short description of the sidebar.' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
?>


