$(function(){
	$('#form_submit').click(function(){
		
		var input_name = $('#form_name').val(),
		    input_dept = $('#form_dept').val(),
			input_account = $('#form_account').val(),
			input_signer = $('#form_signer').val(),
			input_email = $('#form_email').val(),
			input_number = $('#form_number').val(),
			response_text = $('#response');
		
		response_text.hide();
		response_text.html('Loading...').show();
		
		$.post('http://a2c2.asu.edu/wp-content/themes/wpasu/scripts/cpu-hours-form-process.php', {name: input_name, dept: input_dept, account: input_account, signer: input_signer, email: input_email, number: input_number}, function(data){
			response_text.html(data);
		});
		return false;
	});

});