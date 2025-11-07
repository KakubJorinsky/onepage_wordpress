<?php
function vlastni_sablona_enqueue_styles() {
    $style_path = get_stylesheet_directory() . '/style.css';
    $style_uri  = get_stylesheet_directory_uri() . '/style.css';

    wp_enqueue_style(
        'vlastni-style',
        $style_uri,
        [],
        file_exists( $style_path ) ? filemtime( $style_path ) : null,
        'all'
    );
}
add_action('wp_enqueue_scripts', 'vlastni_sablona_enqueue_styles');
add_filter('show_admin_bar', '__return_false');
