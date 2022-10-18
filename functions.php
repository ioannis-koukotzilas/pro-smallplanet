<?php

/**
 * Monoscopic functions and definitions.
 */

if (!defined('MONOSCOPIC_VERSION')) {
	// Replace the version number of the theme on each release.
	define('MONOSCOPIC_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function monoscopic_setup()
{

	// Let WordPress manage the document title.
	add_theme_support('title-tag');

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Main Menu', 'monoscopic'),
		)
	);

	// Switch default core markup to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action('after_setup_theme', 'monoscopic_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 */
function monoscopic_content_width()
{
	$GLOBALS['content_width'] = apply_filters('monoscopic_content_width', 2560);
}
add_action('after_setup_theme', 'monoscopic_content_width', 0);

/**
 * Enqueue scripts and styles.
 */
function monoscopic_scripts()
{
	// CSS
	wp_enqueue_style('style', get_stylesheet_uri(), array(), MONOSCOPIC_VERSION);
	wp_enqueue_style('normalize', get_template_directory_uri() . '/src/css/normalize.css', array(), MONOSCOPIC_VERSION);
	wp_enqueue_style('app', get_template_directory_uri() . '/src/css/app.css', array(), MONOSCOPIC_VERSION);
	wp_enqueue_style('site-header', get_template_directory_uri() . '/src/css/site-header.css', array(), MONOSCOPIC_VERSION);
	wp_enqueue_style('site-main', get_template_directory_uri() . '/src/css/site-main.css', array(), MONOSCOPIC_VERSION);
	wp_enqueue_style('site-footer', get_template_directory_uri() . '/src/css/site-footer.css', array(), MONOSCOPIC_VERSION);

	// JS
	wp_enqueue_script('app', get_template_directory_uri() . '/src/js/app.js', array(), MONOSCOPIC_VERSION, true);
}
add_action('wp_enqueue_scripts', 'monoscopic_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';




// add_filter('perfmatters_lazyload_youtube_thumbnail_resolution', function($resolution) {
// 	if(!wp_is_mobile()) {
// 	$resolution = 'maxresdefault';
// 	}
// 	return $resolution;
// 	});