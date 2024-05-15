<?php

/**
 * Theme setup.
 */
function theme_setup()
{
	add_theme_support('title-tag');

	register_nav_menus();

	add_theme_support(
		'html5',
		array(
			'search-form',
			'gallery',
			'caption',
		)
	);

	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

	add_theme_support('align-wide');
	add_theme_support('wp-block-styles');

	add_theme_support('editor-styles');
	add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'theme_setup');

/**
 * Enqueue theme assets.
 */
function theme_enqueue_scripts()
{
	$theme = wp_get_theme();

	wp_enqueue_style('theme', theme_asset('css/app.css'), array(), $theme->get('Version'));
	wp_enqueue_style('theme-custom', theme_asset('css/custom.css'), array(), $theme->get('Version'));
	wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), '3.12.5');
	wp_enqueue_script('theme', theme_asset('js/app.js'), array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function theme_asset($path)
{
	if (wp_get_environment_type() === 'production') {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}
