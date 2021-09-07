(function ($) {
    "use strict";   
    
    $('.ticket-type a').on('click', function () {          
       $($(this).attr('href')+' .ticket').show();
    });  
     $('.ticket-filter a').on('click', function () {
       $('.active .ticket').hide();     
       $('.'+$(this).data('filter')).show();
    });  
    
})(jQuery);
