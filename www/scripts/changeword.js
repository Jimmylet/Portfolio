/**
 * Created by jimmy on 10/05/16.
 */

$(function() { // DOM ready
    $(".portfolio-intro__title").addClass("js--active");

    var txt = ['code', 'réalise', 'développe', 'design', 'crée', 'réalise'],
        n = txt.length,
        $swap = $('.portfolio-intro__swap'),
        $span,
        c = -1;

    // CREATE SPANS INSIDE SPAN
    for(var i=0; i<txt.length; i++) $swap.append($('<span />',{text:txt[i]}));
    // HIDE AND COLLECT THEM
    $span = $("span", $swap).hide();

    (function loop(){
        c = ++c % n;
        $swap.animate({width: $span.eq( c ).width() });
        $span.stop().fadeOut().eq(c).fadeIn().delay(1000).show(0, loop);
    }());

});
