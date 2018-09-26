<?php
add_filter('show_admin_bar', '__return_false');   
add_action('wp_enqueue_scripts', 'ctheme_addstyle');
add_action('after_setup_theme', 'ctheme_register_nav_menu');

function ctheme_addstyle(){
    wp_enqueue_style('main_style', get_stylesheet_uri());
}

function ctheme_register_nav_menu() {
	register_nav_menu( 'primary-menu', 'Primary Menu' );
}
