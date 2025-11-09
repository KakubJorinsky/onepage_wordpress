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

function strop_disable_wp_default_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');

    wp_dequeue_style('global-styles');

    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    wp_dequeue_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'strop_disable_wp_default_styles', 100);
