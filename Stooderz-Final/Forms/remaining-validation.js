// Wait for the DOM to be ready
$(function() {
  // Initialize form validation 
  
  $.validator.addMethod('minStrict', function (value, el, param) {
    return value > param;
});

 $.validator.addMethod('maxStrict', function (value, el, param) {
    return value < param;
});

  $("form").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      },
	  repassword: {
        required: true,
		equalTo: "#password"
      },
	  institute: {
        required: true,
      },
	  level: {
        required: true,
      },
	  subject: {
        required: true,
      },
	  year: {
        required: true,
      },
	  course: {
        required: true,
      },
	  description: {
        required: true,
      },
	  price: {
        required: true,
		minStrict: -1,
        number: true
      },
	  year: {
        required: true,
		minStrict: 1959,
        maxStrict: 2018
      }
    },
    // Specify validation error messages
    messages: {
      repassword: {
		required: "Please re-enter password <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>",
        equalTo: "Passwords not matching <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>" 
	  },
      password: {
        required: "Please provide a password <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>",
        minlength: "Your password must be at least 5 characters long <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>"
      },
	   price: {
		required: "Please enter price <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>",
        minStrict: "Kindly enter correct price <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>" 
	  },
	  year: {
		maxStrict: "Please enter year lesser than or equal to 2017 <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>",
        minStrict: "Please enter year greater than or equal to 1960 <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>" 
	  },
      email: "Please enter a valid email address <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>"
    },
	
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});