var scrollTop;

function wResize() {
    scrollTop = $(document).scrollTop();
}

$(window).resize(wResize());

var mobileMenu = $("#mobile-menu");
var hamContainer = $("#hamburger-container");

$(document).click(function(ev) {
    if(!($(mobileMenu).is(":hidden"))) {
        if (!$(ev.target).is(mobileMenu) && mobileMenu.has(ev.target).length == 0) {
            $('#mobile-menu').collapse('hide');
            if(!$(ev.target).is(hamContainer) && hamContainer.has(ev.target).length == 0) {
                $("#ham-one").css({
                    "transform": "rotate(0)",
                    "top": "0.5rem"
                });
                $("#ham-two").css({
                    "opacity": "1"
                });
                $("#ham-three").css({
                    "transform": "rotate(0)",
                    "bottom": "0.5rem"
                });
            }
        }
    }
});

$(document).ready(function() {
    wResize();

    $("#hamburger-container").click(function() {
        if(!$('#mobile-menu').hasClass('show')) {
            $("#ham-one").css({
                "transform": "rotate(45deg)",
                "top": "1.15rem"
            });
            $("#ham-two").css({
                "opacity": "0"
            });
            $("#ham-three").css({
                "transform": "rotate(-45deg)",
                "bottom": "1.15rem"
            });
        }
        else {
            $("#ham-one").css({
                "transform": "rotate(0)",
                "top": "0.5rem"
            });
            $("#ham-two").css({
                "opacity": "1"
            });
            $("#ham-three").css({
                "transform": "rotate(0)",
                "bottom": "0.5rem"
            });
        }
    });

    $(document).scroll(function() {
        scrollTop = $(this).scrollTop();

        if(scrollTop > 1000) {
            $("#anchor-top").show();
        }
        else {
            $("#anchor-top").hide();
        }
    });

    $("#anchor-top").click(function() {
        $("html, body").animate({scrollTop:0}, 500);
    });
});
