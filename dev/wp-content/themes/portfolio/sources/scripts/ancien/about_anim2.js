/**
 * Created by jimmy on 9/05/16.
 */

jQuery(document).ready(function($){
    var timelineBlocks = $('.about-cv__timeline-block'),
        offset = 0.8;

    //hide timeline blocks which are outside the viewport
    hideBlocks(timelineBlocks, offset);

    //on scolling, show/animate timeline blocks when enter the viewport
    $(window).on('scroll', function(){
        (!window.requestAnimationFrame)
            ? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
            : window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
    });

    function hideBlocks(blocks, offset) {
        blocks.each(function(){
            ( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.about-cv__timeline-circle, .about-cv__timeline-content').addClass('is-hidden');
        });
    }

    function showBlocks(blocks, offset) {
        blocks.each(function(){
            ( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.about-cv__timeline-circle').hasClass('is-hidden') ) && $(this).find('.about-cv__timeline-circle, .about-cv__timeline-content').removeClass('is-hidden').addClass('bounce-in');
        });
    }
});
