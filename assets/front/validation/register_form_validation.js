 if ($("#register_form").length > 0) {
    $("#register_form").validate({
      
    rules: {
        name: {
          required: true,
          lettersonly: true,
        },
      phone: {
            required: true,
            digits: true,
            minlength: 10,
            maxlength:10,
        },
        email: {
                required: true,
                maxlength: 50,
                 emailExt1: true,
            },
     
     
    },
    messages: {
        fname: {
        required: "Please Enter First Name",
        accept: "Only Alphabtes Required",
        maxlength: "Your First Name maxlength should be 50 characters long."
      },
      lname: {
        required: "Please Enter Last Name",
        accept: "Only Alphabtes Required",
        maxlength: "Your First Name maxlength should be 50 characters long."
      },
      phone: {
        required: "Please enter mobile number",
         accept: "Please enter only numbers and + ",
        minlength: "The mobile number should be 10 digits",
        //digits: "Please enter only numbers",
        maxlength: "The mobile number should be 10 digits",
      },
      email: {
          required: "Please enter email",
          email: "Please enter valid email",
          maxlength: "The email name should less than or equal to 50 characters",
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