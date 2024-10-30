<?php /*
Plugin Name:  Maths Calculator 
Plugin URI : https://profiles.wordpress.org/mehtashail/
Description: Simple Addition , Substraction, Multification, Division , Modulo, Square
             Squar Root , Sine, Cosine , Tan, Round Numbers.
Version: 1.0.0
Author: Shail Mehta
Author URI:https://profiles.wordpress.org/mehtashail/
Text Domain: wporg
*/
?>
<?php
// Prevent direct file access
if (!defined('ABSPATH')) {
    exit;
}
defined('WMCALCULATOR_ROOT') or define('WMCALCULATOR_ROOT', plugin_dir_path(__FILE__));

/*Activation & Deactivation */
function __construct()
{
    register_activation_hook(__FILE__, 'wm_calculator_install');
    register_deactivation_hook(__FILE__, 'wm_calculator_install');
}

/*Plugin Install*/
function wm_calculator_install()
{
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
}
/*Css & JS File*/
function wm_calculator_css()
{
    wp_enqueue_style('wm-calculator-style', plugin_dir_url(__FILE__) . 'style.css');
    wp_enqueue_script('wm-calculator-script', plugin_dir_url(__FILE__) . 'js/operations.js');
}

add_action('admin_init', 'wm_calculator_css', 1);
/*Admin Menu*/
function wm_calculator_menu()
{
    add_menu_page('Calculators', //page title
        'Calculators', //menu title
        'manage_options', //capabilities
        'wm_calculator', //menu slug
        'wm_calculator', //function
        'dashicons-editor-justify'
    );
}
add_action('admin_menu', 'wm_calculator_menu');
include(WMCALCULATOR_ROOT . 'wm-calculator.php');
?>