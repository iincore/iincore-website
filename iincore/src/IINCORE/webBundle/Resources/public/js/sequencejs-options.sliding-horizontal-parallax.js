$(document).ready(function(){
    var options = {
        autoPlay: true,
        nextButton: true,
        prevButton: true,
        preloader: true,
        navigationSkip: false
    };
    var sequence = $("#sequence").sequence(options).data("sequence");

    sequence.afterLoaded = function(){
        $(".sequence-prev, .sequence-next").fadeIn(300);
    }

    sequence.afterNextFrameAnimatesIn = function animate() {
        $('.animate-custom').removeClass('hide');
        $('.animate-custom').removeClass().addClass('fadeIn animated animate-custom').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
            function(){
            $(this).removeClass('fadeIn animated');
        });
    };

    sequence.beforeNextFrameAnimatesIn = function () {
        $('.animate-custom').removeClass().addClass('fadeOut animated animate-custom').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass('fadeOut animated');
            $('.animate-custom').addClass('hide');
        });
    };


});