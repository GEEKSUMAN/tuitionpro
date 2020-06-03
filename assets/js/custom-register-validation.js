$.validator.addMethod("pwcheck", function(value) {
return /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{6,})/.test(value)
});
    $("#Register").validate({
  rules: {
    name: "required",
    mail: {
      required: true,
      email: true
    },
    password:{
	required:true,
	minlength:6,
	pwcheck:true
	},
    register_type: "required",
    classes: "required",
    board: "required",
  },
  messages: {
    name: "Please specify your Full Name.",
    mail: {
      required: "Your email address must be in the format of name@domain.com .",
    },
    password: {
    	required:"Please specify your Password length min 6 characters .",
    	pwcheck: "Password must contains One Small,One Capital,One number, One special character, min 6 characters ."
    },
    register_type: "Please specify Registration type .",
    classes: "Please specify your class .",
    board: "Please specify your board ."
  },
  errorLabelContainer: '#errors',
  errorElement: 'li',
  errorPlacement: function (error, element) {
        // insert the error message 'li' after the 'li' containing the input field
        error.insertAfter($(element).parent('li')); 
    }
});
