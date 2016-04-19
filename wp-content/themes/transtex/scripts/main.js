
(function(window, document, $) {
    'use strict';

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
