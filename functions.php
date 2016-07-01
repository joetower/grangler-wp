<?php

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, array( 'center', 'center') ); // 150 pixels wide by 150 pixels tall, crop from the center

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'teaser-square', 300, 300, true ); //300 square pixels cropped
    add_image_size( 'teaser-square-large', 500, 500, true ); //300 square pixels cropped

}

?>
