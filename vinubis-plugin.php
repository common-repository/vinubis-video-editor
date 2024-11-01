<?php

/*

Plugin Name: Vinubis Video Editor
Plugin URI: http://www.wp-video-editor.com/
Description: Our Wordpress Plugin enables you to transform your own videos with only a few clicks.
Version: 1.1.1
Author: WP Video Editor
Author URI: http://www.wp-video-editor.com/
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

*/


if(!defined('ABSPATH')) exit; 

add_action('admin_menu', 'vinubis_page_create');

function vinubis_page_create() {

	add_menu_page('Vinubis Video Editor', 'Vinubis Editor', 'edit_posts', 'vinubis_editor', 'vinubis_editor_settings_display', '', 3);

	add_submenu_page( 'vinubis_editor_settings_display', 'Vinubis Editor', 'Vinubis Editor', 'edit_posts', 'vinubis_editor');

	add_submenu_page( 'vinubis_editor', 'My Videos', 'My Videos', 'edit_posts', 'admin.php?page=vinubis_editor#/projects', '');

	add_submenu_page( 'vinubis_editor', 'File Library', 'File Library', 'edit_posts', 'admin.php?page=vinubis_editor#/library', '');

	add_submenu_page( 'vinubis_editor', 'My Account', 'My Account', 'edit_posts', 'admin.php?page=vinubis_editor#/account', '');

	add_submenu_page( 'vinubis_editor', 'Contact Us', 'Contact Us', 'edit_posts', 'vinubis-contact', 'vinubis_submenu_contact_page_callback');

	add_submenu_page( '', 'Vinubis About', 'Vinubis About', 'edit_posts', 'vinubis-about', 'vinubis_submenu_about_page_callback');

	add_submenu_page( '', 'Vinubis Send Email', 'Vinubis Send Email', 'edit_posts', 'vinubis-send-email', 'vinubis_submenu_send_email_page_callback');

}



function vinubis_submenu_new_page_callback() {

    include 'vinubis_new.php';

}

function vinubis_editor_settings_display() {

    include 'vinubis.php';

}

function vinubis_submenu_contact_page_callback() {

    include 'vinubis_contact.php';

}

function vinubis_submenu_about_page_callback() {

    include 'vinubis_about.php';

}

function vinubis_submenu_send_email_page_callback() {

    include 'vinubis-send-email.php';

}





add_action('admin_enqueue_scripts', 'vinubis_adding_scripts');

function vinubis_adding_scripts() {

	$screen = get_current_screen();

	if (($screen->base == 'toplevel_page_vinubis_editor')||($screen->base == 'vinubis-editor_page_vinubis-new')||($screen->base == 'vinubis-editor_page_vinubis-my-videos')||($screen->base == 'vinubis-editor_page_vinubis-my-account')||($screen->base == 'vinubis-editor_page_vinubis-contact')||($screen->base == 'admin_page_vinubis-about')) {



		wp_register_script('vinubis-script', plugins_url('/js/vinubis_script.js', __FILE__), array('jquery'),'1.1', true);

		wp_enqueue_script('vinubis-script');



		wp_register_style('vinubis-style', plugins_url('/css/vinubis_style.css', __FILE__));

		wp_enqueue_style('vinubis-style');



		wp_register_style('vinubis-font', '//fonts.googleapis.com/css?family=Roboto:400,700');

		wp_enqueue_style('vinubis-font');

	}	

}



