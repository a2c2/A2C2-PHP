<?php
	$option_fields[] = $google_analytics = THEME_PREFIX . "google_analytics";
?>

<div class="postbox">
    <h3>Google Analytics</h3>
    
    <p>Paste your Google Analytics code in the box below.</p>
    
    <div class="postbox-content">
		
		<div class="option-row">    	
    		<div class="option-name">
    			<label>Analytics Code</label>
    		</div><!--end option-name-->   		
    		<div class="option-value">
    			<input class="background_pattern_input" id="<?php echo $google_analytics; ?>" type="text" name="<?php echo $google_analytics; ?>" value="<?php echo get_option($google_analytics) ?>" />
    		</div><!--end option-value-->
    	</div><!--end option-row-->

		<input type="submit" class="button" value="Save Changes" />
    
    </div><!--end postbox-content-->
    
</div><!--end postbox-->