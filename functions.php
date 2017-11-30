<?php

define('THEME_URL', get_bloginfo('template_url') . '/');

define ('SITE_NAME', get_bloginfo('name'));

define ('SITE_URL', get_bloginfo('url'));


add_action( 'after_setup_theme', 'custom_setup' );

function custom_setup(){
	register_nav_menu( 'menu-header', 'Cabeçalho' );

	add_theme_support( 'post-thumbnails' );

	add_filter( 'excerpt_length', 'custom_excerpt_length' );

	add_filter( 'excerpt_more', 'custom_exerpt_more' );

	add_image_size( 'cover', 353, 326, true );

	add_filter( 'post_thumbnail_html', 'custom_thumbnail_html' );

}

function custom_excerpt_length(){

	return 10;
}

function custom_exerpt_more(){
	
	return '...';

}

function custom_thumbnail_html($html){
	return preg_replace(array(
		'/height="\d*"\s/',
		'/width="\d*"\s/'
		),
		 '',$html);
}

