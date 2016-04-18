
(function(window, document, $) {
    'use strict';

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1){
            $('.navbar-menu').addClass('navbar-animated');
        }
        else{
            $('.navbar-menu').removeClass('navbar-animated');
        }
    });

    $(".operation-wrap .operation-circle").hover(
        function(e){
            $(this).next().show();
            $(this).next().addClass('show');
        }, // over
        function(e){
            $(this).next().hide();
            $(this).next().removeClass('show');
        }  // out
    );

})(window, document, jQuery);
