<?php

if ( ! defined( 'WITEKPR_VERSION' ) ) {
// Replace the version number of the theme on each release.
    define( 'WITEKPR_VERSION', '1.0.0' );
}

if ( ! function_exists( 'witekpr_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function witekpr_setup() {
        /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on witekpr, use a find and replace
        * to change 'witekpr' to the name of your theme in all the template files.
        */
        load_theme_textdomain( 'witekpr', get_template_directory() . '/languages' );

// Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
        add_theme_support( 'title-tag' );

        /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'menus' );
        add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );

        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

// Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'witekpr_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

// Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 251,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
        add_theme_support('widgets');
        add_filter( 'use_widgets_block_editor', '__return_false' );
// Register Menu Locations
        register_nav_menus( [
            'main-menu' => esc_html__( 'Main Menu', 'witekpr' ),
        ]);
    }
endif;

add_action( 'after_setup_theme', 'witekpr_setup' );

