<?php
	$option_fields[] = $headline_image = THEME_PREFIX . "headline_image";
	$option_fields[] = $headline_image_enabled = THEME_PREFIX . "headline_image_enabled";
	$option_fields[] = $headline_text = THEME_PREFIX . "headline_text";
	
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/wpasu/js/ajaxupload.3.5.js" ></script>
<script type="text/javascript" >
	$(function(){
		var btnUpload=$('#headline-upload');
		var status=$('#headline-upload-status');
		new AjaxUpload(btnUpload, {
			action: '../wp-content/themes/wpasu/upload-file.php',
			name: 'uploadfile',
			onSubmit: function(file, ext){
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                    // extension is not allowed 
					status.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				status.text('Uploading...');
			},
			onComplete: function(file, response){
				//On completion clear the status
				status.text('');
				//Add uploaded file to list
				if(response==="success"){
					$('<li></li>').appendTo('#files').html('<img src="../wp-content/themes/wpasu/images/'+file+'" alt="" /><br />'+file).addClass('success');
					$('#<?php echo $headline_image; ?>').val(file);
				} else{
					$('<li></li>').appendTo('#files').text(file).addClass('error');
				}
			}
		});
		
	});
</script>

<div class="postbox">
    <h3>Front Page Headline</h3>
    
    <div class="postbox-content">
    
    	<div class="option-row">
    		<p>Choose how you'd like the main headline on the front page to look.</p>
    	</div><!--end option-row-->
    
    	<div class="option-row">    	
    		<div class="option-name">
    			<label>Use Image For Headline</label>
    		</div><!--end option-name-->   		
    		<div class="option-value">
    			<input class="checkbox" id="<?php echo $headline_image_enabled; ?>" type="checkbox" name="<?php echo $headline_image_enabled; ?>" value="true"<?php checked(TRUE, (bool) get_option($headline_image_enabled)); ?> />
    		</div><!--end option-value-->   	
    	</div><!--end option-row-->
    	
    	<div class="option-row">    	
    		<div class="option-name">    			   		    		
    			<label>Upload An Image</label>
    			<span id="headline-upload-status"></span>
    		</div><!--end option-name-->    
    		<div class="option-value">
    			<input class="logo-name" id="<?php echo $headline_image; ?>" type="text" name="<?php echo $headline_image; ?>" value="<?php echo get_option($headline_image); ?>" />
    			<input type="button" class="background_pattern_button" id="headline-upload" value="Choose Image" />
    			
    		</div><!--end option-value-->	
		</div><!--end option-row-->
		
		<div class="option-row">    	
    		<div class="option-name">
    			<label>Headline Text</label>
    		</div><!--end option-name-->   		
    		<div class="option-value">
    			<input class="input-box" id="<?php echo $headline_text; ?>" type="text" name="<?php echo $headline_text; ?>" value="<?php echo get_option($headline_text) ?>" />
    		</div><!--end option-value-->
    	</div><!--end option-row-->

		<input type="submit" class="button" value="Save Changes" />
    
    </div>

</div><!--end postbox-->