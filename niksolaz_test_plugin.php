<?php
/*
Plugin Name: niksolaz_test_plugin
Version: 1.0
Description: Descrizione del plugin
Author: Nicola Solazzo
Author URI: http://www.nicolasolazzo.com
*/

define( 'MY_PLUGIN_PATH', plugin_dir_path(__FILE__));
define( 'MY_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once(MY_PLUGIN_PATH . '/niksola_test_plugin.php');

wp_register_script( ‘my’, MY_PLUGIN_URL . ‘js/my.js’, array( ‘jquery’ ), ‘1.0’, true );
