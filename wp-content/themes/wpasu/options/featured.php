<?php
	$option_fields[] = $featured_title = THEME_PREFIX . "featured_title";
	$option_fields[] = $featured_image = THEME_PREFIX . "featured_image";
	$option_fields[] = $featured_text = THEME_PREFIX . "featured_text";
	$option_fields[] = $featured_url = THEME_PREFIX . "featured_url";
?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/wpasu/js/ajaxupload.3.5.js" ></script>
<script type="text/javascript" >
	$(function(){
		var btnUpload=$('#upload-project-image');
		var status=$('#project-upload-status');
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
					$('#<?php echo $featured_project_image; ?>').val(file);
				} else{
					$('<li></li>').appendTo('#files').text(file).addClass('error');
				}
			}
		});
		
	});
</script>

<div class="postbox">
    <h3>Featured Section (Front Page)</h3>
    
    <p>Enter the following details for the featured section on the front page.</p>
    
    <div class="postbox-content">
		
		<div class="option-row">    	
    		<div class="option-name">
    			<label>Featured Title</label>
    		</div><!--end option-name-->   		
    		<div class="option-value">
    			<input class="background_pattern_input" id="<?php echo $featured_title; ?>" type="text" name="<?php echo $featured_title; ?>" value="<?php echo get_option($featured_title) ?>" />
    		</div><!--end option-value-->
    	</div><!--end option-row-->
    	
    	<div class="option-row">    	
    		<div class="option-name">    			   		    		
    			<label>Featured Image</label>
    			<span id="project-upload-status"></span>
    		</div><!--end option-name-->    
    		<div class="option-value">
    			<input class="logo-name" id="<?php echo $featured_image; ?>" type="text" name="<?php echo $featured_image; ?>" value="<?php echo get_option($featured_image); ?>" />
    			<input type="button" class="background_pattern_button" id="upload-project-image" value="Choose Image" />
    			
    		</div><!--end option-value-->	
		</div><!--end option-row-->
    	
    	<div class="option-row">    	
    		<div class="option-name">
    			<label>Featured Overview</label>
    		</div><!--end option-name-->   		
    		<div class="option-value">
    			<input class="background_pattern_input" id="<?php echo $featured_text; ?>" type="text" name="<?php echo $featured_text; ?>" value="<?php echo get_option($featured_text) ?>" />
    		</div><!--end option-value-->
    	</div><!--end option-row-->
    	
    	<div class="option-row">    	
    		<div class="option-name">
    			<label>Portfolio URL</label>
    		</div><!--end option-name-->   		
    		<div class="option-value">
    			<input class="background_pattern_input" id="<?php echo $featured_url; ?>" type="text" name="<?php echo $featured_url; ?>" value="<?php echo get_option($featured_url) ?>" />
    		</div><!--end option-value-->
    	</div><!--end option-row-->

		<input type="submit" class="button" value="Save Changes" />
    
    </div><!--end postbox-content-->

</div> <!--end postbox-->