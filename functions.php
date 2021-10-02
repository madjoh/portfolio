<?php 

//Gör så att jag kan ladda upp logotyp i WP
function theme_support_options() {
    $defaults = array(
    'height'      => 200,
    'width'       => 500,
    'flex-height' => true, 
    'flex-width'  => true
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   
   add_action( 'after_setup_theme', 'theme_support_options' );
 

function get_our_style_scripts(){
    //Ladda in CSS
    wp_enqueue_style('style', get_stylesheet_uri());
    //Ladda in google font
    wp_enqueue_style('main-google-font','//fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900');
    //Ladda in JS
    wp_enqueue_script('main-js', get_theme_file_uri('script.js'), NULL, '1.0',true);

    wp_enqueue_style('google-icons', '//fonts.googleapis.com/icon?family=Material+Icons');

}

add_action('wp_enqueue_scripts','get_our_style_scripts');

function theme_setup(){
    //Support för title-tag
    add_theme_support('title-tag');
    //Support för utvald bild
    add_theme_support('post-thumbnails');

    //Reg meny
    register_nav_menus(array(
        'mainmenu' => 'Main Menu',
        'categorymenu' => 'Category Menu'
    ));
}

add_action('after_setup_theme','theme_setup');


//För att byta ut <a> som genereras automatiskt av next och prev
function add_class_previous_post_link($html) {
    $html = str_replace('<a', '<a class="pinkbtn"',$html); 
    return $html;

}
add_filter('previous_post_link','add_class_previous_post_link');

function add_class_next_post_link($html) {
    $html = str_replace('<a', '<a class="pinkbtn"',$html);
    return $html;
}

add_filter('next_post_link','add_class_next_post_link'); 
 

// remove width & height attributes from images
//
function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );

function wpdocs_widget_init(){
    //Reg en widetplats
    register_sidebar(array(
        'name'          => 'Social Media Sidebar',
        'id'            => 'socialmediasection',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ));
    }
    add_action('widgets_init','wpdocs_widget_init');