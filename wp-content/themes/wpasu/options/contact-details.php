<?php
	$option_fields[] = $contact_email = THEME_PREFIX . "contact_email";
	$option_fields[] = $contact_phone = THEME_PREFIX . "contact_phone";
	$option_fields[] = $contact_address = THEME_PREFIX . "contact_address";
?>

<div class="postbox">
    <h3>Contact Details</h3>
    
    <p>Enter your contact details (these will be displayed in the sidebar).</p>
    
    <div class="postbox-content">
		
		<div class="option-row">    	
    		<div class="option-name">
    			<label>Contact Email</label>
    		</div><!--end option-name-->   		
    		<div class="option-value">
    			<input class="background_pattern_input" id="<?php echo $contact_email; ?>" type="text" name="<?php echo $contact_email; ?>" value="<?php echo get_option($contact_email) ?>" />
    		</div><!--end option-value-->
    	</div><!--end option-row-->
    	
    	<div class="option-row">    	
    		<div class="option-name">
    			<label>Contact Phone</label>
    		</div><!--end option-name-->   		
    		<div class="option-value">
    			<input class="background_pattern_input" id="<?php echo $contact_phone; ?>" type="text" name="<?php echo $contact_phone; ?>" value="<?php echo get_option($contact_phone) ?>" />
    		</div><!--end option-value-->
    	</div><!--end option-row-->
    	
    	<div class="option-row">    	
    		<div class="option-name">
    			<label>Contact Address</label>
    		</div><!--end option-name-->   		
    		<div class="option-value">
    			<input class="background_pattern_input" id="<?php echo $contact_address; ?>" type="text" name="<?php echo $contact_address; ?>" value="<?php echo get_option($contact_address) ?>" />
    		</div><!--end option-value-->
    	</div><!--end option-row-->

		<input type="submit" class="button" value="Save Changes" />
    
    </div><!--end postbox-content-->

</div> <!--end postbox-->