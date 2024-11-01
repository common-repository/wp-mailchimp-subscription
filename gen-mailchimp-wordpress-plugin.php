<?php
/*
Plugin Name: Mailchimp Subscription Custom Form
Plugin URI: http://www.upscalethought.com
Description: Mailchimp Subscription Custom Form plugin is to intigreate mailchimp subscription at wp widget area or page/post popup. You Can custom design your popup from admin panel plugin options.
Version: 1.2
Author: upscalethought
Author URI: http://www.upscalethought.com
*/

define("USTS_MCWP_BASE_URL", WP_PLUGIN_URL.'/'.plugin_basename(dirname(__FILE__)));

add_action('init', 'set_usts_mcwp_cookie');
function set_usts_mcwp_cookie() {    
    if (!isset($_COOKIE['wpmc_cookie'])) {        
        if(get_option('wpmc_popup_cookie')==0){
          setcookie("wpmc_cookie",1, time()+15);
        }else{
          setcookie("wpmc_cookie",1, time()+24*3600*get_option('wpmc_popup_cookie'));
        }
    }
}

include ('includes/usts-mcwp-admin.php');
include ('includes/usts-mcwp-popup-setting.php');
include ('includes/usts-mcwp-popup-view.php');
include ('includes/usts-mcwp-init.php');

function usts_mcwp_pro_version(){
	include_once('includes/usts_wp_mailchimp_pro_version.php');
}
function usts_mcwp_init(){
  wp_enqueue_style('wpmc-popup',esc_url(USTS_MCWP_BASE_URL.'/css/usts-mcwp-popup.css'));
  wp_enqueue_style('wpmc-style',esc_url(USTS_MCWP_BASE_URL.'/css/usts-mcwp-style.css'));
  wp_enqueue_style('wpmc-tab-style',esc_url(USTS_MCWP_BASE_URL.'/css/usts-tab-style.css'));
  
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'wpmc-jscolor', esc_url(plugins_url( '/js/colorpicker/jscolor.js', __FILE__ )));
  wp_enqueue_script( 'wpmc-popup', esc_url(plugins_url( '/js/popup.js', __FILE__ )));  
}

add_action('init','usts_mcwp_init');
register_activation_hook( __FILE__, 'usts_mcwp_install');
register_deactivation_hook( __FILE__, 'usts_mcwp_uninstall');
?>