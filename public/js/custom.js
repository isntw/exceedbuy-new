jQuery(document).ready(function () {

    "use strict";
    // Your custom js code goes here.

});

$(document).ready(function() {
  $('li.active').removeClass('active');
  $('a[href="' + location.pathname + '"]').closest('li').addClass('active'); 
});