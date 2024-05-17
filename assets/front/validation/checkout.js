 if ($("#checkout_form").length > 0) {
    $("#checkout_form").validate({
      
    rules: {
        f_name: {
          required: true,
          lettersonly: true,
          //accept: "[a-zA-Z]+",
          maxlength: 50
        },
      l_name: {
          required: true,
          lettersonly: true,
          //accept: "[a-zA-Z]+",
          maxlength: 50
        },
      phone: {
            required: true,
            digits: true,
            minlength: 10,
            maxlength:10,
        },
        email: {
                required: true,
               
                 emailExt1: true,
            },
        street_address: {
                required: true,
              
            },  

        state: {
                required: true,
              
            },  
            
        city: {
                required: true,
              
            },  
            

        postcode: {
                required: true,
                maxlength: 6
            },                
     
     
    },
    messages: {
        f_name: {
        required: "Please Enter First Name",
        accept: "Only Alphabtes Required",
        maxlength: "Your First Name maxlength should be 50 characters long."
      },
      l_name: {
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
        },
      street_address: {
                required: "Full address Required",

              
            },  

        state: {
                required: "Please select state",
              
            },  
            
        city: {
                required: "please seclect City",
              
            },  
            

        postcode: {
                required: "please enter Postcode/Pincode",
                maxlength: "6 digit Postcode required",
              
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