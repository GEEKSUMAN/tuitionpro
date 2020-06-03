    $("#login").validate({
  rules: {
    mail: {
      required: true,
      email: true
    },
    password:{
	required:true,
	minlength:6,
	pwcheck:true
	}
    },
  messages: {
    mail: {
      required: "Your email address must be in the format of name@domain.com.",
    },
    password: {
    	required:"Please specify your Password min 6 characters .",
    	pwcheck: "Password must contains One Small,One Capital,One number, One special character, min 6 characters."
    }
  },
  errorLabelContainer: '#errors',
  errorElement: 'li',
  errorPlacement: function (error, element) {
        // insert the error message 'li' after the 'li' containing the input field
        error.insertAfter($(element).parent('li')); 
    }
});
