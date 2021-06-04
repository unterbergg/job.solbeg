$(document).ready(function () {
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
  if ($(window).width() < 450) {
    $(".main-page-soc-pack__tabs").slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      centerPadding: '60px',
      focusOnSelect: true,
      centerMode: false,
      infinite: false
    });
  }

  $('.main-page-history-company__year').on('afterChange', function(event, slick, currentSlide, nextSlide){
    $('.slick-slide').removeClass('slick-active-first slick-active-last');
    $('.slick-active').eq(0).addClass('slick-active-first');
    // $('.slick-active').eq(3).addClass('slick-active-last');
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
  $(".main-page-what-they-say__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: $(".what-they-say__slide-arrows-left"),
    nextArrow: $(".what-they-say__slide-arrows-right"),
    fade: true,
  });
  //tabs
  $(".main-page-soc-pack__tab-wrapper .main-page-soc-pack__tab")
    .click(function () {
      $(".main-page-soc-pack__tab-wrapper .main-page-soc-pack__tab")
        .removeClass("active")
        .eq($(this).index())
        .addClass("active");
      $(".main-page-soc-pack__tab-item").hide().eq($(this).index()).fadeIn();
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
  $(document).on("click", ".js-videoPoster", function (e) {
    e.preventDefault();
    var poster = $(this);
    var wrapper = poster.closest(".js-videoWrapper");
    videoPlay(wrapper);
  });

  function videoPlay(wrapper) {
    var iframe = wrapper.find(".js-videoIframe");
    var src = iframe.data("src");
    wrapper.addClass("videoWrapperActive");
    iframe.attr("src", src);
  }

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
      // $("body").toggleClass("overflow-hidden");
    });
  }

  //popup-close
  $("#popup-close__link").on("click", function (e) {
    e.preventDefault();
    $(".popup").hide();
  });
  $(".popup-open__link").on("click", function (e) {
    e.preventDefault();
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
  $(".main-page-vacancy__filter-item").on("click", function (e) {
    $(".main-page-vacancy__filter-item").removeClass("active");
    $(this).toggleClass("active");
    if ($(this).hasClass("Минск")) {
      $(".vacancy_location").hide();
      $(".vacancy_location.Минск").show();
    }
    if ($(this).hasClass("Брест")) {
      $(".vacancy_location").hide();
      $(".vacancy_location.Брест").show();
    }
    if ($(this).hasClass("main-page-vacancy__filter-item-show-all")) {
      $(".vacancy_location.Минск").show();
      $(".vacancy_location.Брест").show();
    }
  });

  // ------------  File upload BEGIN ------------

  $(document).on(
    "change",
    ".comtact-form__resume input[type='file']",
    function () {
      if ($(this).val()) {
        var filename = $(this).val().split("\\");

        filename = filename[filename.length - 1];

        $(".comtact-form__resume-text").text(filename);
        $(".comtact-form__resume-plus").toggleClass(
          "comtact-form__resume-attach comtact-form__resume-plus"
        );
        $(".comtact-form__resume-after").toggleClass(
          "comtact-form__resume-remove comtact-form__resume-after"
        );
        console.log($(".comtact-form__resume input[type='file']").val());
      }
    }
  );
  $(document).on("click", ".comtact-form__resume-remove", function () {
    $(".comtact-form__resume input[type='file']").val(null);
    $(".comtact-form__resume-text").text("Прикрепить резюме");
    $(".comtact-form__resume-attach").toggleClass(
      "comtact-form__resume-plus comtact-form__resume-attach"
    );
    $(".comtact-form__resume-remove").toggleClass(
      "comtact-form__resume-after comtact-form__resume-remove"
    );

    console.log($(".comtact-form__resume input[type='file']").val());
  });
  // ------------ File upload END ------------

  // $('.wpcf7').on('wpcf7invalid', function () {
  //   console.log('wpcf7invalid');
  // });
  // $('.wpcf7').on('wpcf7spam', function () {
  //   console.log('wpcf7spam');
  // });
  // $('.wpcf7').on('wpcf7mailsent', function () {
  //   console.log('wpcf7mailsent');
  // });
  // $('.wpcf7').on('wpcf7mailfailed', function () {
  //   console.log('wpcf7mailfailed');
  // });

  $(".comtact-form__resume-after")
    .mouseenter(function () {
      $(".comtact-form__resume .visible-only-if-file-invalid").show();
    })
    .mouseleave(function () {
      $(".comtact-form__resume .visible-only-if-file-invalid").hide();
    });
  //////////////////////

  $(".wpcf7").on("wpcf7invalid", function (event) {
    $(".fill-in-required-fields").show();
  });
  
  $(".wpcf7-validates-as-required").bind("DOMSubtreeModified", function () {
    if ($(".comtact-form__resume-input").attr("aria-invalid", "false")) {
      $(".visible-only-if-file-invalid").show();
    }
  });
  // mailsent
  $(".wpcf7").on("wpcf7mailsent", function (event) {
    $(".wpcf7-validates-as-required")
      .closest("div")
      .css("border", "2px solid rgba(0, 0, 0, 0.1)");
    $(".main-page-comtact-form__thanks").show();
    $(".comtact-form__resume-text").text("Прикрепить резюме");
    $(".comtact-form__resume-attach").toggleClass(
      "comtact-form__resume-plus comtact-form__resume-attach"
    );
    $(".comtact-form__resume-remove").toggleClass(
      "comtact-form__resume-after comtact-form__resume-remove"
    );
    $(".fill-in-required-fields").hide();
  });
  $(window.document).on("click", function (event) {
    $(".invalid__phone").hide();
    $(".invalid__email").hide();
    $(".visible-only-if-file-invalid").hide();
    $(".comtact-form__grid>div").css("border", "2px solid rgba(0, 0, 0, 0.1)");
    $(".fill-in-required-fields").hide();
  });
  // required phone
  var elemToObservePhone = document.getElementById("phone");
  var prevClassStatePhone = elemToObservePhone.classList.contains(
    "wpcf7-not-valid"
  );

  var observer = new MutationObserver(function (mutations) {
    mutations.forEach(function (mutation) {
      if (mutation.attributeName == "class") {
        var currentClassState = mutation.target.classList.contains(
          "wpcf7-not-valid"
        );
        if (prevClassStatePhone !== currentClassState) {
          prevClassStatePhone = currentClassState;
          if (currentClassState) {
            console.log("class added!");
            $(".invalid__phone").show();
            $(".comtact-form__phone").css("border", "2px solid black");
            
          } else {
            $(".invalid__phone").hide();
            console.log("class removed!");
            $(".comtact-form__phone").css(
              "border",
              "2px solid rgba(0, 0, 0, 0.1)"
            );
          }
        }
      }
    });
  });
  observer.observe(elemToObservePhone, { attributes: true });
  // end required phone
  // required email
  var elemToObserveEmail = document.getElementById("email");
  var prevClassStateEmail = elemToObserveEmail.classList.contains(
    "wpcf7-not-valid"
  );

  var observer = new MutationObserver(function (mutations) {
    mutations.forEach(function (mutation) {
      if (mutation.attributeName == "class") {
        var currentClassState = mutation.target.classList.contains(
          "wpcf7-not-valid"
        );
        if (prevClassStateEmail !== currentClassState) {
          prevClassStateEmail = currentClassState;
          if (currentClassState) {
            console.log("class added!");
            $(".invalid__email").show();
            $(".comtact-form__email").css("border", "2px solid black");
          } else {
            $(".invalid__email").hide();
            console.log("class removed!");
            $(".comtact-form__email").css(
              "border",
              "2px solid rgba(0, 0, 0, 0.1)"
            );
          }
        }
      }
    });
  });
  observer.observe(elemToObserveEmail, { attributes: true });
  // end required email

  // tel mask
  var phoneInput = document.querySelector("#phone");
  phoneInput.addEventListener("keydown", function (event) {
    if (
      !(
        event.key == "ArrowLeft" ||
        event.key == "ArrowRight" ||
        event.key == "Backspace" ||
        event.key == "Tab"
      )
    ) {
      event.preventDefault();
    }
    var mask = "+375 (11) 111-11-11";

    if (/[0-9\+\ \-\(\)]/.test(event.key)) {
      var currentString = this.value;
      var currentLength = currentString.length;
      if (/[0-9]/.test(event.key)) {
        if (mask[currentLength] == "1") {
          this.value = currentString + event.key;
        } else {
          for (var i = currentLength; i < mask.length; i++) {
            if (mask[i] == "1") {
              this.value = currentString + event.key;
              break;
            }
            currentString += mask[i];
          }
        }
      }
    }
  });

  // main-page-comtact-form__thanks
  $(".thanks-inner__button button").on("click", function (event) {
    $(".popup").hide();
    $(".main-page-comtact-form__thanks").hide();
  });

  // accordion-panel__show-more
  if ($(window).width() > 1024) {
    $(".accordion-panel__show-more").css({ display: "none" });
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
            .css({ "max-height": 650 });
          $(this)
            .next()
            .find(".accordion-panel__show-more")
            .css({ display: "block" });
        }
      } else {
        $(".accordion-panel__show-more").css({ display: "none" });
      }
    });
  }

  if ($(window).width() >= 1024) {
    $(".main-page-important-to-us__item").mouseover( function (event) {
        $(this).find(".main-page-important-to-us__item-back").addClass('hover-show');
    });
    $(".main-page-important-to-us__item").mouseleave( function (event) {
      $(this).find(".main-page-important-to-us__item-back").removeClass('hover-show');
    });
  } else {
    $(".main-page-important-to-us__item").click( function (event) {
      $(this).find(".main-page-important-to-us__item-back").toggleClass('hover-show');
    });
  }
  
});