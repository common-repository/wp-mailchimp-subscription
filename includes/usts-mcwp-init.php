<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function usts_mcwp_admin_menue(){
  $iconUrl= esc_url(USTS_MCWP_BASE_URL . '/images/logo.jpg');
	add_object_page ('WP Mailchimp', 'Mailchimp For WP', 'edit_theme_options', __FILE__, 'usts_mcwp_admin_option',$iconUrl);
	add_submenu_page( __FILE__, 'Mailchimp Settings','Mailchimp Settings', 'edit_theme_options', __FILE__,'usts_mcwp_admin_option' );  
    add_submenu_page(__FILE__, 'Settings for Popup', 'Settings for Popup', 'edit_theme_options', 'wpmc-popup-setting', 'usts_mcwp_popup_setting'); 
    add_submenu_page(__FILE__, 'PRO Version', 'PRO Version', 'edit_theme_options', 'pro-version', 'usts_mcwp_pro_version'); 
}

function usts_mcwp_install(){}
function usts_mcwp_uninstall(){}

add_action('admin_menu', 'usts_mcwp_admin_menue');
?>