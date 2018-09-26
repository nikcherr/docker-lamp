<?php
add_filter('show_admin_bar', '__return_false');   
add_action('wp_enqueue_scripts', 'ctheme_addstyle');

function ctheme_addstyle(){
    wp_enqueue_style('main_style', get_stylesheet_uri());
}
