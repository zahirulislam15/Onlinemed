(function ($) {
    "use strict";

    $('#example').footable();
    $('#foo-pagination').footable();

    $('.form-control-chosen').chosen({
        allow_single_deselect: true,
        width: '100%'
    });

    $('#searchbutton').on('click', function () {
       // $('.enquiry-search-form').toggleClass('active');
    });
$("#searchbutton").change(function() {
    if($(this).is(':checked')) {  
        $('.enquiry-search-form').addClass('active');
    }
    else{
      $('.enquiry-search-form').removeClass('active');
    }    
});

})(jQuery);
