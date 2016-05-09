/**
 * Created by jimmy on 29/04/16.
 */


$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    //>=, not <=
    if (scroll >= 0) {
        $(".about-cv__timeline-block").css("visibility","hidden");
    }
    if (scroll >= 450) {
        $(".content-3").addClass("bounce-in");
        $(".circle-3").addClass("circlescale");
    }
    if (scroll >= 650) {
        $(".content-2").addClass("bounce-reverse");
        $(".circle-2").addClass("circlescale");
    }
    if (scroll >= 850) {
        $(".content-1").addClass("bounce-in");
        $(".circle-1").addClass("circlescale");
    }

});

