 if ($("#login_form").length > 0) {
    $("#login_form").validate({
      
    rules: {
        username: {
                required: true,
                
                 // emailExt1: true,
            },
     
          password: {
                required: true,
                
                 
            },
     
    },
    messages: {
        
      username: {
          required: "Please enter Username <small>(Register Mobile No. and Email-ID is Your 'Username')</small>",
        },
        password: {
          required: "Please enter Password",
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