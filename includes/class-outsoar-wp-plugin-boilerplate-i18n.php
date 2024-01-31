<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://www.ashleysolomon.com/
 * @since      1.0.0
 *
 * @package    Outsoar_Wp_Plugin_Boilerplate
 * @subpackage Outsoar_Wp_Plugin_Boilerplate/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Outsoar_Wp_Plugin_Boilerplate
 * @subpackage Outsoar_Wp_Plugin_Boilerplate/includes
 * @author     Ashley Solomon <ashcslmn@gmail.com>
 */
class Outsoar_Wp_Plugin_Boilerplate_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'outsoar-wp-plugin-boilerplate',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
