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

                curForm.find(".comtact-form__resume-text").text(filename);
                curForm.find(".comtact-form__resume-plus").toggleClass(
                    "comtact-form__resume-attach comtact-form__resume-plus"
                );
                curForm.find(".comtact-form__resume-after").toggleClass(
                    "comtact-form__resume-remove comtact-form__resume-after"
                );
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

    });
// ------------ File upload END ------------
});

