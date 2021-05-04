"use strict";

// placeholder for input and textarea
$('.form-item').each(function (i, formItem) {
  // get input/textarea placeholder
  var $formItemLabel = $(formItem).find('input, textarea').attr('placeholder'); // create label element

  $formItemLabel = "<span class='form-item__label'>".concat($formItemLabel, "</span>"); // append label after input/textarea

  $(formItem).append($formItemLabel); // set input/textarea attr autocomplete off

  $(formItem).find('input, textarea').attr('autocomplete', 'off');
});