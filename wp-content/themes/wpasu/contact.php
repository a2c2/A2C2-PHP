<h3>Send us a Message</h3>
<p class='hide' id='response'></p>
			<form id='contact-form' method='post' action='<?php bloginfo('url'); ?>/wp-content/themes/wpasu/scripts/contact-process.php'>
				<fieldset>					
                    <label for="name">Name <span class="required">*</span></label>
					<input id='form_name' type='text' name='name' />	
                    <label for="email">Email <span class="required">*</span></label>				
					<input id='form_email' type='text' name='email'  />
                    <label for="subject">Subject</label>
					<input id='form_subject' type='text' name='subject'  />			
					<textarea id='form_message' rows='10' cols='40' name='message'></textarea>				
					<input id='form_submit' class="submit" type='submit' name='submit' value='Submit Message' />			
					<div class='hide'>
						<label>Do not fill out this field</label>
						<input name='spam_check' type='text' value='' />
					</div>
				</fieldset>
			</form>
<div class="clearfix"></div>