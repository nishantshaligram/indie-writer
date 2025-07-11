<?php
define( 'IW_VERSION', '1.0.0' );
define( 'IW_PATH', get_stylesheet_directory_uri() );

function indie_writer_enqueue_styles() {
    wp_enqueue_style('indie-writer-style', get_stylesheet_uri());

    $blocks = array(
        'core/categories' => array(
            'style_handle' => 'iw-categories',
            'style_file_path' => '/assets/css/blocks/categories.css',
        ),
        'core/navigation' => array(
            'style_handle' => 'iw-navigation',
            'style_file_path' => '/assets/css/blocks/navigation.css',
        ),
        'core/latest-posts' => array(
            'style_handle' => 'iw-latest-posts',
            'style_file_path' => '/assets/css/blocks/latest-posts.css',
        ),
        'core/comments' => array(
            'style_handle' => 'iw-comments',
            'style_file_path' => '/assets/css/blocks/comments.css',
        ),
        'core/post-author' => array(
            'style_handle' => 'iw-post-author',
            'style_file_path' => '/assets/css/blocks/post-author.css',
        ),
        'core/query-pagination' => array(
            'style_handle' => 'iw-query-pagination',
            'style_file_path' => '/assets/css/blocks/query-pagination.css',
        ),
        'core/block-quote' => array(
            'style_handle' => 'iw-block-quote',
            'style_file_path' => '/assets/css/blocks/block-quote.css',
        ),
    );
    foreach( $blocks as $block_style ) {
        wp_enqueue_style( $block_style['style_handle'], IW_PATH . $block_style['style_file_path'], array(), IW_VERSION, 'all' );
    }
}
add_action('wp_enqueue_scripts', 'indie_writer_enqueue_styles');


function indie_writer_theme_steup() {
    $blocks = array(
        'core/categories' => array(
            'label' => __('IW Categories', 'indie-writer'),
            'style_handle' => 'iw-categories',
        ),
        'core/navigation' => array(
            'label' => __('IW navigation', 'indie-writer'),
            'style_handle' => 'iw-navigation',
        ),
        'core/latest-posts' => array(
            'label' => __('IW Latest Posts', 'indie-writer'),
            'style_handle' => 'iw-latest-posts',
        ),
        'core/comments' => array(
            'label' => __('IW Latest Posts', 'indie-writer'),
            'style_handle' => 'iw-comments',
        ),
        'core/post-author' => array(
            'label' => __('IW Latest Posts', 'indie-writer'),
            'style_handle' => 'iw-post-author',
        ),
        'core/query-pagination' => array(
            'label' => __('IW Latest Posts', 'indie-writer'),
            'style_handle' => 'iw-query-pagination',
        ),
        'core/block-quote' => array(
            'label' => __('IW Latest Posts', 'indie-writer'),
            'style_handle' => 'iw-block-quote',
        ),
    );
    foreach( $blocks as $block_name => $block_style ) {
        register_block_style( 
            $block_name,
            array(
                'name'=> $block_style['style_handle'],
                'label'=> $block_style['label'],
                'style_handle' => $block_style['style_handle'],
            )
        );
    }
}
add_action( 'after_setup_theme', 'indie_writer_theme_steup' );