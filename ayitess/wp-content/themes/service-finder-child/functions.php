<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}
/* enqueue scripts and style from parent theme */
    
// function servicefinder_styles() {
//     wp_enqueue_style( 'child-style', get_stylesheet_uri(),
//     array( 'service_finder-css-style' ), wp_get_theme()->get('Version') );
// }
// add_action( 'wp_enqueue_scripts', 'service_finder-css-style');

var_dump(get_template_directory());
require get_template_directory() . '/lib/genral-functions.php'; //Genral Functions