function isIE() {

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer, return version number
        return true;
    else                 // If another browser, return 0
        return false;

    return false;
}

(function(window, document, $) {
    'use strict';

    if(isIE() || navigator.userAgent.match(/Windows Phone/i) || (/Edge\/12./i.test(navigator.userAgent)) || (/Edge\/13./i.test(navigator.userAgent)) || (/Edge\/14./i.test(navigator.userAgent))){

        jQuery('body').addClass('IEbrowser');

    }


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

    $(".btn-search").click(function(){
        $(".top-head").slideToggle('slow');
    });



})(window, document, jQuery);

/*
 By Osvaldas Valutis, www.osvaldas.info
 Available for use under the MIT License
 */

'use strict';

;( function( $, window, document, undefined )
{
    $( '.inputfile' ).each( function()
    {
        var $input	 = $( this ),
            $label	 = $input.parent().next( 'label' ),
            labelVal = $label.html();

        $input.on( 'change', function( e )
        {
            var fileName = '';

            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else if( e.target.value )
                fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
                $label.find( 'span.label-upload' ).html( fileName );
            else
                $label.html( labelVal );
        });

        // Firefox bug fix
        $input
            .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
            .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
    });
})( jQuery, window, document );
