/*
	Validación formInstall
*/



$(document).ready(function() {

	// validate signup form on keyup and submit
	$("#formInstall").validate({
		rules: {
			bbdd_path: "required",
			bbdd_user: {
				required: true
			},
			bbdd_pass: {
				required: true
			},
			admin_user: {
				required: true
			},
			admin_pass: {
				required: true,
				minlength: 5
			},
			admin_mail: {
				required: true,
				email: true
			}
		},
   	 	highlight: function(element) {
   				 $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
   				 
   				
   				 
	  	},
	  	success: function(element) {
		    	element.addClass('valid').closest('.form-group').removeClass('has-error').addClass('has-success');
	 	 }
	});
});