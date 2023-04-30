(function ($) {
  "use strict";

  let form = '.contact-form',
  invalidCls = 'is-invalid',
  $validation = '[name="name"],[name="number"],[name="message"]', // Must be use (,) without any space
  formMessages = $('.form-messages');
  
  function sendContact() {
    var formData = $(form).serialize();
    var valid;
    valid = validateContact();
    if (valid) {
      jQuery.ajax({
        url: $(form).attr('action'),
        data: formData,
        type: "POST"
      })
      .done((response)=>{
        window.location.href = "thank-you.php";
        // Make sure that the formMessages div has the 'success' class.
        formMessages.removeClass('error');
        formMessages.addClass('success');
        // Set the message text.
        formMessages.text(response);
        // Clear the form.
        $(form + ' input:not([type="submit"]),'+ form+' textarea').val('');
      })
      .fail((data)=>{
        // Make sure that the formMessages div has the 'error' class.
        formMessages.removeClass('success');
        formMessages.addClass('error');
        // Set the message text.
        if (data.responseText !== '') {
          formMessages.text(data.responseText);
        } else {
          formMessages.text('Oops! An error occured and your message could not be sent.');
        }
      });
    };
  };

  function validateContact() {
    var valid = true;
    var formInput;

    function unvalid($validation) {
      $validation = $validation.split(',')
      for (var i = 0; i < $validation.length; i++) {
        formInput = form + ' ' + $validation[i];
        if (!$(formInput).val()) {
          $(formInput).addClass(invalidCls)
          valid = false;
        } else {
          $(formInput).removeClass(invalidCls)
          valid = true;
        };
      };
    };
    unvalid($validation);
    
    return valid;
  };

  $(form).on('submit', (element) => {
    element.preventDefault();
    sendContact();
  });

})(jQuery);