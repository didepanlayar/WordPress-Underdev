<?php
/**
 * Underdev functions and definitions
 *
 * @package Underdev
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Underdev includes directory.
$underdev_inc_dir = 'inc';

$underdev_includes = ([
    '/enqueue.php',
    '/setup.php',
]);

// Include files.
foreach ( $underdev_includes as $file ) {
	require_once get_theme_file_path( $underdev_inc_dir . $file );
}