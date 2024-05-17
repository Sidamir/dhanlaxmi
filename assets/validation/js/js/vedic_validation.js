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
         mobile_number: {
          required: true,
          digits: true,
         
        },

        gender: {
          required: true,
          
        },
        email: {
            required: true,
            maxlength: 50,
            emailExt1: true,
        },
        dob: {
          required: true,
        
        },
      
         major_area_life: {
          required: true,
        
        },
         exact_area_life: {
          required: true,
        
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
      mobile_number: {
        required: "Please Enter Mobile Number",
        accept: "Please Enter Only Numbers and + ",
        
      },
      gender: {
        required: "Please Select Gender",  
      },
        dob: {
        required: "Please select Date of birth",   
      },
      month: {
        required: "Please Select month of birth",
      },

      year: {
        required: "Please Enter year of birth",
        
      },
       major_area_life: {
        required: "Please Select Major Area",  
      },
      exact_area_life: {
        required: "Please Select Exact Area",  
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

