 if ($("#add_user").length > 0) {
    $("#add_user").validate({
      
    rules: {
       name: {
          required: true,
      },

        email: {
        required: true,
        maxlength: 50,
        emailExt1: true,
        },
         address: {
          required: true,
        },
         dob: {
          required: true,
        },
        // gender: {
        //   required: true,
        //   // digits: true,
        //   // minlength: 1,
        //   // maxlength: 2,
        
        // },

       
        number: {
          required: true,
          digits: true,
          minlength: 10,
          maxlength: 10,
          
        },
         city: {
          required: true,
        },
        state: {
          required: true,
        },
         plan: {
          required: true,
        },
    },
    messages: {
       name: {
        required: "Please Enter Name",
       
        
      },
      // gender: {
      //   required: "Please Select Gender",
        
        
      // },
         email: {
        required: "Please enter email",
        email: "Please enter valid email",
        maxlength: "The email name should less than or equal to 50 characters",
      },
     
      number: {
        required: "Please Enter mobile number",
        accept: "Please Enter only numbers and + ",
        minlength: "The minimum length should be 10 digits",
        //digits: "Please enter only numbers",
        maxlength: "The maximum length should be 10 digits",
        
      },
      address: {
        required: "Please Enter Address",
      },
      dob: {
        required: "Please Enter Dob",
      },
      city: {
        required: "Please Enter City Name",
      },
      state: {
        required: "Please Enter State Name",
      },
       plan: {
        required: "Please Select User Type",
      },
    },
  })
}

jQuery.validator.addMethod("emailExt1", function(value, element, param) {
    return value.match(/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-z]{2,4}|[0-9]{1,3})(\]?)$/);
},'Your E-mail is wrong');

jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z," "]+$/i.test(value);
}, "Only Alphabtes Required");

