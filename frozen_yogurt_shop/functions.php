<?php
$args = [
	'name'          => __( 'Left bar' ),
	'id'            => 'left',
	'before_widget' => '<div>',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',

	];

register_sidebar($args);
register_nav_menu ('header', 'top site menu');
register_nav_menu ('footer', 'bottom site menu');


$args_right = array(
	'name'   => __( 'Right bar'),
	'id'     => 'right',
	'before_widget' => '<div>',
	'after_widget'  => '</div>',
	'before_title'  => '<h1 class="widgettitle">',
	'after_title'   => '</h1>'
);

register_sidebar($args_right);