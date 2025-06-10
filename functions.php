<?php
function indie_writer_enqueue_styles() {
    wp_enqueue_style('indie-writer-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'indie_writer_enqueue_styles');