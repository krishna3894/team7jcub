<?php
/**
 * team 7 cms functions and definitions
 *
 * @package team 7 cms
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'cmsassignment2_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cmsassignment2_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on team 7 cms, use a find and replace
	 * to change 'cmsassignment2' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cmsassignment2', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'cmsassignment2' ),
		'footer' => __( 'Footer Menu', 'cmsassignment2' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'cmsassignment2_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // cmsassignment2_setup
add_action( 'after_setup_theme', 'cmsassignment2_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function cmsassignment2_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cmsassignment2' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Extra Sidebar', 'cmsassignment2' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'cmsassignment2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cmsassignment2_scripts() {
	wp_enqueue_style( 'cmsassignment2-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cmsassignment2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'cmsassignment2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cmsassignment2_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function add_link_atts($atts) {
  $atts['class'] = "nav-link";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

/**
 * Replaces the excerpt "more" text by a link.
 */
function new_excerpt_more($more) {
    global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '"> continue reading &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Customizer for Home Description
function team7cms_homedesc_text($wp_customize){
	$wp_customize->add_section('team7cms_homedesc_section', array(
		'title' => 'Home Description'
	));

	$wp_customize->add_setting('team7cms_homedesc_title1_section1', array(
		'default'=> 'Example Title Text'
	));

	$wp_customize->add_setting('team7cms_homedesc_text1_section1', array(
		'default'=> 'Example Text'
	));

	$wp_customize->add_control( new wp_customize_control($wp_customize, 'team7cms_homedesc_title_section2', array(
		'label'=> 'Title 1',
		'section'=> 'team7cms_homedesc_section',
		'settings'=> 'team7cms_homedesc_title1_section1'
	)));

	$wp_customize->add_control( new wp_customize_control($wp_customize, 'team7cms_homedesc_text_section2', array(
		'label'=> 'Text 1',
		'section'=> 'team7cms_homedesc_section',
		'settings'=> 'team7cms_homedesc_text1_section1',
		'type' => 'textarea'
	)));

	$wp_customize->add_setting('team7cms_homedesc_title2_section1', array(
		'default'=> 'Example Title Text'
	));

	$wp_customize->add_setting('team7cms_homedesc_text2_section1', array(
		'default'=> 'Example Text'
	));

	$wp_customize->add_control( new wp_customize_control($wp_customize, 'team7cms_homedesc_title2_section2', array(
		'label'=> 'Title 2',
		'section'=> 'team7cms_homedesc_section',
		'settings'=> 'team7cms_homedesc_title2_section1'
	)));

	$wp_customize->add_control( new wp_customize_control($wp_customize, 'team7cms_homedesc_text2_section2', array(
		'label'=> 'Text 1',
		'section'=> 'team7cms_homedesc_section',
		'settings'=> 'team7cms_homedesc_text2_section1',
		'type' => 'textarea'
	)));

	$wp_customize->add_setting('team7cms_homedesc_title3_section1', array(
		'default'=> 'Example Title Text'
	));

	$wp_customize->add_setting('team7cms_homedesc_text3_section1', array(
		'default'=> 'Example Text'
	));

	$wp_customize->add_control( new wp_customize_control($wp_customize, 'team7cms_homedesc_title3_section2', array(
		'label'=> 'Title 3',
		'section'=> 'team7cms_homedesc_section',
		'settings'=> 'team7cms_homedesc_title3_section1'
	)));

	$wp_customize->add_control( new wp_customize_control($wp_customize, 'team7cms_homedesc_text3_section2', array(
		'label'=> 'Text 1',
		'section'=> 'team7cms_homedesc_section',
		'settings'=> 'team7cms_homedesc_text3_section1',
		'type' => 'textarea'
	)));

}

add_action('customize_register', 'team7cms_homedesc_text');

// Customizer for Home Description

function team7cms_homehead_text($wp_customize){
	$wp_customize->add_section('team7cms_homehead_section', array(
		'title' => 'Home Head'
	));

	$wp_customize->add_setting('team7cms_homehead_title_section1', array(
		'default'=> 'Example Title Text'
	));

	$wp_customize->add_setting('team7cms_homehead_text_section1', array(
		'default'=> 'Example Text'
	));

	$wp_customize->add_control( new wp_customize_control($wp_customize, 'team7cms_homehead_title_section2', array(
		'label'=> 'Title 1',
		'section'=> 'team7cms_homehead_section',
		'settings'=> 'team7cms_homehead_title_section1'
	)));

	$wp_customize->add_control( new wp_customize_control($wp_customize, 'team7cms_homehead_text_section2', array(
		'label'=> 'Text 1',
		'section'=> 'team7cms_homehead_section',
		'settings'=> 'team7cms_homehead_text_section1'
	)));

}

	add_action('customize_register', 'team7cms_homehead_text');

// Dynamic Carousel 
	//Customize slider
	function team7cms_slider($wp_customize){
		$wp_customize->add_section('team7cms_slider_section', array(
			'title' => 'Slider'
		));
	
		$wp_customize->add_setting('team7cms_slider1_section1');

		$wp_customize->add_control( new wp_customize_cropped_image_control($wp_customize, 'team7cms_slider1_section2', array(
			'label'=> 'Image 1',
			'section'=> 'team7cms_slider_section',
			'settings'=> 'team7cms_slider1_section1',
			'width'=> 2000,
			'height'=>724
		)));

		$wp_customize->add_setting('team7cms_slider2_section1');

		$wp_customize->add_control( new wp_customize_cropped_image_control($wp_customize, 'team7cms_slider2_section2', array(
			'label'=> 'Image 2',
			'section'=> 'team7cms_slider_section',
			'settings'=> 'team7cms_slider2_section1',
			'width'=> 2000,
			'height'=>724
		)));

		$wp_customize->add_setting('team7cms_slider3_section1');

		$wp_customize->add_control( new wp_customize_cropped_image_control($wp_customize, 'team7cms_slider3_section2', array(
			'label'=> 'Image 3',
			'section'=> 'team7cms_slider_section',
			'settings'=> 'team7cms_slider3_section1',
			'width'=> 2000,
			'height'=>724
		)));
	
	}
	
		add_action('customize_register', 'team7cms_slider');

//Head info
//initializing
		function team7cms_info_text($wp_customize){
			$wp_customize->add_section('team7cms_info_section', array(
				'title' => 'Home Info'
			));
		
			$wp_customize->add_setting('team7cms_info_title_section1', array(
				'default'=> 'Example Title Text'
			));
		
			$wp_customize->add_setting('team7cms_info_text_section1', array(
				'default'=> 'Example Text'
			));
		
			$wp_customize->add_control( new wp_customize_control($wp_customize, 'team7cms_info_title_section2', array(
				'label'=> 'Title 1',
				'section'=> 'team7cms_info_section',
				'settings'=> 'team7cms_info_title_section1'
			)));
		
			$wp_customize->add_control( new wp_customize_control($wp_customize, 'team7cms_infotext_section2', array(
				'label'=> 'Text 1',
				'section'=> 'team7cms_info_section',
				'settings'=> 'team7cms_info_text_section1'
			)));
		
		}
		
			add_action('customize_register', 'team7cms_info_text');

			//Image Banner

	function team7cms_banner($wp_customize){
		$wp_customize->add_section('team7cms_banner_section', array(
			'title' => 'Banner'
		));
	
		$wp_customize->add_setting('team7cms_banner_section1');

	$wp_customize->add_control( new wp_customize_cropped_image_control($wp_customize, 'team7cms_banner_section2', array(
	'label'=> 'Banner',
	'section'=> 'team7cms_banner_section',
  	'settings'=> 'team7cms_banner_section1',
  		'width'=> 2000,
  		'height'=>500
  	)));
  }
  	add_action('customize_register', 'team7cms_banner');