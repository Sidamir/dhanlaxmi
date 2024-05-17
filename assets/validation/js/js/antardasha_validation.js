 if ($("#antardasha").length > 0) {
    $("#antardasha").validate({
      
    rules: {
        day: {
          required: true,
          // digits: true,
          // minlength: 1,
          // maxlength: 2,
          
        },
      month: {
          required: true,
          //lettersonly: true,
          
        },
      year: {
          required: true,
          //lettersonly: true,
          
        },
    },
    messages: {
        day: {
        required: "Please Enter Day of birth",
        // accept: "Please Enter only numbers and + ",
        // minlength: "The Day minimum should be 1 digits",
        // //digits: "Please enter only numbers",
        // maxlength: "The Day maximum length should be 2 digits",
        
      },
      month: {
        required: "Please Enter month of birth",
        //accept: "Only Alphabtes Required",
        
      },

      year: {
        required: "Please Enter year of birth",
        //accept: "Only Alphabtes Required",
        
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

