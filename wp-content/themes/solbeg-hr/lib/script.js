$(function() {
    // ------------  File upload BEGIN ------------
    $(document).on(
        "change",
        ".contact-form__resume input[type='file']",
        function (e) {
            if ($(this).val()) {
                var filename = $(this).val().split("\\");
                let curForm = $(e.target).closest(".wpcf7-form");
                filename = filename[filename.length - 1];
                curForm.find(".contact-form__resume-text span").text(filename);
                curForm.find(".contact-form__resume-text").toggleClass(
                    "contact-form__resume-attach contact-form__resume-plus"
                );
                curForm.find(".contact-form__resume-after").toggleClass(
                    "contact-form__resume-remove contact-form__resume-after"
                );
            }
        }
    );
    $(document).on("click", ".contact-form__resume-text", function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(e.target).closest('.wpcf7-form').find('input[type=file]').click();
    });
    $(document).on("click", ".contact-form__resume-remove", function () {
      $(".contact-form__resume input[type='file']").val(null);
      $(".contact-form__resume-text span").text("Прикрепить резюме");
      $(".contact-form__resume-attach").toggleClass(
        "contact-form__resume-plus contact-form__resume-attach"
      );
      $(".contact-form__resume-remove").toggleClass(
        "contact-form__resume-after contact-form__resume-remove"
      );

    });
    // ------------ File upload END ------------

    document.addEventListener( 'wpcf7invalid', function( event ) {
        let file_control = $(event.target).find(".contact-form__resume-input");
        $('.contact-form__resume').removeClass('invalid').removeClass('show-tip');
        let file = file_control.val().split("\\");
        file = file[file.length - 1];

        if( !file ) {
            event.preventDefault();
            file_control.closest('.contact-form__resume').addClass('invalid').addClass('show-tip');
        }
        $(event.target).find('.wpcf7-form-control').each(function (e) {
            $(this).bind('DOMSubtreeModified', function(event) {
                if($(event.target).is("#email") && $(event.target).hasClass('wpcf7-not-valid')) {
                    $(event.target).closest(".email").addClass('invalid');
                    if($(event.target).val().length == 0) {
                        $(".fill-in-required-fields").show();
                    }
                }
                else {
                    if($(event.target).val().length == 0) {
                        $(".fill-in-required-fields").show();
                    }
                }
            });
        });
    }, false );
    document.addEventListener( 'wpcf7submit', function( event ) {
        $(".email").removeClass('invalid');
        $(".fill-in-required-fields").hide();

    }, false );

    // mailsent
    document.addEventListener("wpcf7mailsent", function ( event) {
        $(".main-page-comtact-form__thanks").show();
        $(".contact-form__resume input[type='file']").val(null);
        $(".contact-form__resume-text span").text("Прикрепить резюме");
        $(".contact-form__resume-attach").toggleClass(
            "contact-form__resume-plus contact-form__resume-attach"
        );
        $(".contact-form__resume-remove").toggleClass(
            "contact-form__resume-after contact-form__resume-remove"
        );

        $(".email").removeClass('invalid');
        $('.contact-form__resume').removeClass('invalid').removeClass('show-tip');
        $(".fill-in-required-fields").hide();
    });

    // $(window.document).on("click", function (event) {
    //     $(".email").removeClass('invalid');
    //     $(".fill-in-required-fields").hide();
    //     $('.contact-form__resume').removeClass('show-tip');
    // });
});

