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
	wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
	wp_enqueue_style('theme-custom', theme_asset('css/custom.css'), array(), $theme->get('Version'));
	wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), null, array('strategy' => 'defer', 'in_footer' => true));
	wp_enqueue_script('theme', theme_asset('js/app.js'), array('gsap'), null, array('strategy' => 'defer', 'in_footer' => true));
	wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, array('in_footer' => true));
	if (is_page('colleage-profile')) {
		wp_enqueue_script('colleage-profile', theme_asset('js/colleage-profile.js'), array('swiper'), null, array('strategy' => 'defer', 'in_footer' => true));
	}
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


function load_section_header($title = '', $subtitle = '', $description = '')
{
	// 传递参数给模板部分
	set_query_var('title', $title);
	set_query_var('subtitle', $subtitle);
	set_query_var('description', $description);

	get_template_part('template-parts/section-header');
}

function load_title_mark($title = '', $font_size)
{
	// 传递参数给模板部分
	set_query_var('title', $title);
	set_query_var('font_size', $font_size);

	get_template_part('template-parts/title-mark');
}
