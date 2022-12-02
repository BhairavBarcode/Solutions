/*form validation with custom error message.*/
jQuery(function(){
  jQuery.validator.addMethod("letterswithspace",
      function(value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
      }, "Please enter only letters.");

  jQuery( "#enquiry__form" ).validate({
    rules: {
      enquirer_name:{
        required: true,
        letterswithspace: true,
      },
      enquirer_email:{
        required: true,
        email: true
      },
      enquirer_phone:{
        required: true,
        digits: true
      },
      enquiry_subject:{
        required: true,
      },
      enquirer_message:{
        required: true,
      },
    },
    messages: {
      enquirer_name: {
        required: "Your name is required.",
       },
       enquirer_email: {
          required: "Your email is required.",
       },
       enquirer_phone: {
          required: "Your phone number is required.",
          digits: "Please enter valid phone numner.",
       },
       enquiry_subject: {
          required: "Please enter a subject.",
       },
       enquirer_message: {
          required: "Please tell us more.",
       },
     },
   });

});