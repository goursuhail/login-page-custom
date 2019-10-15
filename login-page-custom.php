<?php

/*
Plugin Name: Login Page Customize Plugin
Plugin URI: https://webtechstreet.com/
Description: The entire collection of Custom Login page Plugin modules.
Version: 1.5.2
Author: Suhail Gour
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

*/

if (! defined('ABSPATH')){

    exit; // exit if accessed directly.
}

define('CLP_FILE', __FILE__);
define('CLP_URL', plugins_url('/', __FILE__));
define('CLP_PATH', plugin_dir_path(__FILE__));
define('CLP_SCRIPT_SUFFIX', defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min');
define('CLP_VERSION', '1.5.2');


require_once CLP_PATH.'/includes/bootstrap.php';

?>