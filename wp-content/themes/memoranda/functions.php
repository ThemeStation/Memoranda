<?php
/*ini_set("display_errors", "1");

ini_set("display_startup_errors", "1");

error_reporting(E_ALL);*/

if (function_exists('register_sidebar')){
	register_sidebar( array(
	'name' => 'Sidebar Main',
	'id' => 'sidebar_main',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
	) );
}

function new_excerpt_length($length){
	return 90;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more){
	global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



?>
	