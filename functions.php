<?php

// Start The Engine
include_once( get_template_directory() . '/lib/init.php' );

define( 'CHILD_THEME_NAME', 'Starter Beta' );
define( 'CHILD_THEME_VERSION', '1.0.0beta' );
define( 'CHILD_THEME_URL', 'https://bapidey.ml/' );

// Add Theme Support
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

// Get Normalize the CSS
wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/normalize.css' );

/* Custom Theme Options
add_theme_support( 'custom-header', array(
	'default-image' => get_stylesheet_directory_uri() . '/img/header.jpg',
	'width' => '1366',
	'height' => '200'
) );
 */

// Incert stylesheet
wp_enqueue_style( 'Montserrat', '//fonts.googleapis.com/css?family=Crimson+Text:400,400i' );
wp_enqueue_style( 'pacifico', '//fonts.googleapis.com/css?family=Arvo:400,400i' );
wp_enqueue_style( 'dashicons' );
