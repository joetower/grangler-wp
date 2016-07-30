<?php

// custom image sizes
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, array( 'center', 'center') ); // 150 pixels wide by 150 pixels tall, crop from the center

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'teaser-square', 300, 300, true ); //300 square pixels cropped
    add_image_size( 'teaser-square-large', 500, 500, true ); //300 square pixels cropped

}

// add theme js

function scripts_with_jquery() {
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/js/scripts.min.js', array( 'jquery' ) );

    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'scripts_with_jquery' );


// custom except function

function excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt).'...';
 } else {
 $excerpt = implode(" ",$excerpt);
 }
 $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
 return $excerpt;
}

function content($limit) {
 $content = explode(' ', get_the_content(), $limit);
 if (count($content)>=$limit) {
 array_pop($content);
 $content = implode(" ",$content).'...';
 } else {
 $content = implode(" ",$content);
 }
 $content = preg_replace('/[.+]/','', $content);
 $content = apply_filters('the_content', $content);
 $content = str_replace(']]>', ']]&gt;', $content);
 return $content;
}

// remove styles
wp_dequeue_style('style-lazyload.min');

?>
