/**
 * ブログ目次
 */
$(function(){

    var toggle = $( 'a.ez-toc-toggle' );


    toggle.data( 'visible', true );


    toggle.click( function( event ) {

        event.preventDefault();

        if ( $( this ).data( 'visible' ) ) {

            $( this ).data( 'visible', false );

            $( 'ul.ez-toc-list' ).hide( 'fast' );

        } else {

            $( this ).data( 'visible', true );

            $( 'ul.ez-toc-list' ).show( 'fast' );
        }
    });

});