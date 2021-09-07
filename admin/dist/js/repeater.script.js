(function ($) {
    "use strict";

    $('.form-control-chosen').chosen({
        allow_single_deselect: true,
        width: '100%'
    });

    $("#email-repeater").createRepeater();
    $("#address-repeater").createRepeater();
    $("#phone-repeater").createRepeater();

})(jQuery);
