 if ($("#mobile_numerology").length > 0) {
    $("#mobile_numerology").validate({
      
    rules: {
       fname: {
          required: true,
          lettersonly: true,
        
        },
        mname: {
          //required: true,
          lettersonly: true,
        
        },
        lname: {
          //required: true,
          lettersonly: true,
        
        },
        email: {
          required: true,
          email: true
          // minlength: 1,
          // maxlength: 2,
        
        },
        gender: {
          required: true,
          // digits: true,
          // minlength: 1,
          // maxlength: 2,
        
        },

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
        mobile_number: {
          required: true,
          digits: true,
          minlength: 10,
          maxlength: 10,
          
        },
         
    },
    messages: {
       fname: {
        required: "Please Enter First Name",
        accept: "Only Enter Alphabtes",
        
      },
      mname: {
        //required: "Please Enter First Name",
        accept: "Only Enter Alphabtes",
        
      },
       lname: {
        //required: "Please Enter First Name",
        accept: "Only Enter Alphabtes",
        
      },
       email: {
        required: "Please Enter Email",
        accept: "Please enter a valid email address.",
        // minlength: "The Day minimum should be 1 digits",
        // //digits: "Please enter only numbers",
        // maxlength: "The Day maximum length should be 2 digits",
        
      },
      gender: {
        required: "Please Select Gender",
        
        
      },
        day: {
        required: "Please select Day of birth",
        // accept: "Please Enter only numbers and + ",
        // minlength: "The Day minimum should be 1 digits",
        // //digits: "Please enter only numbers",
        // maxlength: "The Day maximum length should be 2 digits",
        
      },
      month: {
        required: "Please Select month of birth",
        //accept: "Only Alphabtes Required",
        
      },

      year: {
        required: "Please Enter year of birth",
        //accept: "Only Alphabtes Required",
        
      },
      mobile_number: {
        required: "Please Enter mobile number",
        accept: "Please Enter only numbers and + ",
        minlength: "The minimum length should be 10 digits",
        //digits: "Please enter only numbers",
        maxlength: "The maximum length should be 10 digits",
        
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

