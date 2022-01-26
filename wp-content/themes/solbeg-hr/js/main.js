$(document).ready(function () {
    //Slick slider
    $(".main-page-history-company__year").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: ".main-page-history-company__text",
        dots: false,
        arrows: true,
        prevArrow: $('.prev-year-link'),
        nextArrow: $(''),
        autoplay: false,
        autoplaySpeed: 2000,
        speed: 600,
        centerPadding: '60px',
        focusOnSelect: true,
        centerMode: false,
        infinite: false,
        responsive: [
            {
                breakpoint: 1440,
                settings: {
                    slidesToShow: 4,
                    centerMode: false,
                    centerPadding: 0,
                    arrows: false,
                },
            },
            {
                breakpoint: 797,
                settings: {
                    slidesToShow: 1,
                    centerPadding: 0,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: '<button class="slick-prev slick-arrow"></button>',
                    nextArrow: '<button class="slick-next slick-arrow"></button>'
                },
            },
        ],
    });
    $('.main-page-history-company__year').on('afterChange', function (event, slick, currentSlide, nextSlide) {
        $('.slick-slide').removeClass('slick-active-first slick-active-last');
        $('.slick-active').eq(0).addClass('slick-active-first');
        $('.prev-year-link').text('');
        $('.prev-year-link').append($('.slick-active').eq(0).prev().text());
    }).trigger('afterChange');
    $(".main-page-history-company__text").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        focusOnSelect: true,
        asNavFor: ".main-page-history-company__year",
        infinite: false,
        responsive: [
            {
                breakpoint: 797,
                settings: {
                    arrows: false,
                },
            },
        ],
    });
    $(".main-page-working-on__slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
    });


    $(".main-page-our-offices__slider").slick({
        infinite: false,
        centerMode: false,
        slidesToShow: 5.5,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4.5,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 5.5,
                },
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 2.5,
                },
            },
        ],

    });


    $(".main-page-what-they-say__slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $(".what-they-say__slide-arrows-left"),
        nextArrow: $(".what-they-say__slide-arrows-right"),
        fade: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    dots: true,
                },
            },

        ],
    });


    function windowSize() {
        if ($(window).width() <= '582') {
            $(".main-page-important-to-us__inner").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
            });
        }
    }


    $(".benefit-list").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        infinite: false,
        padding: 10,
        responsive: [
            {
                breakpoint: 1439,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 3.5,
                },
            },
            {
                breakpoint: 765,
                settings: {
                    slidesToShow: 1,
                    // autoSlidesToShow: true,
                    variableWidth: true,
                },
            },
        ],
    });


    $(window).on('load', windowSize);
    //tabs
    $(".main-page-soc-pack__tab-wrapper .main-page-soc-pack__tab")
        .click(function () {
            $(".main-page-soc-pack__tab-wrapper .main-page-soc-pack__tab")
                .removeClass("active")
                .eq($(this).index())
                .addClass("active");
            $(".main-page-soc-pack__tab-item").hide().eq($(this).index()).fadeIn();
            $(".main-page-soc-pack__tab-item").removeClass("active");
            $(".main-page-soc-pack__tab-item").eq($(this).index()).addClass("active");
        })
        .eq(0)
        .addClass("active");
    //accordions
    $(function () {
        $(".accordion-button").on("click", function (e) {
            e.preventDefault();
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).next().stop().slideUp(300);
            } else {
                $(this).addClass("active");
                $(this).next().stop().slideDown(300);
            }
        });
    });
    //video
    // $(document).on("click", ".js-videoPoster", function (e) {
    //     e.preventDefault();
    //     var poster = $(this);
    //     var wrapper = poster.closest(".js-videoWrapper");
    //     videoPlay(wrapper);
    // });
    //
    // function videoPlay(wrapper) {
    //     var iframe = wrapper.find(".js-videoIframe");
    //     var src = iframe.data("src");
    //     wrapper.addClass("videoWrapperActive");
    //     iframe.attr("src", src);
    // }
    $('.js-videoPoster').on('click', function () {
        // $('.youtube-block').addClass('active');
        $(".js-videoWrapper").addClass("videoWrapperActive");
        $(".js-videoIframe")[0].src += "?autoplay=1";
    });
    //menu
    if ($(window).width() < 1024) {
        $("#burger-menu").on("click", function (e) {
            $(".header-mobile__menu").css("height", "100vh");
            $(".header-mobile__menu").slideToggle(300);
            // $("body").toggleClass("overflow-hidden");
        });
        // menu-item
        $(".menu-item").on("click", function (e) {
            $(".header-mobile__menu").slideToggle(300);
            if ($("#burger-menu").hasClass("open")) {
                $("#burger-menu").removeClass("open");
            }
        });
    }

    //popup-close
    $("#popup-close__link").on("click", function (e) {
        e.preventDefault();
        $('body').css('overflow', 'auto');
        $(".popup").hide();
        $('.main-page-comtact-form__inner#trainee').hide();
        $('.main-page-comtact-form__inner#contact-form').hide();
    });
    $(".popup-open__link").on("click", function (e) {
        e.preventDefault();
        $('body').css('overflow', 'hidden');
        if ($(e.target).attr('data-form') === 'trainee') {
            $('.main-page-comtact-form__inner#contact-form').hide();
            $('.main-page-comtact-form__inner#trainee').show();
        } else {
            $('.main-page-comtact-form__inner#contact-form').show();
        }
        $(".popup").show();

    });
    $(".benefit__get_button").on("click", function (e) {
        e.preventDefault();
        $('body').css('overflow', 'hidden');
        if ($(e.target).attr('data-form') === 'trainee') {
            $('.main-page-comtact-form__inner#contact-form').hide();
            $('.main-page-comtact-form__inner#trainee').show();
        } else {
            $('.main-page-comtact-form__inner#contact-form').show();
        }
        $(".popup").show();

    });
    ///////////////////////
    document.getElementById("burger-menu").addEventListener("click", (event) => {
        if (event.currentTarget.classList.contains("open")) {
            event.currentTarget.classList.remove("open");
        } else {
            event.currentTarget.classList.add("open");
        }
    });
    ///////////////////////
    $(".main-page-vacancy__filter-item").on("click", function () {
        $(".main-page-vacancy__filter-item").removeClass("active");
        $(".main-page-vacancy__filter-item button").removeClass("active");
        var gorod = $(this).children().attr("class");
        $(this).addClass("active");
        $(".main-page-vacancy__accordions ul li").removeClass("active")
        $(".main-page-vacancy__accordions ul").find($("." + gorod).addClass("active"));
        if ($(".main-page-vacancy__filter-item-show-all").hasClass("active")) {
            $(".vacancy_location").addClass("active");
        }
    });
    if ($(".main-page-vacancy__filter-item-show-all").hasClass("active")) {
        $(".vacancy_location").addClass("active");
    }

    // accordion-panel__show-more
    if ($(window).width() > 1024) {
        $(".accordion-panel__show-more").css({display: "none"});
        $(document).on("click", ".accordion-button", function () {
            if ($(this).hasClass("active")) {
                if (
                    $(this)
                        .next()
                        .find(".vacancy-info-block__grid")
                        .find(".vacancy-info-block__info")
                        .height() > 650
                ) {
                    $(this)
                        .next()
                        .find(".vacancy-info-block__grid")
                        .css({"max-height": 650});
                    $(this)
                        .next()
                        .find(".accordion-panel__show-more")
                        .css({display: "block"});
                }
            } else {
                $(".accordion-panel__show-more").css({display: "none"});
            }
        });
    }
    $(document).on("click", ".accordion-button", function () {
        if ($(this).hasClass("active")) {
            $(".accordion-panel__show-more").css({display: "block"});
        }
    });
    if ($(window).width() >= 1024) {
        $(".main-page-important-to-us__item").mouseover(function (event) {
            $(this).find(".main-page-important-to-us__item-back").addClass('hover-show');
        });
        $(".main-page-important-to-us__item").mouseleave(function (event) {
            $(this).find(".main-page-important-to-us__item-back").removeClass('hover-show');
        });
    } else {
        $(".main-page-important-to-us__item").click(function (event) {
            $(this).find(".main-page-important-to-us__item-back").toggleClass('hover-show');
        });
    }
});


