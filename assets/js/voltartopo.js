/**
 * Created by Vinny on 19/07/2017.
 */

$(window).scroll( function(){
    var scroll = $(window).scrollTop(), slowScroll = scroll/2;
    $('#header').css({ transform: "translateY(" + slowScroll + "px)" });
});

$('#top').hide();
$(window).scroll(function(){
    if($(window).scrollTop() >= 700 )
    {
        $('#top').fadeIn(500);
    }
    else
    {
        $('#top').fadeOut(500);
    }
});


var nav      = $('#nav');
var content  = $('#content');
var navHomeY = nav.offset().top;
var isFixed  = false;
var $w       = $(window);

$w.scroll(function(){
    var scrollTop = $w.scrollTop();
    var shouldBeFixed = scrollTop > navHomeY;
    if ( shouldBeFixed && ! isFixed ){
        nav.css({
            position: 'fixed',
            width: '100%',
            top: 0,
            opacity: 0.9
        });

        content.css({
            paddingTop: '80px'
        });

        isFixed = true;
    }
    else if ( ! shouldBeFixed && isFixed ){
        nav.css({
            position: 'relative',
            width: '100%',
            opacity: 1
        });

        content.css({
            paddingTop: '0'
        });

        isFixed = false;
    }
});