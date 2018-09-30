<?php
add_filter('show_admin_bar', '__return_false');   
add_action('wp_enqueue_scripts', 'ctheme_addstyle');
add_action('after_setup_theme', 'ctheme_register_nav_menu');
add_action('widgets_init', 'ctheme_register_my_widgets' );
function ctheme_addstyle(){
    wp_enqueue_style('main_style', get_stylesheet_uri());
}

function ctheme_register_nav_menu() {
    register_nav_menu( 'primary-menu', 'Primary Menu' );
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

function ctheme_register_my_widgets() {
    register_sidebar([
        'name'          => 'Right sidebar',
	'id'            => "sidebar-right",
	'description'   => 'Правая колонка',
        'before_widget' => '<div class="templatemo_list">',
	'after_widget'  => "</div><div class='cleaner_h40'></div>\n",
	'before_title'  => '<h4>',
	'after_title'   => "</h4>\n",
    ]); 
}
/*Длина по которому режется текст*/
add_filter( 'excerpt_length', function(){
	return 1;
} );

add_filter('excerpt_more', function($more) {
	return '...';
});
