<?php
add_filter('show_admin_bar', '__return_false');
add_action('wp_enqueue_scripts', 'ctheme_addstyle');
add_action('after_setup_theme', 'ctheme_register_nav_menu');
add_action('widgets_init', 'ctheme_register_my_widgets' );
function ctheme_addstyle(){
    wp_enqueue_style('main_style', get_stylesheet_uri());
}

function ctheme_register_nav_menu() {
    register_nav_menu('primary-menu', 'Primary Menu');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('post-formats', array( 'aside', 'quote' ));
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
add_filter('pre_get_document_title', function($t){
        if(is_single()){
            $t = CFS()->get('tag_title');
        }
        return $t;
});

add_filter('widget_text', 'do_shortcode');
add_shortcode('map', function(){
    $ya_map = '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A799dcb2b5d68c58d9e17332865fe1ce5633d3fa9893e79d71c1b72f85227a7b1&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>';
    return $ya_map;  
});

add_filter('the_content', function($content){
    $str = '';
    if(is_home() || is_category()){
        $content_arr = explode(' ', $content);
        for($i = 0; $i < 2; $i++){
            $str .= $content_arr[$i] . ' ';
        }
        return trim($str) . '...';
    }
    return $content;
});
/*
Длина по которому режется текст
add_filter( 'excerpt_length', function(){
	return 1;
} );
add_filter('excerpt_more', function($more) {
	return '...';
});
*/