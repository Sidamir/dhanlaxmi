 if ($("#login-form").length > 0) {
    $("#login-form").validate({
      
    rules: { 
        username: {
          required: true,
         
          //accept: "[a-zA-Z]+",
          maxlength: 50
        },
      password: {
          required: true,
          minlength: 6
          maxlength: 15
        },
     
     
     
    },
    messages: {
        username: {
        required: "Please Enter Username",
       
        maxlength: "Your First Name Maxlength Should Be 50 Characters Long."
      },
      password: {
        required: "Please Enter password",
        // accept: "Only Alphabtes Required",
        maxlength: "Your password Maxlength Should Be 15 Characters Long."
        minlength: "Your password minlength Should Be 6 Characters Long."
      },
      

    },
  })
}

jQuery.validator.addMethod("emailExt1", function(value, element, param) {
    return value.match(/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/);
},'Your E-mail is wrong');

jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z," "]+$/i.test(value);
}, "Only Alphabtes Required");