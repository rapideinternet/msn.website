// hide bootstrap collapse onclick
$('.navbar-nav>li>span').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});
// Smooth scrolling
$(document).ready(function () {
    // menu buttons
    $('#home').click(function() {
        $('html, body').animate({
            scrollTop: $('#home-top').offset().top
        }, 1000)
    }),
        $('#app').click(function (){
            $('html, body').animate({
                scrollTop: $("#app-top").offset().top-125
            }, 1000)
        }),
        $('#partners').click(function (){
            $('html, body').animate({
                scrollTop: $("#partners-top").offset().top-125
            }, 1000)
        })
        $('#appstore').click(function (){
            $('html, body').animate({
                scrollTop: $("#appstore-top").offset().top-125
            }, 1000)
        }),
        $('#contact').click(function (){
            $('html, body').animate({
                scrollTop: $("#contact-top").offset().top-125
            }, 1000)
        }),

        //grid buttons
        $('#route-maken, #alle-routes, #themas, #onthaalpunten, #pios, #activiteiten').click(function (){
            $('#load-app-display').show();
            $('html, body').animate({
                scrollTop: $("#load-app").offset().top-125
            }, 1000)
        })
});
