<?php
/**
 * Underdev enqueue scripts
 *
 * @package Underdev
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function get_enqueue() {
    // Stylesheet
    wp_enqueue_style('underdev-styles', get_template_directory_uri() . '/assets/css/theme.css', [], false);
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], false);
    // Scripts
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', [], false, true);
}

add_action( 'wp_enqueue_scripts', 'get_enqueue' );