<?php
/**
 * 
 * funtions
 * 
 * @since 1.0
 */

 require_once dirname(__FILE__). '/inc/template-tags.php';
//questa funzione serve per includere i file css e js del tema
function tema_ied_enqueue_style_and_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

        // stlye CSS
    wp_enqueue_style( 'tema-ied', get_stylesheet_uri(), array(),  $theme_version);
    // style js
    wp_enqueue_script( 'tema-ied', get_template_directory_uri() . '/assets/js/script.js', array(), $theme_version, true );
}

add_action( 'wp_enqueue_scripts', 'tema_ied_enqueue_style_and_scripts' );

function tema_ied_after_setup_theme() {

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'menus' );

    set_post_thumbnail_size( 170, 170 );

    add_image_size( 'custom_size', 1200, 900 );

    register_nav_menus( array(
        'primary-navigation' => 'Primary Navigation',
    ) );

}

add_action( 'after_setup_theme', 'tema_ied_after_setup_theme' );

?>