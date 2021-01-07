<?php

function load_stylesheets()
{

    wp_register_style('bootstrapstylesheet', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrapstylesheet');

    wp_register_style('mystyle', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('mystyle');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true);
    add_action('wp_enqueue_script', 'jquery');
}

add_action('wp_enqueue_scripts', 'load_jquery');


function load_js()
{

    wp_register_script('myjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    // version 1, true if you want it to be included in footer
    wp_enqueue_script('myjs');

}

add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');

register_nav_menus(

    array(

        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),

    )
);

add_theme_support('post-thumbnails');

// true for hard crop
add_image_size('smallest', 200, 200, true);
add_image_size('largest', 800, 800, true);
