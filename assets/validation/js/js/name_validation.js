 if ($("#name_numero").length > 0) {
    $("#name_numero").validate({
      
    rules: {
        first_name: {
          required: true,
          lettersonly: true,
          
        },
      // middle_name: {
      //     required: true,
      //     lettersonly: true,
          
      //   },
      last_name: {
          required: true,
          lettersonly: true,
          
        },
    },
    messages: {
        first_name: {
        required: "Please Enter First Name",
        accept: "Only Alphabtes Required",
        
      },
      // middle_name: {
      //   required: "Please Enter Middle Name",
      //   accept: "Only Alphabtes Required",
        
      // },

      last_name: {
        required: "Please Enter Last Name",
        accept: "Only Alphabtes Required",
        
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

