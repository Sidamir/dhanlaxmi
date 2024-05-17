if ($("#contact-form").length > 0) {
    $("#contact-form").validate({
      
    rules: { 
        name: {
          required: true,
          lettersonly: true,
          //accept: "[a-zA-Z]+",
          maxlength: 50
        },
        surname: {
          required: true,
          lettersonly: true,
          //accept: "[a-zA-Z]+",
          maxlength: 50
        },
        mobile: {
          required: true,
          digits: true,
          minlength: 10,
          maxlength:10,
      },
      destination: {
        required: true,
        maxlength: 50
      },
      email: {
              required: true,
              maxlength: 50,
              emailExt1: true,
            },
      message: {
        required: true,
        lettersonly: true,
        //accept: "[a-zA-Z]+",
        maxlength: 50
      },
       
     
     
    },
    messages: {
        name: {
        required: "Please Enter Name",
        accept: "Only Alphabtes Required",
        maxlength: "Your First Name Maxlength Should Be 50 Characters Long."
      },
      surname: {
        required: "Please Enter Name",
        accept: "Only Alphabtes Required",
        maxlength: "Your First Name Maxlength Should Be 50 Characters Long."
      },
      mobile: {
        required: "Please Enter Mobile Number",
        accept: "Please Enter Only Numbers and + ",
        minlength: "The Mobile Number Should Be 10 Digits",
        maxlength: "The Mobile Number Should Be 10 Digits",
      },
      destination: {
        required: "Please Enter Name",
      },
      email: {
          required: "Please Enter Email",
          email: "Please Enter Valid Email",
          maxlength: "The Email Name Should Less Than Or Equal To 50 Characters",
        },
        message: {
          required: "Please Enter Name",
          
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