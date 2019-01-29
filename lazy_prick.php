<?php
/**
 * @package  ye_plugin2
 */
/*
Plugin Name: lazy_prick
Plugin URI: http://lazy_prick.com
Description: Ay yo, diz be plugin. Diz a good plugin.
Version: 1.0.0
Author: Nunya Buznez
Author URI: http://nunya.com
License: GPLv2 or DEATH
Text Domain: lazy_plugin
 */
//Exit if accessed directly
if( !defined('ABSPATH')) exit();

add_action( 'the_content', 'my_thank_you_text' );

add_action('the_content', 'add_script');

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for yeeting!</p>';
}

function add_script($content) {
    wp_enqueue_script('script', plugin_dir_url(__FILE__).'script.js');
    return $content .= '<div id="clock"></div>';
}
