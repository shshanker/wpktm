<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('twentyseventeen_locale_css')):
    function twentyseventeen_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'twentyseventeen_locale_css');

if (!function_exists('twentyseventeen_parent_css')):
    function twentyseventeen_parent_css()
    {
        wp_enqueue_style('twentyseventeen_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'twentyseventeen_parent_css', 10);

// END ENQUEUE PARENT ACTION