$(".index__info__item__marker").hover(function () {
    $(this).prev().toggleClass("active");
});
$(".index__rating-col").text($(".total_all").text());


$(document).ready(function () {
    var width = $(window).width();
    if (width <= 1424) {
        $('.main-page-vacancy__filter').addClass('dropdown');
    }
});
$(window).on('resize', function () {
    var win = $(this);
    if (win.width() <= 1424) {
        $('.main-page-vacancy__filter').addClass('dropdown');
    }
    if (win.width() >= 1424) {
        $('.main-page-vacancy__filter').removeClass('dropdown');
    }
});

$(".main-page-vacancy__filter-check").on("click", function () {
    $(this).toggleClass('active');
    $(".main-page-vacancy__filter-items").toggleClass("active");
});
$(".main-page-vacancy__filter-item").on("click", function () {
    $(".main-page-vacancy__filter-check").text($(this).children().text());
    $(".main-page-vacancy__filter-items").removeClass('active');
});

// $(document).ready(function () {
//     $(".menu li").on("click", "a", function (event) {
//         event.preventDefault();
//         var id = $(this).attr('href'),
//             top = $(id).offset().top;
//         var header = $('.header').outerHeight(true);
//         $('body,html').animate({scrollTop: top - header + 1}, 1000);
//     });
// });
// $(document).ready(function () {
//     $(".header-mobile__menu-list li").on("click", "a", function (event) {
//         event.preventDefault();
//         var id = $(this).attr('href'),
//             top = $(id).offset().top;
//         var header_mobile = $('.header-mobile').outerHeight(true);
//         $('body,html').animate({scrollTop: top}, 1000);
//     });
// });


