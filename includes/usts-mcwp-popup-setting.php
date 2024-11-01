<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function usts_mcwp_reset(){
      update_option('wpmc_popup_active',1);
      update_option('wpmc_popup_required',0);      
			update_option('wpmc_popup_cookie',0);
      update_option('wpmc_popup_delay_time',2);
			update_option('wpmc_popup_w','520');
			update_option('wpmc_popup_h','300');		
			update_option('wpmc_popup_position','1');
      update_option('wpmc_popup_form_type','2');
      update_option('wpmc_popup_bg_color','FFFFFF');
      update_option('wpmc_popup_bg_color1','FFFFFF');
      update_option('wpmc_popup_bg_image','');      
			update_option('wpmc_popup_border_color','999999');		
			update_option('wpmc_popup_overlay_color','ffffff'); 
                  
      $wpmc_con='<div style="width:485px; height:120px; padding:10px; ">
<div style="width:445px; margin-left:10px; padding-top:10px; font-weight:bold;">SUBSCRIBE TO OUR NEWSLETTER</div><br />
<div style="width:80px; float:left; margin-left:10px;"><a href=""><img src="../images/message-icon1.png" alt="message-icon1" width="60" height="42" class="alignnone size-full wp-image-278" /></a></div><div style="width:350px; height:80px; float:left;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
</div>';
      $wpmc_con_2='<div style="width:240px; height:50px; text-align:center; font-size:12px; font-weight:bold; padding:10px;">SUBSCRIBE TO OUR NEWSLETTER</div>';
              
      update_option('wpmc_text',$wpmc_con);
      update_option('wpmc_text_2',$wpmc_con_2);
      update_option('wpmc_popup_button_text','Sign Up');
      update_option('wpmc_success_message','Successfully subscribed');
      
      update_option('wpmc_popup_radius_top_l','5');
      update_option('wpmc_popup_radius_top_r','5');
      update_option('wpmc_popup_radius_btm_l','5');
      update_option('wpmc_popup_radius_btm_r','5');
      
      update_option('wpmc_popup_txt_width','300');
      update_option('wpmc_popup_txt_color','666666');
      update_option('wpmc_popup_txt_bg_color','FFFFFF');
      update_option('wpmc_popup_txt_border_color','CCCCCC');
      update_option('wpmc_popup_txt_border_radius','2');
      
      update_option('wpmc_popup_btn_width','220');
      
      update_option('wpmc_popup_btn_color','6B2121');
      update_option('wpmc_popup_btn_color1','822E2E');
      update_option('wpmc_popup_btn_text_color','FFFFFF');
      update_option('wpmc_popup_btn_ol_color','6B2121');
      update_option('wpmc_popup_btn_ol_color1','963A3A');
      update_option('wpmc_popup_btn_ol_text_color','F4D0D0');
      update_option('wpmc_popup_btn_radius','2');
      
      update_option('wpmc_popup_bottom_content','1');      
      
			echo '<div id="message" class="updated fade"><p>Your settings were reset !</p></div>';
}


