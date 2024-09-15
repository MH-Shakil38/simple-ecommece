jQuery(window).on("scroll touchmove", function () {
    $('.header').toggleClass('header-tiny', $(document).scrollTop() > 0);
});

$(document).ready(function (e) {
    $('.navbar-toggler,a[href="#contact"]').on('click', function () {
        $('.navbar').toggleClass('in');
        $('.navbar-collapse').toggleClass('show');
        $(this).toggleClass('open');
    });

    $('a[href="#contact"]').click(function () {
        $('.navbar-toggler').toggleClass('open');
    });

    $('.about-more').on('click', function (e) {
        $('.about-content').addClass('full');
        $(this).slideUp();
        e.preventdefault();
    });
    $('.icon-cart,.mini-cart-close').on('click', function (e) {
        $('.cart-link').toggleClass('show');
        e.stopPropagation();
    });

    $('body').on('click', function (e) {
        /* $('.cart-link').removeClass('show');*/
    });

    $('.navbar ul.navbar-nav li:has(ul)').addClass('dropdown');

    $('.navbar-collapse').on('click', '.dropdown a', function () {
      if ($(this).width() < 800) {
        if ($(this).next('ul').is(':visible')) {
          $(this).next('ul').slideUp('fast');
          $(this).removeClass('active');
        } else {
          $(this).closest('ul').children('.dropdown').children('.active').next('ul').slideUp('fast');
          $(this).closest('ul').children('.dropdown').children('.active').removeClass('active');
          $(this).next().slideToggle('fast');
          $(this).addClass('active');
        }
      }
    });

    if ($(this).width() < 800) {
        $('.navbar-user').on('click', function (e) {
            $('.navbar-user-dropdown').toggleClass('dropdown-in');
            /*e.preventdefault();*/
        });
    }

    $('.banner-slider').slick({
        draggable: true,
        arrows: false,
        dots: true,
        fade: true,
        autoplay: true,
        speed: 2500,
        infinite: true,
        // cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        touchThreshold: 100
    })

    //testimonial slider
    $('.testimonial-slider').slick({
        speed: 500,
        draggable: true,
        centerPadding: '0px',
        arrows: false,
        dots: true,
        cssEase: 'cubic-bezier(.52,.18,.27,.92)',
        autoplay: true,
        autoplaySpeed: 2500,
        slidesToShow: 1,
        responsive: [{
            breakpoint: 480,
            settings: {
                adaptiveHeight: false,
            }
        }]
    });

    // slider
    $slick_slider = $('.feature .feature-container,.blog-slider');
    settings_slider = {
        dots: false,
        arrows: false,
        centerMode: true,
        loop: false,
        speed: 800,
        cssEase: 'cubic-bezier(.52,.18,.27,.92)',
        centerPadding: '60px',
        // more settings
    }
    slick_on_mobile($slick_slider, settings_slider);

    // slick on mobile
    function slick_on_mobile(slider, settings) {
        $(window).on('load resize', function () {
            if ($(window).width() > 767) {
                if (slider.hasClass('slick-initialized')) {
                    slider.slick('unslick');
                }
                return
            }
            if (!slider.hasClass('slick-initialized')) {
                return slider.slick(settings);
            }
        });
    };

    //popup video
    setVideoEvent();

    function setVideoEvent() {
        $('.as-show-video').on('click', function () {
            playVideo(this);
            return false;
        });
        $('.as-close-video').on('click', function () {
            closeVideo();
            return false;
        });
    }

    function playVideo(obj) {
        console.log('test');
        var videoOptions = {
                width: 640,
                height: 360
            },
            size = getPlaySize(),
            videoKey = $(obj).attr('video-key'),
            source = $(obj).attr('data-source'),
            playerWidth = size.width,
            playerHeight = size.height;
        if (source == 'youku') {
            loadJs('http://player.youku.com/jsapi', function () {
                $('.video-container .video-area').css({
                    height: size.height,
                    width: size.width
                });
                $('.video-container').addClass('in');
                window.playerObj = new YKU.Player('videoplayer', {
                    styleid: '0',
                    client_id: 'ebab0e7d5e04b44d',
                    vid: videoKey,
                    autoplay: true
                });
            });
        } else {
            loadJs('https://www.youtube.com/player_api/', function () {
                if (window.player && window.player.loadVideoById) {
                    window.player.loadVideoById(videoKey);
                } else {
                    window.loadVideo =
                        setInterval(function () {
                            window.player && window.player.loadVideoById && window.player.loadVideoById(videoKey) && clearInterval(window.loadVideo);
                        }, 300);
                }
                $('.video-container').addClass('in');
                $('.video-container .video-area').css({
                    height: size.height,
                    width: size.width
                });
                if (window.player && window.player.playVideo) {
                    window.player.playVideo();
                } else {
                    window.tryPlay =
                        setInterval(function () {
                            window.player && window.player.playVideo && window.player.playVideo() && clearInterval(window.tryPlay);
                        }, 300);
                }
            });
        }

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.ENDED) {
                player && player.playVideo && player.playVideo();
            }
        }

        function getPlaySize() {
            var size = {
                height: 0,
                width: 0
            };
            if (window.innerWidth / (window.innerHeight - 80) > videoOptions.width / videoOptions.height) {
                size.height = window.innerHeight;
                size.width = (window.innerHeight - 80) * videoOptions.width / videoOptions.height;
            } else {
                size.width = window.innerWidth;
                size.height = window.innerWidth * videoOptions.height / videoOptions.width + 80;
            }
            return size;
        }

        function onYouTubePlayerAPIReady() {
            window.player = new YT.Player('videoplayer', {
                width: playerWidth,
                height: playerHeight,
                events: {
                    // 'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        window.onYouTubePlayerAPIReady = onYouTubePlayerAPIReady;
    }

    function closeVideo() {
        clearInterval(window.tryPlay);
        clearInterval(window.loadVideo);
        window.player && window.player.pauseVideo && window.player.pauseVideo();
        $('.as-video-container').eq(0).removeClass('in');
    }

    function loadJs(src, callback) {
        var _doc = document.getElementsByTagName('head')[0];
        var script = document.createElement('script');
        if (!src) {
            alert('loadJs函数的src不能为空！');
            return false;
        }
        if (loadJs.isLoad) {
            if (typeof callback == 'function') {
                callback();
            }
        } else {
            script.setAttribute('type', 'text/javascript');
            script.setAttribute('src', src);
            _doc.appendChild(script);
        }
        script.onload = function () {
            loadJs.isLoad = true;
            if (typeof callback == 'function') {
                callback();
            }
        }
    }

});

// Modal
/*function showHomeModal(id) {
  $("#" + id).fadeIn(200);
  $('html').toggleClass('no-scroll');
}

function hideHomeModal(id) {
    $("#" + id).fadeOut(400);
    $('html').toggleClass('no-scroll');
}*/

$('a[href^="#"]').click(function (e) {
    if ($(this.hash).length > 0) {
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 800);
        return false;
        e.preventDefault();
    }
});


$.fn.animateNumbers = function (stop, commas, duration, ease) {
    return this.each(function () {
        var $this = $(this);
        var start = parseInt($this.text().replace(/,/g, ""));
        commas = (commas === undefined) ? true : commas;
        $({
            value: start
        }).animate({
            value: stop
        }, {
            duration: duration == undefined ? 500 : duration,
            easing: ease == undefined ? "swing" : ease,
            step: function () {
                $this.text(Math.floor(this.value));
                if (commas) {
                    $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                }
            },
            complete: function () {
                if (parseInt($this.text()) !== stop) {
                    $this.text(stop);
                    if (commas) {
                        $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
                    }
                }
            }
        });
    });
};


/* ------- ADD CLASS -------*/
(function (e) {
    e.fn.visible = function (t, n, r) {
        var i = e(this).eq(0),
            s = i.get(0),
            o = e(window),
            u = o.scrollTop(),
            a = u + o.height(),
            f = o.scrollLeft(),
            l = f + o.width(),
            c = i.offset().top,
            h = c + i.height(),
            p = i.offset().left,
            d = p + i.width(),
            v = t === true ? h : c,
            m = t === true ? c : h,
            g = t === true ? d : p,
            y = t === true ? p : d,
            b = n === true ? s.offsetWidth * s.offsetHeight : true,
            r = r ? r : "both";
        if (r === "both") return !!b && m <= a && v >= u && y <= l && g >= f;
        else if (r === "vertical") return !!b && m <= a && v >= u;
        else if (r === "horizontal") return !!b && y <= l && g >= f
    }
})(jQuery)


// Variables
var wholeWindow = $(window);
var box = $('.be-animated');
// If it is then add a class
wholeWindow.scroll(function () {
    box.each(function (i, obj) {
        if ($(obj).visible(true)) {
            $(obj).addClass('in-view');
            $('.number-animate').each(function () {
                $(this).animateNumbers($(this).attr("data-value"), true, parseInt($(this).attr("data-animation-duration")));
            });

        }
    });
});

(function ($) {
    $.fn.parlx = function (options) {

        var options = $.extend({
            speed: 0.3
        }, options);

        return this.each(function () {

            const backImage = $(this);
            let speed = options.speed;

            if (speed > 0.5 || speed < 0.1) {
                speed = 0.3;
            }

            backImage.css({
                width: "100vw",
                height: "100vh"
            });

            const scrolled = $(window).scrollTop() - backImage.parent().offset().top;

            backImage.css({
                "background-position": "center center",
                "transform": "translateY(" + speed * scrolled + "px)"
            });
        });
    }
})(jQuery);

(function ($) {
    $(window).on("load resize scroll", function () {
        $('.parallax-bg').parlx();
    });
})(jQuery);
