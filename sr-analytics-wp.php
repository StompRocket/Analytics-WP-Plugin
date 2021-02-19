<?php
/**
 * Plugin Name: StompRocket Analytics
 * Plugin URI: https://stomprocket.io
 * Description: Adds StompRocket Analytics support to your site
 * Version: 1.0
 * Author: swissChili
 * Author URI: https://swisschili.sh
 **/

function sr_analytics_print_script()
{
    echo '<script src="https://analytics.stomprocket.io/code.js"></script>';
}

add_action('wp_head', 'sr_analytics_print_script');
