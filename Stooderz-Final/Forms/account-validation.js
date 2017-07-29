// Wait for the DOM to be ready
$(function() {
	
	$('.alphaonly').bind('keyup keydown blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^A-Z a-z]/g,'') ); }
);

$('.numonly').bind('keyup keydown blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^0-9]/g,'') ); }
);

	
  // Initialize form validation 
  $("form"). validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: {
        required: true,
		minlength: 2
      },
	   lastname: {
        required: true,
		minlength: 2
      },
	  mobile: {
        required: true,
		minlength: 11,
		maxlength: 11
      },
      institute:{
        required:true,
            
      },
	  CNIC1:{
        required:true,  
		minlength: 5,
		maxlength: 5
      },
	  CNIC2:{
        required:true,  
		minlength: 7,
		maxlength: 7
      },
	  CNIC3:{
        required:true,  
		minlength: 1,
		maxlength: 1
      },
	  agreement:{
		  required: true
	  }
     
    },
    // Specify validation error messages
    messages: {
      firstname: {
		   required:"Kindly enter a name <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>",
		   minlength: "Your name must be at least 2 characters long <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>"
		  },
		   lastname: {
		   required:"Kindly enter a name <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>",
		   minlength: "<span class='red'>Your name must be at least 2 characters long <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i></span>"
		  },
		   mobile: {
		   required:"Kindly enter your mobile number <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>",
		   minlength: "Kindly enter a valid number <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>",
		   maxlength:"Kindly enter a valid number <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>"
		  },
        institute: {
		   required:"Kindly enter institute name <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>"
		  },
		CNIC1: {
		   required:"Kindly enter correct CNIC <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>" ,
		   minlength:"Kindly follow the format <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>",
		   maxlength:"Kindly follow the format <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>"
		  },
		  CNIC2: {
		   required:"Kindly enter correct CNIC <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>" ,
		   minlength:"Kindly follow the format <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>",
		   maxlength:"Kindly follow the format <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>"
		  },
		  CNIC3: {
		   required:"Kindly enter correct CNIC <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>" ,
		   minlength:"Kindly follow the format <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>",
		   maxlength:"Kindly follow the format <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>"
		  },
		 agreement: {
			 required:"This field is required <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>"
		 }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});


