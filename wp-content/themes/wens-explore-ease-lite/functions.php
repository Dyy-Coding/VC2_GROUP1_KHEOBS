<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


function wens_explore_ease_lite_scripts(){
   // enqueue parent style
	wp_enqueue_style('wens-explore-ease-lite-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'wens_explore_ease_lite_scripts');


function wens_explore_ease_lite_register_block_pattern_categories(){
    register_block_pattern_category(
        'wens-explore-ease-lite',
        array( 'label' => __( 'WENS Explore Ease Lite', 'wens-explore-ease-lite' ) )
    );

}
add_action('init', 'wens_explore_ease_lite_register_block_pattern_categories');

require get_stylesheet_directory() . '/tgm-plugin/tgm-hook.php';