function usts_mcwp_popup_setting(){
  
  ?>
<script>
  function wpmc_popup_bg_upload(){
    formfield = jQuery('#wpmc_popup_bg_image').attr('name');
		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
		window.send_to_editor = function(html) {
      //alert(html);
			imgurl = jQuery(html).attr('src');
			jQuery('#wpmc_popup_bg_image').val(imgurl);
			tb_remove();
		}
		return false;
  }
</script>
  <?php
  		
		if(isset($_POST['wpmc_status_submit']) && $_POST['wpmc_status_submit']==1){	
			if(check_admin_referer('usts_add_popup_settings')){
			   if( current_user_can( 'administrator' ) ){
				  update_option('wpmc_popup_active',sanitize_text_field($_POST['wpmc_popup_active']));
				  update_option('wpmc_popup_required',sanitize_text_field($_POST['wpmc_popup_required']));      
				  update_option('wpmc_popup_cookie',intval($_POST['wpmc_popup_cookie']));
				  update_option('wpmc_popup_delay_time',sanitize_text_field($_POST['wpmc_popup_delay_time']));
				  update_option('wpmc_popup_w',intval($_POST['wpmc_popup_w']));
				  update_option('wpmc_popup_h',intval($_POST['wpmc_popup_h']));			
				  update_option('wpmc_popup_position',intval($_POST['wpmc_popup_position']));
				  update_option('wpmc_popup_form_type',intval($_POST['wpmc_popup_form_type']));      
				  update_option('wpmc_popup_bg_color',sanitize_text_field($_POST['wpmc_popup_bg_color']));
				  update_option('wpmc_popup_bg_color1',sanitize_text_field($_POST['wpmc_popup_bg_color1']));
				  update_option('wpmc_popup_bg_image',sanitize_text_field($_POST['wpmc_popup_bg_image']));      
				  update_option('wpmc_popup_border_color',sanitize_text_field($_POST['wpmc_popup_border_color']));			
				  update_option('wpmc_popup_overlay_color',sanitize_text_field($_POST['wpmc_popup_overlay_color']));      
				  update_option('wpmc_text',stripslashes(sanitize_text_field($_POST['wpmc_text'])));
				  update_option('wpmc_text_2',stripslashes(sanitize_text_field($_POST['wpmc_text_2'])));      
				  update_option('wpmc_popup_button_text',sanitize_text_field($_POST['wpmc_popup_button_text']));      
				  update_option('wpmc_success_message',stripslashes(sanitize_text_field($_POST['wpmc_success_message'])));
							  
				  update_option('wpmc_popup_radius_top_l',sanitize_text_field($_POST['wpmc_popup_radius_top_l']));
				  update_option('wpmc_popup_radius_top_r',sanitize_text_field($_POST['wpmc_popup_radius_top_r']));
				  update_option('wpmc_popup_radius_btm_l',sanitize_text_field($_POST['wpmc_popup_radius_btm_l']));
				  update_option('wpmc_popup_radius_btm_r',esc_attr($_POST['wpmc_popup_radius_btm_r']));      
				  update_option('wpmc_popup_txt_width',sanitize_text_field($_POST['wpmc_popup_txt_width']));
				  update_option('wpmc_popup_txt_color',sanitize_text_field($_POST['wpmc_popup_txt_color']));
				  
				  update_option('wpmc_popup_txt_bg_color',sanitize_text_field($_POST['wpmc_popup_txt_bg_color']));
				  update_option('wpmc_popup_txt_border_color',sanitize_text_field($_POST['wpmc_popup_txt_border_color']));
				  update_option('wpmc_popup_txt_border_radius',sanitize_text_field($_POST['wpmc_popup_txt_border_radius']));     
				  
				  update_option('wpmc_popup_btn_width',sanitize_text_field($_POST['wpmc_popup_btn_width']));
				  update_option('wpmc_popup_btn_color',sanitize_text_field($_POST['wpmc_popup_btn_color']));
				  update_option('wpmc_popup_btn_color1',sanitize_text_field($_POST['wpmc_popup_btn_color1']));
				  update_option('wpmc_popup_btn_text_color',sanitize_text_field($_POST['wpmc_popup_btn_text_color']));
				  update_option('wpmc_popup_btn_ol_color',sanitize_text_field($_POST['wpmc_popup_btn_ol_color']));
				  update_option('wpmc_popup_btn_ol_color1',sanitize_text_field($_POST['wpmc_popup_btn_ol_color1']));
				  update_option('wpmc_popup_btn_ol_text_color',sanitize_text_field($_POST['wpmc_popup_btn_ol_text_color']));
				  update_option('wpmc_popup_btn_radius',sanitize_text_field($_POST['wpmc_popup_btn_radius']));      
				  
				  update_option('wpmc_popup_bottom_content',sanitize_text_field($_POST['wpmc_popup_bottom_content']));      
				  
				  echo '<div id="message" class="updated fade"><p>Your settings were saved !</p></div>';
				}
				else{
					echo '<div id="message" class="updated fade"><p>Your Have to be Adminiastrator to Change Settings!</p></div>';
				}  
			}		
		}
		if(isset($_POST['wpmc_status_submit']) && $_POST['wpmc_status_submit']==2){
			if(check_admin_referer('usts_add_popup_settings')){
				usts_mcwp_reset();
			}
		}
	?>
	<h2>Popup Setting</h2>
	<form method="post" id="wpmc_options">
    	<?php wp_nonce_field('usts_add_popup_settings'); ?>	
    	<input type="hidden" name="wpmc_status_submit" id="wpmc_status_submit" value="2"  />
        <div class="tabs">
           <div class="tab" style="z-index:100;">
               <input type="radio" id="tab-1" name="tab-group-1" checked>
               <label for="tab-1">Core Setting</label>
               <div class="content">
               	 <table width="100%" cellspacing="2" cellpadding="5" class="editform">
                   <tr valign="top"> 
                        <td width="150" scope="row">Active plugin:</td>
                        <td>
                    <select name="wpmc_popup_active">
                        <option value="1"<?php if (esc_attr(get_option('wpmc_popup_active'))=='1'):?> selected="selected"<?php endif;?>>Yes</option>
                        <option value="0"<?php if (esc_attr(get_option('wpmc_popup_active'))=='0'):?> selected="selected"<?php endif;?>>No</option>                
                    </select>
                        </td>
                    </tr>
              
              <tr valign="top"> 
                        <td width="150" scope="row">Required:</td>
                        <td>
                    <select name="wpmc_popup_required">
                        <option value="1"<?php if (esc_attr(get_option('wpmc_popup_required'))=='1'):?> selected="selected"<?php endif;?>>Yes</option>
                        <option value="0"<?php if (esc_attr(get_option('wpmc_popup_required'))=='0'):?> selected="selected"<?php endif;?>>No</option>
                    </select>
                        </td>
                    </tr>
              
               <tr valign="top"> 
                        <td width="150" scope="row">Delay Time Before Popup Display:</td>
                        <td>
                    <select name="wpmc_popup_delay_time">
                      <?php for($i=0; $i<=100; $i++){?>
                        <option value="<?php echo esc_attr($i)?>"<?php if (esc_attr(get_option('wpmc_popup_delay_time'))==$i):?> selected="selected"<?php endif;?>><?php echo esc_attr( $i );?></option>
                      <?php }?>
                    </select> [Second]
                        </td>
                    </tr>
              
              <tr valign="top"> 
                        <td width="150" valign="top" scope="row">Display popup:</td>
                        <td>
                    <select name="wpmc_popup_cookie">
                        <option value="0"<?php if (esc_attr(get_option('wpmc_popup_cookie'))=='0'):?> selected="selected"<?php endif;?>>1 Min</option>
                        <option value="1"<?php if (esc_attr(get_option('wpmc_popup_cookie'))=='1'):?> selected="selected"<?php endif;?>>1 Day</option>
                        <option value="7"<?php if (esc_attr(get_option('wpmc_popup_cookie'))=='7'):?> selected="selected"<?php endif;?>>1 Week</option>
                        <option value="30"<?php if (esc_attr(get_option('wpmc_popup_cookie'))=='30'):?> selected="selected"<?php endif;?>>1 Month</option>
                        <option value="90"<?php if (esc_attr(get_option('wpmc_popup_cookie'))=='90'):?> selected="selected"<?php endif;?>>3 Month</option>
                        <option value="180"<?php if (esc_attr(get_option('wpmc_popup_cookie'))=='180'):?> selected="selected"<?php endif;?>>6 Month</option>
                        <option value="365"<?php if (esc_attr(get_option('wpmc_popup_cookie'))=='365'):?> selected="selected"<?php endif;?>>1 Year</option>
                    </select>
                        </td> 
                    </tr>
                    
                    <tr valign="top"> 
                        <td width="150" scope="row" valign="top" valign="middle">Display option:</td>
                        <td>
                            <p><label><input type="radio" name="wpmc_popup_position" <?php if (esc_attr(get_option('wpmc_popup_position'))=='1'):?> checked="checked"<?php endif;?> value="1" /> Home</label></p>
                           
                            <p><label><input type="radio" name="wpmc_popup_position" <?php if (esc_attr(get_option('wpmc_popup_position'))=='2'):?> checked="checked"<?php endif;?> value="2" /> Pages only</label></p>
                            
                            <p><label><input type="radio" name="wpmc_popup_position" <?php if (esc_attr(get_option('wpmc_popup_position'))=='3'):?> checked="checked"<?php endif;?> value="3" /> Single post only</label></p>
                            
                            <p><label><input type="radio" name="wpmc_popup_position" <?php if (esc_attr(get_option('wpmc_popup_position'))=='4'):?> checked="checked"<?php endif;?> value="4" /> Archives only</label></p>
                           
                            <p><label><input type="radio" name="wpmc_popup_position" <?php if (esc_attr(get_option('wpmc_popup_position'))=='0'):?> checked="checked"<?php endif;?> value="0" /> All</label></p>
                        </td> 
                    </tr>
                     <tr valign="top"> 
                        <td width="150" scope="row" valign="top" valign="middle">Form Fields:</td>
                        <td>
                            <p><label><input type="radio" name="wpmc_popup_form_type" <?php if (esc_attr(get_option('wpmc_popup_form_type'))=='1'):?> checked="checked"<?php endif;?> value="1" /> Email</label></p>
                           
                            <p><label><input type="radio" name="wpmc_popup_form_type" <?php if (esc_attr(get_option('wpmc_popup_form_type'))=='2'):?> checked="checked"<?php endif;?> value="2" /> Name and Email</label></p>
                            
                            <p><label><input type="radio" name="wpmc_popup_form_type" <?php if (esc_attr(get_option('wpmc_popup_form_type'))=='3'):?> checked="checked"<?php endif;?> value="3" /> First name, Last name and Email</label></p>
                            
                            
                        </td> 
                    </tr>
                    <tr style="display:none;">
                        <td valign="top">Container Border Radius:</td>
                        <td>
                          <table>
                          <td>
                            Top Left<br />
                            <input name="wpmc_popup_radius_top_l" size="4" maxlength="4" value="<?php echo esc_attr( (get_option('wpmc_popup_radius_top_l')));?>" /> px
                          </td>
                          <td>
                            Top Right<br />
                            <input name="wpmc_popup_radius_top_r" size="4" maxlength="4" value="<?php echo esc_attr( (get_option('wpmc_popup_radius_top_r')));?>" /> px
                          </td>
                          <td>
                            Bottom Left<br />
                            <input name="wpmc_popup_radius_btm_l" size="4" maxlength="4" value="<?php echo esc_attr( (get_option('wpmc_popup_radius_btm_l')));?>" /> px
                          </td>
                          <td>
                            Bottom Right<br />
                            <input name="wpmc_popup_radius_btm_r" size="4" maxlength="4" value="<?php echo esc_attr( (get_option('wpmc_popup_radius_btm_r')));?>" /> px [number only]
                          </td>
                        </table> 
                        </td>
                      </tr>
                      <tr valign="top"> 
                            <td width="150" scope="row">Bottom Content position:</td>
                            <td>
                        <select name="wpmc_popup_bottom_content">
                            <option value="0"<?php if (esc_attr(get_option('wpmc_popup_bottom_content'))=='0'):?> selected="selected"<?php endif;?>>Left</option>
                            <option value="1"<?php if (esc_attr(get_option('wpmc_popup_bottom_content'))=='1'):?> selected="selected"<?php endif;?>>Center</option> 
                            <option value="2"<?php if (esc_attr(get_option('wpmc_popup_bottom_content'))=='2'):?> selected="selected"<?php endif;?>>Right</option>               
                        </select>
                            </td>
                      </tr>
                 </table>   
               </div> 
           </div>
           <div class="tab" style="z-index:100;">
               <input type="radio" id="tab-2" name="tab-group-1">
               <label for="tab-2">Color Setting</label>
               <div class="content" >
                   <table width="100%" cellspacing="2" cellpadding="5" class="editform">
                   	  <tr style="display:none;">
                        <td>Popup background Color:</td>
                          <td> <input type="text" name="wpmc_popup_bg_color" size="5" id="wpmc_popup_bg_color" class="color" value="<?php echo esc_attr( get_option('wpmc_popup_bg_color'))?>" />
                            <input type="text" name="wpmc_popup_bg_color1" size="5" id="wpmc_popup_bg_color1" class="color" value="<?php echo esc_attr( get_option('wpmc_popup_bg_color1'))?>" />[gradient color]
                            </td>
                          </tr>
                          <tr style="display:none;">
                            <td scope="row">Popup background Image</td>
                            <td>
                              <input type="text" name="wpmc_popup_bg_image" id="wpmc_popup_bg_image" value="<?php echo esc_attr( get_option('wpmc_popup_bg_image'))?>" />
                            <input id="wpmc_popup_bg_upload_button" class="button" onclick="wpmc_popup_bg_upload();" type="button" value="Upload Image" />
                            </td>
                          </tr>
                          <tr>
                            <td>Popup border Color:</td>
                            <td>
                              <input type="text" name="wpmc_popup_border_color" size="10" id="wpmc_popup_border_color" class="color" value="<?php echo esc_attr( get_option('wpmc_popup_border_color'))?>" /> 
                            </td>
                          </tr>
                          <tr>
                        <td>Popup overlay Color:</td>
                        <td>
                          <input type="text" name="wpmc_popup_overlay_color" size="10" id="wpmc_popup_overlay_color" class="color" value="<?php echo esc_attr( get_option('wpmc_popup_overlay_color'))?>" /> 
                        </td>
                      </tr>
                      <tr>
                        <td valign="top">Subscription Text Box Option:</td>
                        <td>
                          <table>
                            <tr>
                              <td>Width</td>
                              <td>
                                <input name="wpmc_popup_txt_width" size="4" maxlength="4" value="<?php echo esc_attr(get_option('wpmc_popup_txt_width'));?>" /> px (number only)
                              </td>
                            </tr>
                            <tr>
                              <td>Font Color</td>
                              <td>
                                <input type="text" name="wpmc_popup_txt_color" size="4" id="wpmc_popup_txt_color" class="color" value="<?php echo esc_attr( get_option('wpmc_popup_txt_color'))?>" />
                              </td>
                            </tr>
                            <tr>
                              <td>Background Color </td>
                              <td>
                                <input type="text" name="wpmc_popup_txt_bg_color" size="4" id="wpmc_popup_txt_bg_color" class="color" value="<?php echo esc_attr( get_option('wpmc_popup_txt_bg_color'))?>" />
                              </td>
                            </tr>
                            <tr>
                              <td>Border Color </td>
                              <td>
                                <input type="text" name="wpmc_popup_txt_border_color" size="4" id="wpmc_popup_txt_border_color" class="color" value="<?php echo esc_attr( get_option('wpmc_popup_txt_border_color'))?>" />
                              </td>
                            </tr>
                       <tr valign="top"> 
                                <td width="150" scope="row">Border Radius:</td>
                                <td>
                            <select name="wpmc_popup_txt_border_radius">
                                <option value="0" <?php if (esc_attr(get_option('wpmc_popup_txt_border_radius'))==0):?> selected="selected"<?php endif;?>>0</option>
                                <option value="1" <?php if (esc_attr(get_option('wpmc_popup_txt_border_radius'))==1):?> selected="selected"<?php endif;?>>1</option>
                                <option value="2" <?php if (esc_attr(get_option('wpmc_popup_txt_border_radius'))==2):?> selected="selected"<?php endif;?>>2</option>
                                <option value="3" <?php if (esc_attr(get_option('wpmc_popup_txt_border_radius'))==3):?> selected="selected"<?php endif;?>>3</option>
                                <option value="4" <?php if (esc_attr(get_option('wpmc_popup_txt_border_radius'))==4):?> selected="selected"<?php endif;?>>4</option>
                                <option value="5" <?php if (esc_attr(get_option('wpmc_popup_txt_border_radius'))==5):?> selected="selected"<?php endif;?>>5</option>                
                            </select>
                                </td>
                            </tr>      
                          </table>
                          
                        </td>
                      </tr>
                      <tr>
                        <td valign="top">Subscription Button Design:</td>
                        <td>
                        <table>
                          <tr>
                            <td>Button Width</td>
                            <td colspan="3">
                              <input name="wpmc_popup_btn_width" size="4" maxlength="4" value="<?php echo esc_attr(get_option('wpmc_popup_btn_width'));?>" /> px (number only)
                            </td>
                          </tr>
                          <tr>
                            <td>Button Radius</td>
                            <td colspan="3">
                              <select name="wpmc_popup_btn_radius">
                                <option value="0" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==0):?> selected="selected"<?php endif;?>>0</option>
                                <option value="1" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==1):?> selected="selected"<?php endif;?>>1</option>
                                <option value="2" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==2):?> selected="selected"<?php endif;?>>2</option>
                                <option value="3" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==3):?> selected="selected"<?php endif;?>>3</option>
                                <option value="4" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==4):?> selected="selected"<?php endif;?>>4</option>
                                <option value="5" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==5):?> selected="selected"<?php endif;?>>5</option> 
                                <option value="6" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==6):?> selected="selected"<?php endif;?>>6</option>
                                <option value="7" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==7):?> selected="selected"<?php endif;?>>7</option> 
                                <option value="8" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==8):?> selected="selected"<?php endif;?>>8</option>
                                <option value="9" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==9):?> selected="selected"<?php endif;?>>9</option>
                                <option value="10" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==10):?> selected="selected"<?php endif;?>>10</option>
                                <option value="15" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==15):?> selected="selected"<?php endif;?>>15</option>
                                <option value="20" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==20):?> selected="selected"<?php endif;?>>20</option>
                                <option value="25" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==25):?> selected="selected"<?php endif;?>>25</option>
                                <option value="30" <?php if (esc_attr( get_option('wpmc_popup_btn_radius'))==30):?> selected="selected"<?php endif;?>>30</option>
                            </select>
                            </td>
                          </tr>
                          <tr>
                            <td>Button Color</td>
                            <td>
                              <input type="text" name="wpmc_popup_btn_color" size="4" id="wpmc_popup_btn_color" class="color" value="<?php echo esc_attr( get_option('wpmc_popup_btn_color'))?>" /> 
                              <input type="text" name="wpmc_popup_btn_color1" size="4" id="wpmc_popup_btn_color1" class="color" value="<?php echo esc_attr( get_option('wpmc_popup_btn_color1'))?>" />[gradient color]
                            </td>
                            <td>&emsp;Button Text Color</td>
                            <td>
                              <input type="text" name="wpmc_popup_btn_text_color" size="4" id="wpmc_popup_btn_text_color" class="color" value="<?php echo esc_attr(get_option('wpmc_popup_btn_text_color'));?>" />         
                            </td>
                          </tr>
                          <tr>
                            <td>Button Hover Color</td>
                            <td>
                              <input type="text" name="wpmc_popup_btn_ol_color" size="4" id="wpmc_popup_btn_ol_color" class="color" value="<?php echo esc_attr( get_option('wpmc_popup_btn_ol_color'))?>" />
                              <input type="text" name="wpmc_popup_btn_ol_color1" size="4" id="wpmc_popup_btn_ol_color1" class="color" value="<?php echo esc_attr( get_option('wpmc_popup_btn_ol_color1'))?>" />[gradient color]
                            </td>
                            <td>&emsp;Button Text Hover Color</td>
                            <td>
                              <input type="text" name="wpmc_popup_btn_ol_text_color" size="4" id="wpmc_popup_btn_ol_text_color" class="color" value="<?php echo esc_attr( get_option('wpmc_popup_btn_ol_text_color'))?>" /> 
                            </td>
                          </tr>
                        </table>
                        </td>
                      </tr>
                   </table>
               </div> 
           </div>
           <div class="tab" style="z-index:100;">
               <input type="radio" id="tab-3" name="tab-group-1">
               <label for="tab-3">Text Setting</label>
               <div class="content">
                 <table width="100%" cellspacing="2" cellpadding="5" class="editform" style="z-index:0.5;" > 
                   
                  <tr style="display:none;">
                    <td>Popup Text (Mobile Device):</td>
                    <td>
                      <?php
                      wp_editor(html_entity_decode(get_option('wpmc_text_2')),'wpmc_text_2', array('textarea_rows'=>6,'textarea_name'=> 'wpmc_text_2'));
                      ?>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>button text:</td>
                    <td>
                      <input type="text" name="wpmc_popup_button_text" id="wpmc_popup_button_text" value="<?php echo esc_attr( get_option('wpmc_popup_button_text'))?>" /> 
                    </td>
                  </tr>
                  
                  <tr>
                    <td>Subscription Success Message:</td>
                    <td>
                      <?php
                      wp_editor(html_entity_decode(get_option('wpmc_success_message')),'wpmc_success_message', array('textarea_rows'=>3,'textarea_name'=> 'wpmc_success_message'));
                      ?>
                    </td>
                  </tr>
                </table>  
               </div> 
           </div>
        </div>
        
		<table width="100%" cellspacing="2" cellpadding="5" class="editform">
      		<tr valign="top">
				<td colspan="2" scope="row">			
					<input type="button" name="save" onclick="document.getElementById('wpmc_status_submit').value='1'; document.getElementById('wpmc_options').submit();" value="Save Settings" class="button-primary" />
          <input type="button" name="reset" onclick="document.getElementById('wpmc_status_submit').value='2'; document.getElementById('wpmc_options').submit();" value="Default settings" class="button-primary" />
				</td> 
			</tr>
		</table>        
	</form>	
	<?php
}
?>