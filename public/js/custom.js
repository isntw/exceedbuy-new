jQuery(document).ready(function () {

    "use strict";
    // Your custom js code goes here.
    $('#datetimepicker').datetimepicker({
        minView: 2,
        format: 'dd/mm/yyyy',
        autoclose: true
    });

});

$(document).ready(function () {
    $('li.active').removeClass('active');
    $('a[href="' + location.pathname + '"]').closest('li').addClass('active');
});


$("#button").click(function() {
    $('html, body').animate({
        scrollTop: $("#startDiv").offset().top
    }, 2000);
});