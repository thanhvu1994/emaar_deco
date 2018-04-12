// Sticky menu

jQuery(function( $ ){
    $(window).scroll(function() {
        var yPos = ( $(window).scrollTop() );
        if(yPos > 250) { // show sticky menu after screen has scrolled down 250px from the top
            $(".nav-secondary").fadeIn();
        } else {
            $(".nav-secondary").fadeOut();
        }
    });
});