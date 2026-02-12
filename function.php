<?php
function baurpub_setup() {
 add_theme_support( 'title-tag' );
 add_theme_support( 'post-thumbnails' );
 register_nav_menus( array(
       'primary' => __( 'Menu principale', 'bauerpub' ),
   ) );

   add_action( 'after_setup_theme', 'baurpub_setup' );
}

function bauerpub_assets() {
       wp_enqueue_style(
       'bauerpub-style',
       get_stylesheet_uri(),
       array(),
       '1.0'
   );
}

add_action( 'wp_enqueue_scripts', 'bauerpub_assets' ); 