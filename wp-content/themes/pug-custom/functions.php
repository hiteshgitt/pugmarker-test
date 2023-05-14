<?php
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	    	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );

    add_theme_support('post-thumbnails');
add_post_type_support( 'events', 'thumbnail' );    
function create_post_type() {
        register_post_type( 'events',
            array(
                'labels' => array(
                    'name' => __( 'events' ),
                    'singular_name' => __( 'events' )
                ),
                'public' => true,
                'has_archive' => true
            )
        );
    }
    add_action( 'init', 'create_post_type' );
?>