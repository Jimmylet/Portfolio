/**
 * Created by jimmy on 29/04/16.
 */

$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    //>=, not <=
    if (scroll >= 350) {
        $(".introduction").addClass("anim-computer");
    }

    if (scroll >= 550) {
        $(".introduction").addClass("anim-pencil");
    }
    if (scroll >= 1400) {
        $(".whati").addClass("anim-line");
    }

    if (scroll >= 1480) {
        $(".ido__card").addClass("ido-anim");
    }
});