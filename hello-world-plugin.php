<?php
/**
 * Plugin Name: Hello World
 * Description: This is our first plugin which creates some information widget to admin dashboard as well as admin notice
 * Author: Bayazid Hasan
 * Version: 1.0.0
 * Text Domain: hello-world
 * Author URI: https://github.com/developerbayazid
 * Plugin URI: https://github.com/developerbayazid
*/

//Admin  Notice
add_action('admin_notices', 'hw_show_success_message');

function hw_show_success_message(){
    echo '<div class="notice notice-success is-dismissible"><p>Hello, I am a success message.</p></div>';
}

function hw_show_error_message(){
    echo '<div class="notice notice-error is-dismissible"><p>Hello, I am an error message.</p></div>';
}
function hw_show_information_message(){
    echo '<div class="notice notice-info is-dismissible"><p>Hello, I am an informational message.</p></div>';
}
function hw_show_warning_message(){
    echo '<div class="notice notice-warning is-dismissible"><p>Hello, I am a warning message.</p></div>';
}

//Dashboard Widget
add_action('wp_dashboard_setup', 'hw_dashboard_widget');

function hw_dashboard_widget(){
    wp_add_dashboard_widget('hw_hello_world', 'HW - Hello World Widget', 'hw_custom_dashboard_widget');
}
function hw_custom_dashboard_widget(){
    esc_html_e('Hello World Custom Widget', 'hello-world');
}


?>