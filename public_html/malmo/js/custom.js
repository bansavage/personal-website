//is this fucking Safari?
var is_safari = (navigator.userAgent.indexOf('Safari') != -1) && (navigator.userAgent.indexOf('Chrome') == -1);

$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
});


/* Show/hide nav bar */
var prev = 0;
var $window = $(window);
var nav = $('#mainNav');

$window.on('scroll', function(){
    var scrollTop = $window.scrollTop();
    nav.toggleClass('hidden-nav', scrollTop > prev);
    prev = scrollTop;
});

// Initializing values
var onplaying = true;
var onpause = false;
var video = $('video');

// On video playing toggle values
video.onplaying = function() {
    onplaying = true;
    onpause = false;
};

// On video pause toggle values
video.onpause = function() {
    onplaying = false;
    onpause = true;
};

// Play video function
function playVid() {
    if (video.paused && !onplaying) {
        video.play();
    }
}

// Pause video function
function pauseVid() {
    if (!video.paused && !onpause) {
        video.pause();
    }
}


/*
//add mouseover functions to p tags
$( document ).ready(function() {

    $(".bgImageText").mouseover(function() {
        hideImageText(this,true);
    });
    $(".bgImageText").mouseout(function() {
        hideImageText(this,false);
    });
    $("#bgBikeVideo").mouseover(function() {
        $('body').css('cursor', 'none');
    });
    $("#bgBikeVideo").mouseout(function() {
        $('body').css('cursor', 'default');
    });
});

//function to hide text
function hideImageText(ele,showHide){
    if(showHide){
        $(ele).animate({
            "opacity": 0
        });
        $('body').css('cursor', 'none');
    }else{
        $(ele).animate({
            "opacity": 1
        });
        $('body').css('cursor', 'default');
    }
}
*/


//function to autoplay video on scroll
$(document).ready(function() {
    // Get media - with autoplay disabled (audio or video)
    var media = $('video').not("[autoplay='autoplay']");
    var tolerancePixel = 40;

    function checkMedia(){
            // Get current browser top and bottom
            var scrollTop = $(window).scrollTop() + tolerancePixel;
            var scrollBottom = $(window).scrollTop() + $(window).height() - tolerancePixel;

            media.each(function(index, el) {
                var yTopMedia = $(this).offset().top;
                var yBottomMedia = $(this).height() + yTopMedia;

                if(scrollTop < yBottomMedia && scrollBottom > yTopMedia){
                    var playPromise = $(this).get(0).play();
                    if (playPromise !== undefined) {
                        playPromise.then(_ => {
                            // Automatic playback started!
                            // Show playing UI.
                        })
                    .catch(error => {
                            // Auto-play was prevented
                        });
                    }
                } else {
                    var playPromise = $(this).get(0).pause();
                    if (playPromise !== undefined) {
                        playPromise.then(_ => {
                            // Automatic playback started!
                            // Show playing UI.
                        })
                        .catch(error => {
                                // Auto-play was prevented
                        });
                    }
                }
            });
    }
    $(document).on('scroll', checkMedia);
});


/* Carousel Gallery */
$( document ).ready(function() {
    $('#myCarousel').carousel({
        interval: 3500
    });
    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
        var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-'+id).html());
    });
});

/* Animation of Pics */
$(window).scroll(function() {
    var extraPx = 350;
    if(is_safari){
        extraPx = 600;
    }
    $('.animate-slide-up').each(function(){
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + extraPx) {
            $(this).css("visibility","visible");
            $(this).addClass("slideUp");
        }
    });
    $('.animate-slide-down').each(function(){
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + extraPx) {
            $(this).css("visibility","visible");
            $(this).addClass("slideDown");
        }
    });
    $('.animate-slide-left').each(function(){
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + extraPx) {
            $(this).css("visibility","visible");
            $(this).addClass("slideLeft");
        }
    });
});


$( "#oxfam-hover" )
    .mouseover(function() {
        $( this).parent().parent().find('*').not("#oxfam-img").css( "color", "transparent" );
        $( this).parent().parent().find('*').not("#oxfam-img").css( "text-shadow", "0 0 5px rgba(0,0,0,0.5)" );
        $( this).parent().parent().find('#oxfam-img').css( "box-shadow", "0px 12px 22px 1px #333" );
    })
    .mouseout(function() {
        $( this).parent().parent().find('*').not("#oxfam-img").css( "color", "initial" );
        $( this).parent().parent().find('*').not("#oxfam-img").css( "text-shadow", "unset" );
        $( this).parent().parent().find('#oxfam-img').css( "box-shadow", "unset" );
    });

$( "#green-hover" )
    .mouseover(function() {
        $( this).parent().parent().find('*').not("#green-img").css( "color", "transparent" );
        $( this).parent().parent().find('*').not("#green-img").css( "text-shadow", "0 0 5px rgba(0,0,0,0.5)" );
        $( this).parent().parent().find('#green-img').css( "box-shadow", "0px 12px 22px 1px #333" );
    })
    .mouseout(function() {
        $( this).parent().parent().find('*').not("#green-img").css( "color", "initial" );
        $( this).parent().parent().find('*').not("#green-img").css( "text-shadow", "unset" );
        $( this).parent().parent().find('#green-img').css( "box-shadow", "unset" );
    });
$( "#bike-hover" )
    .mouseover(function() {
        $( this).parent().parent().parent().parent().find('*').not("#bike-img").css( "color", "transparent" );
        $( this).parent().parent().parent().parent().find('*').not("#bike-img").css( "text-shadow", "0 0 5px rgba(0,0,0,0.5)" );
        $( this).parent().parent().parent().parent().find('#bike-img').css( "box-shadow", "0px 12px 22px 1px #333" );
    })
    .mouseout(function() {
        $( this).parent().parent().parent().parent().find('*').not("#bike-img").css( "color", "initial" );
        $( this).parent().parent().parent().parent().find('*').not("#bike-img").css( "text-shadow", "unset" );
        $( this).parent().parent().parent().parent().find('#bike-img').css( "box-shadow", "unset" );
    });
$( "#emporia-hover" )
    .mouseover(function() {
        $( this).parent().parent().parent().parent().find('*').not("#emporia-img").css( "color", "transparent" );
        $( this).parent().parent().parent().parent().find('*').not("#emporia-img").css( "text-shadow", "0 0 5px rgba(0,0,0,0.5)" );
        $( this).parent().parent().parent().parent().find('#emporia-img').css( "box-shadow", "0px 12px 22px 1px #333" );
    })
    .mouseout(function() {
        $( this).parent().parent().parent().parent().find('*').not("#emporia-img").css( "color", "initial" );
        $( this).parent().parent().parent().parent().find('*').not("#emporia-img").css( "text-shadow", "unset" );
        $( this).parent().parent().parent().parent().find('#emporia-img').css( "box-shadow", "unset" );
    });
