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
        console.log('test')
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
});

