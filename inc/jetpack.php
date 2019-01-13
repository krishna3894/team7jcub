<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package team 7 cms
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function cmsassignment2_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'cmsassignment2_jetpack_setup' );
