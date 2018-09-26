<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset')?>" />
    <?php add_theme_support('title_tag'); ?>
    <meta name="keywords" content="free css templates, tripod, blog, theme" />
    <meta name="description" content="Tripod - free CSS template provided by templatemo.com" />
    <?php wp_head();?>
</head>
<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    	
        <div id="site_title">
            <a class="logo" href=<?php echo home_url();?>>
                <?php bloginfo('name');?></a>
            <span><?php bloginfo('description');?></span>    
        </div>
        
        <div id="templatemo_rss">
            <a href="" target="_parent">SUBSCRIBE<br /><span>OUR FEED</span></a>
    	</div>
    
    </div> <!-- end of header -->
    
    <div id="templatemo_menu">
        <?php wp_nav_menu([
        'theme_location'  => 'primary-menu',
        'container'       => null, 
	'container_class' => null, 
	'container_id'    => 'templatemo_menu',
        'items_wrap'      => '<ul>%3$s</ul>',
        ]); ?>
    </div> <!-- end of templatemo_menu -->
    
</div> <!-- end of header wrapper -->

<div id="templatemo_main_wrapper">
<div id="templatemo_content_wrapper">
