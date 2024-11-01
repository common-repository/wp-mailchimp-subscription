<?php if(!defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
function usts_mcwp_admin_option(){
  if(isset($_GET['act']) && $_GET['act']=='wpmc_save_option'){
  	if(check_admin_referer('usts_add_mailchimp_settings')){
		if( current_user_can( 'administrator' ) ){	
			if( current_user_can( 'administrator' ) ){
				update_wpmc_option();
			}
			else{
				echo '<div id="message" class="updated fade"><p>You Have to be Adminiastrator to Change Settings!</p></div>';
			}
		}
    }
  }
?>
  <div class="wrap">		
  <div id="poststuff" class="metabox-holder has-right-sidebar">
  <div id="post-body"><div id="post-body-content"><div id="namediv2" class="stuffbox">
  <h3>Mailchimp Setting</h3>
  <div class="inside">
  <form name="wpmc_add_form" id="wpmc_admin_form" method="post" enctype="multipart/form-data" action="admin.php?page=wp-mailchimp-subscription/includes/usts-mcwp-init.php&act=wpmc_save_option">
  <?php wp_nonce_field('usts_add_mailchimp_settings'); ?>	
  <table>
    <tr>
      <td width="150px">Api Key:</td>
      <td> <input type="text" name="mcpop_key" id="mcpop_key" size="70%" value="<?php echo esc_attr(get_option('mcpop_key'))?>" /></td>
    </tr>    
    <tr>
      <td width="150px"> List Id:</td>
      <td><input type="text" name="mcpop_list_id" id="mcpop_list_id" size="70%" value="<?php echo esc_attr(get_option('mcpop_list_id'))?>" /></td>
    </tr>
    <tr> 
				<td valign="top" width="150" scope="row">Opt-in:</td>
				<td>            
          <p><label><input type="radio" name="wpmc_opt_in" <?php if (esc_attr(get_option('wpmc_opt_in'))=='0'):?> checked="checked"<?php endif;?> value="0" /> Single Opt-in</label></p>
          <p><label><input type="radio" name="wpmc_opt_in" <?php if (esc_attr(get_option('wpmc_opt_in'))=='1'):?> checked="checked"<?php endif;?> value="1" /> Double Opt-in</label></p>
				</td>
		</tr>
    <tr>
      <td colspan="2" align="left"><input type="submit" value="Save" class="button-primary" style="width:80px; border:none;" />
      </td>
    </tr>
    
  </table>
  </form>    
  </div>
  </div></div></div>
  </div>
  </div>
<?php  
  }
function update_wpmc_option(){
   update_option('mcpop_key', sanitize_text_field($_POST['mcpop_key']));
   update_option('mcpop_list_id', sanitize_text_field($_POST['mcpop_list_id']));
   update_option('wpmc_opt_in', sanitize_text_field($_POST['wpmc_opt_in']));
}
?>