$(document).ready(function () {
    $('body,html').scrollTop(0);
    $(".menu li").on("click", "a", function (event) {
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        var header = $('.header').outerHeight(true);
        $('body,html').animate({scrollTop: top - header + 1}, 1500);
    });
    var hash = location.hash;
    if ($(hash).length) {
        var top = $(hash).offset().top;
        var header = $('.header').outerHeight(true);
        $('body,html').animate({scrollTop: top - header + 1}, 1500);
    }
});
$(document).ready(function () {
    $('body,html').scrollTop(0);
    $(".header-mobile__menu-list li").on("click", "a", function (event) {
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        var header_mobile = $('.header-mobile').outerHeight(true);
        $('body,html').animate({scrollTop: top}, 1000);
    });
    var hash = location.hash;
    if ($(hash).length) {
        var top = $(hash).offset().top;
        var header_mobile = $('.header-mobile').outerHeight(true);
        $('body,html').animate({scrollTop: top}, 1000);
    }
});

$(document).ready(function () {
    if ($('body').hasClass('home')) {
        $(".menu li a").each(function () {
            var link =  $(this).attr('href');
            var linkNew = link.replace('/','');
            $(this).attr('href',linkNew);
        });
        $(".header-mobile__menu-list li a").each(function () {
            var link =  $(this).attr('href');
            var linkNew = link.replace('/','');
            $(this).attr('href',linkNew);
        });
    }
});
$('.anchor-down').on('click', function () {
    let href = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(href).offset().top - 40
    }, {
        duration: 370,
        easing: "linear"
    });

    return false;
});
$(document).ready(function () {
    $(".main-page-top-block__video .container").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        var header = $('.header').outerHeight(true);
        $('body,html').animate({scrollTop: top - header + 1}, 1000);
    });
});
$(document).ready(function () {
    $(".what-they-say__slide-quote .quote-open").on("click", function (event) {
        event.preventDefault();
        $(this).toggleClass("active");
        $(".what-they-say__slide-quote p").toggleClass("open");
        $(this).text("Скрыть текст");
        if ($(this).hasClass("active")) {
            $(this).text("Скрыть текст");
        } else {
            $(this).text("Читать полностью");
        }
    });
    $(".main-page-what-they-say__slide-arrows .what-they-say-slide-arrow").on("click", function (event) {
        event.preventDefault();
        $(".what-they-say__slide-quote .quote-open").removeClass("active");
        $(".what-they-say__slide-quote .quote-open").text("Читать полностью");
        $(".what-they-say__slide-quote p").removeClass("open");
    });
});


function windowSizeTablet() {
    if ($(window).width() <= '582') {
        $(function () {
            $(".what-they-say__slide-quote p").each(function () {
                var height = $(this).height();
                var min = 196;
                if (height <= min) {
                    $(this).parent().addClass('normal');
                } else {
                    $(this).css("-webkit-line-clamp", "7");
                }
            });
        });
    } else if ($(window).width() <= '802') {
        $(function () {
            $(".what-they-say__slide-quote p").each(function () {
                var height = $(this).height();
                var min = 140;
                if (height <= min) {
                    $(this).parent().addClass('normal');
                } else {
                    $(this).css("-webkit-line-clamp", "5");
                }
            });
        });
    } else {
        if ($(window).width() <= '1440') {
            $(function () {
                $(".what-they-say__slide-quote p").each(function () {
                    var height = $(this).height();
                    var min = 196;
                    if (height <= min) {
                        $(this).parent().addClass('normal');
                    } else {
                        $(this).css("-webkit-line-clamp", "7");
                    }
                });
            });
        }
    }
}

$(window).on('load', windowSizeTablet);

jQuery(function ($) {
    $(document).mouseup(function (e) {
        var div = $(".main-page-vacancy__filter-check ");
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            div.removeClass("active");
            $(".main-page-vacancy__filter-items").removeClass("active");
        }
    });
});
$(".privacy-checkbox label").click(function () {
    $(this).parent().toggleClass("active");
    $(".contact-form__wrapper .base__button").toggleClass("active");
});

if ($('form .privacy-checkbox').length > 0) {
    $(".privacy-checkbox").addClass("check");
}

$('body').on('click', '.main-page-our-offices__slider .slick-arrow', function () {
    if ($(".main-page-our-offices__slider .slick-track .main-page-our-offices__item:first-child").hasClass('slick-active')) {
        $(".main-page-our-offices__slider").removeClass("first");
    } else {
        $(".main-page-our-offices__slider").addClass("first");
    }
    if ($(".main-page-our-offices__slider .slick-track .main-page-our-offices__item:last-child").hasClass('slick-active')) {
        $(".main-page-our-offices__slider").removeClass("last");
    } else {
        $(".main-page-our-offices__slider").addClass("last");
    }
})
$(document).ready(function () {
    if ($(".benefit-list__container .slick-next").length){
        $(".benefit-list").addClass("last");
    }
});
$('body').on('click', '.benefit-list  .slick-arrow', function () {
    if ($(".benefit-list .slick-track .benefit-items:first-child").hasClass('slick-active')) {
        $(".benefit-list").removeClass("first");
    } else {
        $(".benefit-list").addClass("first");
    }
    if ($(".benefit-list .slick-track .benefit-items:last-child").hasClass('slick-active')) {
        $(".benefit-list").removeClass("last");
    } else {
        $(".benefit-list").addClass("last");
    }
})