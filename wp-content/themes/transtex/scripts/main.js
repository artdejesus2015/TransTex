
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

    $(".navbar-toggle").click(function(){
        $(".navbar-menu-collapse").addClass("show");
        $("body").addClass("oh");
    });

    $(".mobile-close").click(function(){
        $(".navbar-menu-collapse").removeClass("show");
        $("body").removeClass("oh");
    });

    $('.grid-footer .grid-title').each(function() {
        var word = $(this).html();
        var index = word.indexOf(' ');
        if(index == -1) {
            index = word.length;
        }
        $(this).html('<span class="red">' + word.substring(0, index) + '</span>' + word.substring(index, word.length));
    });


    $(".dropdown .icon-angle-down").click(function(){
        $(this).next().slideToggle('slow');
    });





})(window, document, jQuery);
