<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://www.ashleysolomon.com/
 * @since             1.0.0
 * @package           Outsoar_Wp_Plugin_Boilerplate
 *
 * @wordpress-plugin
 * Plugin Name:       Outsoar Boilerplate
 * Plugin URI:        https://outsoar-boilerplates
 * Description:       Outsoar Boilerplate Plugin automates coding tasks, enforces standards, and enhances collaboration, saving time and ensuring consistency in development projects.
 * Version:           1.0.0
 * Author:            Ashley Solomon
 * Author URI:        https://https://www.ashleysolomon.com//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       outsoar-wp-plugin-boilerplate
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'OUTSOAR_WP_PLUGIN_BOILERPLATE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-outsoar-wp-plugin-boilerplate-activator.php
 */
function activate_outsoar_wp_plugin_boilerplate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-outsoar-wp-plugin-boilerplate-activator.php';
	Outsoar_Wp_Plugin_Boilerplate_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-outsoar-wp-plugin-boilerplate-deactivator.php
 */
function deactivate_outsoar_wp_plugin_boilerplate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-outsoar-wp-plugin-boilerplate-deactivator.php';
	Outsoar_Wp_Plugin_Boilerplate_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_outsoar_wp_plugin_boilerplate' );
register_deactivation_hook( __FILE__, 'deactivate_outsoar_wp_plugin_boilerplate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-outsoar-wp-plugin-boilerplate.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_outsoar_wp_plugin_boilerplate() {

	$plugin = new Outsoar_Wp_Plugin_Boilerplate();
	$plugin->run();

}
run_outsoar_wp_plugin_boilerplate();
