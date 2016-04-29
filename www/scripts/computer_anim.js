/**
 * Created by jimmy on 29/04/16.
 */

$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    //>=, not <=
    if (scroll >= 350) {
        //clearHeader, not clearheader - caps H
        $(".introduction").addClass("anim-computer");
    }

    if (scroll >= 600) {
        //clearHeader, not clearheader - caps H
        $(".introduction").addClass("anim-pencil");
    }
});