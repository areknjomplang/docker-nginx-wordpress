<?php
/**
 * Theme setup.
 */
add_action( 'after_setup_theme', 'wptheme_setup' );
function wptheme_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
    global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 640;
	}
}

/**
 * Register theme menus.
 */
add_action( 'init', 'wptheme_register_menus' );
function wptheme_register_menus() {
    $locations = [
        'primary' => __( 'Primary Menu', 'wptheme' ),
        'footer'  => __( 'Footer Menu', 'wptheme' )
    ];
    register_nav_menus( $locations );
}