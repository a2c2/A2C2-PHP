<?php
	$option_fields[] = $footer_text = THEME_PREFIX . "footer_text";
	$option_fields[] = $footer_url = THEME_PREFIX . "footer_url";
?>

<div class="postbox">
    <h3>Footer Text</h3>
    
    <p>Add your footer text below.</p>
    
    <div class="postbox-content">
		
		<div class="option-row">    	
    		<div class="option-name">
    			<label>Footer Text</label>
    		</div><!--end option-name-->   		
    		<div class="option-value">
    			<input class="background_pattern_input" id="<?php echo $footer_text; ?>" type="text" name="<?php echo $footer_text; ?>" value="<?php echo get_option($footer_text) ?>" />
    		</div><!--end option-value-->
    	</div><!--end option-row-->

		<input type="submit" class="button" value="Save Changes" />
    
    </div><!--end postbox-content-->

</div> <!--end postbox-->