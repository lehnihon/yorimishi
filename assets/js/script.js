( function( $ ) {
    $('.menu-open').on('click',function(e){
        e.preventDefault();
        $('#nav-fullscreen').css('width','100%');
    });
    $('.menu-close').on('click',function(e){
        e.preventDefault();
        $('#nav-fullscreen').css('width','0%');
    });
} )( jQuery );