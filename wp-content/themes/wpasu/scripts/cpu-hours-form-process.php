<?php
if(isset($_POST['name']) && empty($_POST['spam_check']))
{
	require 'email-validator.php';
	$validator = new EmailAddressValidator();
	
	$errors = array();
	
	$input_name = strip_tags($_POST['name']);
	$input_dept = strip_tags($_POST['dept']);
	$input_account = strip_tags($_POST['account']);
	$input_signer = strip_tags($_POST['signer']);			
	$input_email = strip_tags($_POST['email']);
	$input_number = strip_tags($_POST['number']);

	$required = array('Saguaro Account User Name field' => 'name', 'User Dept. / Affiliation field' => 'dept', 'Account to Charge field' => 'account', 'Name of Authorized Account Signer field' => 'signer', 'Email of Signer field' => 'email', 'Number of CPU Hours to be Purchased field' => 'number');
	
	foreach($required as $key=>$value)
	{
		if(isset($_POST[$value]) && $_POST[$value] !== '') 
		{
			continue;
		}
		else {
			$errors[] = $key . ' cannot be left blank';
		}
	}
	
    if (!$validator->check_email_address($input_email)) {
           $errors[] = 'Enter a valid email address.';
    }
	
	if(empty($errors))
	{		
		if(mail('info@support.com', "Message from $input_name - $input_subject", $input_message, "From: $input_email"))
		{
			echo 'Thank You - your purchase has been sent.';
		}
		else 
		{
			echo 'There was an issue when sending your purchase. Please try again.';
		}		
	}
	else 
	{
		echo implode('<br />', $errors);		
	}
}
else
{
	die('You cannot access this page directly.');
}