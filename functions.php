<?
add_action( 'wp_enqueue_scripts', 'davygame_scripts' );

function davygame_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri('style.css') );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/live.js');
    wp_enqueue_style( 'style-name', 'https://fonts.gstatic.com');
    wp_enqueue_style( 'style-name', 'https://fonts.googleapis.com/css2?family=Lato&family=Roboto:wght@700&display=swap');
    
    
    
}