<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if (get_option('wpmc_popup_active')=='1'){
  add_action('wp_footer', 'usts_mcwp_popup_to_body');
}

function usts_mcwp_popup_to_body(){
  $width=250;  
  $height=300;
  
  $margin=$width/2;
  $txt_width = esc_attr(get_option('wpmc_popup_txt_width'));
  $btn_width = esc_attr(get_option('wpmc_popup_btn_width'));
 
  if(isset($_COOKIE["wpmc_cookie"])){
    return false;
  }
  
  if(get_option("wpmc_popup_required")==1){
    ?>
          <script type="text/javascript">
            jQuery(document).ready(function(){
              required_wpmcup();    
            });
          </script>
          <?php
  }
    if(get_option("wpmc_popup_position")==1){      
      if(is_home() || is_front_page()):
      ?>
        <script type="text/javascript">
          jQuery(document).ready(function(){
            load_wpmcup();    
          });
        </script>
      <?php 
        endif;
    }elseif(get_option("wpmc_popup_position")==2){
       if(is_page()):
        ?>
        <script type="text/javascript">
          jQuery(document).ready(function(){
            load_wpmcup();    
          });
        </script>
      <?php
        endif;					
    }elseif(get_option("wpmc_popup_position")==3){
       if(is_single()):
        ?>
        <script type="text/javascript">
          jQuery(document).ready(function(){
            load_wpmcup();    
          });
        </script>
      <?php
      endif;					
    }elseif(get_option("wpmc_popup_position")==4){
      if(is_archive()):
        ?>
        <script type="text/javascript">
          jQuery(document).ready(function(){
            load_wpmcup();    
          });
        </script>
        <?php
        endif;					
    }
    elseif(get_option("wpmc_popup_position")==0){
      ?>
      <script type="text/javascript">
        jQuery(document).ready(function(){
          load_wpmcup();    
        });
      </script>
      <?php					
    }   
   ?>
<script type="text/javascript">  
  function load_wpmcup(){
    var wpmc_popup_delay_time=<?php echo esc_attr(get_option('wpmc_popup_delay_time')); ?>*1000;    
    setTimeout(function(){ 
        loadPopup(); 
      }, wpmc_popup_delay_time); // .5 second
    return false;
  }
  function wpmc_close_popup(){
    disablePopup();    
  }
  
	jQuery("div.close").hover(
					function() {
						jQuery('span.ecs_tooltip').show();
					},
					function () {
    					jQuery('span.ecs_tooltip').hide();
  					}
				);
	
	jQuery(this).keyup(function(event) {
		if (event.which == 27) {
			disablePopup();
		}  	
	});
	
	jQuery("div#backgroundPopup").click(function() {
		disablePopup();
	});
	
	jQuery('a.livebox').click(function() {		
    jQuery("#toPopup").fadeOut("normal");  
			jQuery("#backgroundPopup").fadeOut("normal");  
			popupStatus = 0;
	return false;
	});
		 
	function loading() {
		jQuery("div.loader").show();  
	}
	function closeloading() {
		jQuery("div.loader").fadeOut('normal');  
	}
	
	var popupStatus = 0;
	
	function loadPopup() { 
		if(popupStatus == 0) { 
			closeloading();
			jQuery("#toPopup").fadeIn(0500);
			jQuery("#backgroundPopup").css("opacity", "0.7");
			jQuery("#backgroundPopup").fadeIn(0001); 
			popupStatus = 1;
		}	
	}
		
	function disablePopup() {    
		if(popupStatus == 1) {
			jQuery("#toPopup").fadeOut("normal");  
			jQuery("#backgroundPopup").fadeOut("normal");  
			popupStatus = 0;
		}
	}  

  function required_wpmcup(){
     jQuery("#wpmc_close").hide();
     jQuery(document).keyup(function(e) {
        if (e.keyCode == 27) {return false }
      });
  }	
</script>
<style>
  #backgroundPopup {
    <?php
      echo 'background:#'.esc_attr(get_option('wpmc_popup_overlay_color')).';';
     ?>
  }
  #toPopup {
    <?php
    if(get_option('wpmc_popup_bg_image')!=''){
      echo 'background:linear-gradient(to bottom, #'.esc_attr(get_option('wpmc_popup_bg_color1')).' 0%, #'.esc_attr(get_option('wpmc_popup_bg_color')).' 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);';
      echo 'background:url('.esc_attr(get_option('wpmc_popup_bg_image')).');';
    }else{
      echo 'background:linear-gradient(to bottom, #'.esc_attr(get_option('wpmc_popup_bg_color1')).' 0%, #'.esc_attr(get_option('wpmc_popup_bg_color')).' 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);';
    }
    
    echo 'border:solid 8px #'.esc_attr(get_option('wpmc_popup_border_color')).';';
    echo 'width:'.esc_attr($width).'px;';
    echo 'min-height:'.esc_attr($height).'px;';
    echo 'margin-left:-'.esc_attr($margin).'px;';
   echo ' border-radius: '.esc_attr(get_option('wpmc_popup_radius_top_l')).'px '.esc_attr(get_option('wpmc_popup_radius_top_r')).'px '.esc_attr(get_option('wpmc_popup_radius_btm_r')).'px '.esc_attr(get_option('wpmc_popup_radius_btm_l')).'px;';
    
    ?>
  }
  .wpmc_btn input[type="button"].button2{
    border: 0 none;
    font-size: 13px;
    font-weight: bold;
    height: 36px;
    margin-top: 5px;        
    background:blueviolet;
    text-align:centet;
    <?php
    echo 'width:'.esc_attr($btn_width).'px;';
    ?>
  }
  .wpmc_btn input[type="button"].button2{    
    <?php
    echo 'background:linear-gradient(to bottom, #'.esc_attr(get_option('wpmc_popup_btn_color1')).' 0%, #'.esc_attr(get_option('wpmc_popup_btn_color')).' 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);';
    echo 'color:#'.esc_attr(get_option('wpmc_popup_btn_text_color')).';';
    echo 'border-radius:'.esc_attr(get_option('wpmc_popup_btn_radius')).'px;';
    ?>   
  }  
  .wpmc_btn input[type="button"].button2:hover{    
    <?php
    echo 'background:linear-gradient(to bottom, #'.esc_attr(get_option('wpmc_popup_btn_ol_color1')).' 0%, #'.esc_attr(get_option('wpmc_popup_btn_ol_color')).' 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);';
    echo 'color:#'.esc_attr(get_option('wpmc_popup_btn_ol_text_color')).';';
    echo 'border-radius:'.esc_attr(get_option('wpmc_popup_btn_radius')).'px;';
    ?>
  }
  .wpmc_area{
    <?php
    echo 'width:'.(esc_attr($txt_width)+30).'px;';
    if(get_option('wpmc_popup_bottom_content')==0){
      echo 'margin:0;';
    }else if(get_option('wpmc_popup_bottom_content')==2){
      echo 'float:right;';
    }else{
      echo 'margin:auto;';
    }
    ?>
  } 
  .wpmc_txt input{
    <?php
    echo 'width:'.esc_attr($txt_width).'px;';
    echo 'color:#'.esc_attr(get_option('wpmc_popup_txt_color')).';';
    ?>
    margin:0px 0px 7px 0px;    
  }
 .wpmc_txt input[type="text"], textarea {
   <?php    
    echo 'background:#'.esc_attr(get_option('wpmc_popup_txt_bg_color')).';';
    echo 'border:solid 1px #'.esc_attr(get_option('wpmc_popup_txt_border_color')).';';
    echo 'border-radius:'.esc_attr(get_option('wpmc_popup_txt_border_radius')).'px;';
    ?>
   padding:5px;
 }
 .wpmc_con_2{
    display:none;    
  }
 @media only screen and (max-width: 48em) {
  #toPopup {
    width:270px;
    margin-left:-145px;
    min-height:200px;
    max-height:700px;
    <?php echo 'border:solid 5px #'.esc_attr(get_option('wpmc_popup_border_color')).';';?>
  }
  .wpmc_btn input[type="button"].button2{
    width:180px;
    margin-bottom:3px;
  }
  .wpmc_area{
    width:210px;
    margin:auto;
  }
  .wpmc_txt input{
    width:180px;
  }
  .wpmc_con{
    display:none;    
  }
  .wpmc_con_2{
    display:block;    
  }
}
 
