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



})(window, document, jQuery);

/*
 By Osvaldas Valutis, www.osvaldas.info
 Available for use under the MIT License
 */

;( function ( document, window, index )
{
    var inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input )
    {
        var label	 = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener( 'change', function( e )
        {
            var fileName = '';
            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else
                fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
                label.querySelector( 'span.label-upload' ).innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });

        // Firefox bug fix
        input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
        input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
    });
}( document, window, 0 ));
