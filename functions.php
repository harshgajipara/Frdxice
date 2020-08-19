<?php

function load_files(){

	wp_enqueue_style('bootstrap',get_theme_file_uri('css/bootstrap.min.css'));
	wp_enqueue_style('font-awesome',get_theme_file_uri('css/font-awesome.css'));
	wp_enqueue_style('custom-fonts',get_theme_file_uri('css/custom-fonts.css'));
	wp_enqueue_style('style',get_theme_file_uri('css/style.css'));
	wp_enqueue_style('responsive',get_theme_file_uri('css/responsive.css'));

	wp_enqueue_script('jquery',get_theme_file_uri('js/jquery-1.12.4.min.js'),array(),'1.0',true);
	wp_enqueue_script('bootstrap',get_theme_file_uri('js/bootstrap.min.js'),array('jquery'),'1.0',true);

}

add_action('wp_enqueue_scripts','load_files');

function register_menu(){
	register_nav_menu('headerMenuLocation','Header Menu Location');
	register_nav_menu('FooterMenuLocation','Footer Menu Location');
}

add_action('after_setup_theme','register_menu');

add_theme_support('menus');
add_theme_support('custom-logo');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}