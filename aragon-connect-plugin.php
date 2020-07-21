<?php
/**
 * Plugin Name: Aragon Connect
 * Plugin URI: 
 * Description: Aragon Connect.
 * Version: 1.0
 * Author: Jamil Bashir
 * Author URI: 
 */
/**
 * WordPress Setting Page for a React.
 *
*/
//if directly call this file its abort
 
 if(!defined('tmg_plugin_version')){
		define('tmg_plugin_version','1.0.0');
}
//define path of the files
if(!defined('tmg_plugin_dir')){
		define('tmg_plugin_dir',plugin_dir_url(__FILE__));
}

if(!function_exists('tmg_plugin_scripts')){
	function tmg_plugin_scripts()
	{
		wp_enqueue_style('tmg-css',tmg_plugin_dir.'assets/css/style.css');
		wp_enqueue_script('tmg-js',tmg_plugin_dir.'assets/js/main.js','jQuery','1.0.0',true);
	}
	add_action('wp_enqueue_scripts','tmg_plugin_scripts');
}
 
function tmg_register_aragon_settings_html() {
     
} 
function aragon_register_menu_page(){
	add_menu_page('Aragon Voting','Aragon Settings','manage_options','tmg-settings','tmg_register_aragon_settings_html','dashicons-thumbs-up',30);
 }
 add_action('admin_menu','aragon_register_menu_page');

function tmg_plugin_settings(){
	register_setting('tmg-settings','tmg_vote_btn_label');
	add_settings_section();
	add_settings_field();
}
add_action('admin_init','tmg_plugin_settings');