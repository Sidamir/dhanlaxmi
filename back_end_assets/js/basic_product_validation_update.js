 if ($("#basic-form").length > 0) {
    $("#basic-form").validate({
      
    rules: {
        pro_name: {
          required: true,
        },
      category_id: {
        required: true,
        
      },
      pro_price: {
        required: true,
      },
      max_price: {
            required: true,
        },
      // pro_des: {
      //       required: true,
      //   },
       
    },
    messages: {
        pro_name: {
        required: "Please enter product name",
        
      },
      category_id: {
        required: "Please select category",
        },
      pro_price: {
        required: "Please enter product minimum price",
        
      },
      max_price: {
        required: "please enter product maximum price",
      },
      // pro_des: {
      //   required: "Please enter Product description",
      // },
      
    },
  })
}

jQuery.validator.addMethod("emailExt1", function(value, element, param) {
    return value.match(/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/);
},'Your E-mail is wrong');

jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z," "]+$/i.test(value);
}, "Only Alphabtes Required");