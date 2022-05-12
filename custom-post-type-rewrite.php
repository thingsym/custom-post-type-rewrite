<?php
/**
 * Plugin Name: Custom Post Type Rewrite
 * Plugin URI:  https://github.com/thingsym/custom-post-type-rewrite
 * Description: This WordPress plugin adds default custom post type permalinks.
 * Version:     1.1.4
 * Author:      thingsym
 * Author URI:  http://www.thingslabo.com/
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: custom-post-type-rewrite
 * Domain Path: /languages
 *
 * @package         Custom_Post_Type_Rewrite
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( '__CUSTOM_POST_TYPE_REWRITE__', __FILE__ );

require_once plugin_dir_path( __FILE__ ) . 'inc/class-custom-post-type-rewrite.php';

if ( class_exists( 'Custom_Post_Type_Rewrite' ) ) {
	new Custom_Post_Type_Rewrite();
};
