(function($) {
    "use strict";

	window.onload = function(){
	    $(".bt-loading").fadeOut("1500", function(){
	        $('#bt_loading').css("display", "none");
	    });
	};

    jQuery(document).ready(function($){
        $("#boss_filter_search").selectbox();
    });
   
    jQuery(window).scroll(function() {
    	var height_header = $('#top').height() + $('header').height() + $('.boss_header').height() + 10;
        if ($(window).scrollTop() > height_header) {
            $('.menu').addClass('boss_scroll');
            $('.boss_header').addClass('boss_scroll');
            $('.header_category').addClass('boss_scroll');
        } else {
            $('.boss_header').removeClass('boss_scroll');
            $('.menu').removeClass('boss_scroll');
            $('.header_category').removeClass('boss_scroll');
        }

         /* Scroll Top */
	    if ($(this).scrollTop() > 600) {
	        $('#back_top').fadeIn();
	    } else {
	        $('#back_top').fadeOut();
	    }
	});
	$("#back_top").on('click',function(e) {
	    e.preventDefault();
	    $('body,html').animate({
	        scrollTop: 0
	    }, 800, 'swing');
	});

})(jQuery);



 jQuery(document).ready(function() {
            /* Related Article Slider */
            $('#article_related').carouFredSel({
                auto: false,
                responsive: true,
                width: '100%',
                prev: '#prev_art_related',
                next: '#next_art_related',
                swipe: {
                    onTouch: true
                },
                items: {
                    width: 272,
                    height: 'auto',
                    visible: {
                        min: 1,
                        max: 3
                    }
                },
                scroll: {
                    direction: 'left', //  The direction of the transition.
                    duration: 1000 //  The duration of the transition.
                }
            });
        });

function getMaxHeight($elms) {
    var maxHeight = 0;
    $($elms).each(function() {
        var height = $(this).outerHeight();
        if (height > maxHeight) {
            maxHeight = height;
        }
    });
    return maxHeight;
};