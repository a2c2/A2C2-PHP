<h3>Purchase CPU Hours</h3>
<p class='hide' id='response'></p>
			<form id='cpu-hours-form' method='post' action='<?php bloginfo('url'); ?>/wp-content/themes/wpasu/scripts/cpu-hours-form-process.php'>
				<fieldset>					
                    <label for="name">Saguaro Account User Name <span class="required">*</span></label>
					<input id='form_name' type='text' name='name' />
                    <label for="dept">User Dept. / Affiliation <span class="required">*</span></label>
					<input id='form_dept' type='text' name='dept' />
                    <label for="account">Account to Charge <span class="required">*</span></label>
					<input id='form_account' type='text' name='account' /> 
                    <label for="signer">Name of Authorized Account Signer <span class="required">*</span></label>
					<input id='form_signer' type='text' name='signer' />                                                           	
                    <label for="email">Email of Signer<span class="required">*</span></label>				
					<input id='form_email' type='text' name='email'  />
                    <label for="number">Number of CPU Hours to be Purchased <span class="required">*</span></label>
					<input id='form_number' type='text' name='number'  />	
					<input id='form_submit' class="submit" type='submit' name='submit' value='Submit Purchase' />                    					
					<div class='hide'>
						<label>Do not fill out this field</label>
						<input name='spam_check' type='text' value='' />
					</div>
				</fieldset>
			</form>
<div class="clearfix"></div>