</style>
    <script> 
    function wpmc_chk_popup_info(){
      jQuery("#wpmc_success").hide();
      jQuery("#wpmc_error").hide();
      $email=jQuery('#popup_user_email').val();
      $ftype=jQuery('#hdval_form_type').val();      
      $fname='';
      $lname='';
      if($ftype==2){
        $fname=jQuery('#popup_user_fname').val();
      }else if($ftype==3){
        $fname=jQuery('#popup_user_fname').val();
        $lname=jQuery('#popup_user_lname').val();
      }
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      if(!emailReg.test($email)) {
        jQuery("#wpmc_error").show();
        jQuery('#wpmc_error').text('invalid email');
      } else {        
        jQuery("#wpmc_error").hide();
          wpmc_check_popup_email($email, $fname, $lname);
      }        
    }
      
   function wpmc_check_popup_email(email, fname, lname){
     var success_msg=jQuery('#hdval_mcpop_scc_msg').val();
      jQuery(".loading2").show();
       var ajax_url = '<?php echo wp_nonce_url(esc_url(admin_url( 'admin-ajax.php' )),'usts_sendemail_nonc'); ?>';
			jQuery.ajax({
				type: "POST",
				url: ajax_url,
				data : {
                'action': 'usts_mcwp_send_email',
                'email':  email,
                'fname':  fname,
                'lname':  lname
          },
				success: function(msg){
          if(msg==0){            
            jQuery("#wpmc_success").show();
            jQuery('#wpmc_success').text(success_msg);
            setTimeout(wpmc_close_popup,4000);            
          }else{            
            jQuery("#wpmc_error").show();
            jQuery('#wpmc_error').text(msg);            
          }          
          jQuery(".loading2").hide();
				}
			});					
		}
    
  function ClearPlaceHolder2 (input) {
		if (input.value == input.defaultValue) {
			input.value = "";
		}
	}
  
	function SetPlaceHolder2 (input) {    
		if (input.value == "") {
			input.value = input.defaultValue;
		}
	}    
  </script>

