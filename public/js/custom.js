jQuery(document).ready(function () {

    "use strict";
    // Your custom js code goes here.

    $('#datetimepicker').datetimepicker({
        format: 'yyyy-mm-dd'
    });

});

$(document).ready(function () {
    $('li.active').removeClass('active');
    $('a[href="' + location.pathname + '"]').closest('li').addClass('active');
});
