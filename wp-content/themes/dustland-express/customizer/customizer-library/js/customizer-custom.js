/**
 * Dustland Express Customizer Custom Functionality
 *
 */
( function( $ ) {
    
    $( window ).load( function() {
        
        var dustlandexpress_upgrade_button = '<a href="' + upgrade_button.link + '" class="dustlandexpress-upgrade-btn" target="_blank">' + upgrade_button.text + '</a>';    
        $( '.preview-notice' ).append( dustlandexpress_upgrade_button );
        
        var the_select_value = $( '#customize-control-kra-slider-type select' ).val();
        dustlandexpress_customizer_slider_check( the_select_value );
        
        $( '#customize-control-kra-slider-type select' ).on( 'change', function() {
            var select_value = $( this ).val();
            dustlandexpress_customizer_slider_check( select_value );
        } );
        
        function dustlandexpress_customizer_slider_check( select_value ) {
            if ( select_value == 'kra-slider-default' ) {
                $( '#customize-control-kra-meta-slider-shortcode' ).hide();
                $( '#customize-control-kra-slider-cats' ).show();
                $( '#customize-control-kra-upsell-two-up' ).show();
            } else if ( select_value == 'kra-meta-slider' ) {
                $( '#customize-control-kra-slider-cats' ).hide();
                $( '#customize-control-kra-upsell-two-up' ).hide();
                $( '#customize-control-kra-meta-slider-shortcode' ).show();
            } else {
                $( '#customize-control-kra-slider-cats' ).hide();
                $( '#customize-control-kra-upsell-two-up' ).hide();
                $( '#customize-control-kra-meta-slider-shortcode' ).hide();
            }
        }
        
    } );
    
} )( jQuery );