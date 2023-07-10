<?php

function start_setup() {
    add_theme_support('html5');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}

add_action( 'after_setup_theme', 'start_setup' );