<div id="toPopup">
    <div class="wpmc_close" id="wpmc_close" style="display:block;" onclick="wpmc_close_popup()"></div>       	
		<div id="popup_content">
      
      <div class="wpmc_con">
        <?php //echo get_option('wpmc_text') ?>
      </div>

      <div class="wpmc_con_2">
        <?php echo esc_attr(get_option('wpmc_text_2')) ?>
      </div>
      <form id="registerForm" style="text-align:center;">
      <input type="hidden" id="hdval_mcpop_scc_msg" value="<?php echo strip_tags(get_option('wpmc_success_message')); ?>" />
      <input type="hidden" id="hdval_form_type" value="<?php echo esc_attr(get_option('wpmc_popup_form_type')); ?>" />
      
      <div class="wpmc_area">
        <div class="wpmc_txt">
          <?php
            if(get_option('wpmc_popup_form_type')==2){
              echo '<input type="text" value="Name" name="popup_user_fname" id="popup_user_fname" class="textfield" onFocus="ClearPlaceHolder2 (this)" onBlur="SetPlaceHolder2 (this)" />';
            }else if(get_option('wpmc_popup_form_type')==3){
              echo '<input type="text" value="First Name" name="popup_user_fname" id="popup_user_fname" class="textfield" onFocus="ClearPlaceHolder2 (this)" onBlur="SetPlaceHolder2 (this)" />';
              echo '<input type="text" value="Last Name" name="popup_user_lname" id="popup_user_lname" class="textfield" onFocus="ClearPlaceHolder2 (this)" onBlur="SetPlaceHolder2 (this)" />';
            }
            ?>
            <input type="text" value="Email Address" name="popup_user_email" id="popup_user_email" class="textfield email" onFocus="ClearPlaceHolder2 (this)" onBlur="SetPlaceHolder2 (this)" />            
          </div>
        <div class="wpmc_error_msg" id="wpmc_error" style="display:none;"></div>
        <div class="wpmc_success_msg" id="wpmc_success" style="display:none;"></div>
        
        <div class="loading_img">        
          <div class="loading2" style="display: none;"></div>
        </div>
        <div class="wpmc_btn">      
          <input type="button" value="<?php echo esc_attr(get_option('wpmc_popup_button_text')); ?>" onclick="wpmc_chk_popup_info()" class="button2" name="Submit">
        </div>
      </div>
      </form>           
    </div>    
    </div>
	
   	<div id="backgroundPopup"></div>
<?php
}

function usts_mcwp_send_email(){
	if(check_ajax_referer('usts_sendemail_nonc')){
		require_once 'inc/MCAPI.class.php';
		require_once 'inc/config.inc.php';
		$email = sanitize_text_field($_POST['email']);
		//$email = $_POST['email'];
		$email = sanitize_email($email);
		if(!is_email($email)){
			$email = "";		
		}
		
		$fname=sanitize_text_field($_POST['fname']);
		$lname=sanitize_text_field($_POST['lname']);
		$key=get_option('mcpop_key');
		$list_id=get_option('mcpop_list_id');
		
		$api = new MCAPI($key);
		$merge_vars = array('FNAME'=>$fname, 'LNAME'=>$lname, 'GROUPINGS'=>array());
		$double_optin=true;    
		$optin=get_option('wpmc_opt_in');
		if($optin==0){
		  $double_optin=FALSE;       
		}    
		$api->listSubscribe( $list_id, $email, $merge_vars, 'html', $double_optin);
		if ($api->errorCode){
			if($api->errorCode==214){
			  echo 'Email already exists';
			  exit;
			}else if($api->errorCode==200){
			  echo 'Invalid List Id';
			  exit;
			}else if($api->errorCode==99){
			  echo 'Invalid Api Key';
			  exit;
			}else{
			  echo 'Invalid Email';
			  exit;
			}
		} else {
			echo "0";
			exit;
		}
		exit;
	}
}
add_action('wp_ajax_nopriv_usts_mcwp_send_email','usts_mcwp_send_email');
add_action('wp_ajax_usts_mcwp_send_email', 'usts_mcwp_send_email');
?>