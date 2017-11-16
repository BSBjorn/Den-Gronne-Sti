<?php
add_action( 'wp_enqueue_scripts', 'dgs_storefront_styles' );
function dgs_storefront_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


function cc_mime_types($mimes) {
   $mimes['svg'] = 'image/svg+xml';
   return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');
