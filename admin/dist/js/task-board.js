(function ($) {
    "use strict";
     $("#task-list-1, #task-list-2, #task-list-3").sortable(
        {
          connectWith: "#task-list-1, #task-list-2, #task-list-3",
          items: ".task-card"
        });

})(jQuery);
