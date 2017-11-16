<?php
add_action( 'wp_enqueue_scripts', 'dgs_storefront_styles' );
function dgs_storefront_enqueue_styles() {
  $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

   wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'child-style',
       get_stylesheet_directory_uri() . '/style.css',
       array( $parent_style ),
       wp_get_theme()->get('Version')
   );


}


function cc_mime_types($mimes) {
   $mimes['svg'] = 'image/svg+xml';
   return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');
