$(function(){$(document).on("change",".contact-form__resume input[type='file']",function(t){if($(this).val()){var e=$(this).val().split("\\");let o=$(t.target).closest(".wpcf7-form");e=e[e.length-1],o.find(".contact-form__resume-text span").text(e),o.find(".contact-form__resume-text").toggleClass("contact-form__resume-attach contact-form__resume-plus"),o.find(".contact-form__resume-after").toggleClass("contact-form__resume-remove contact-form__resume-after")}}),$(document).on("click",".contact-form__resume-text",function(t){t.preventDefault(),t.stopPropagation(),console.log("test"),$(t.target).closest(".wpcf7-form").find("input[type=file]").click()}),$(document).on("click",".contact-form__resume-remove",function(){$(".contact-form__resume input[type='file']").val(null),$(".contact-form__resume-text span").text("Прикрепить резюме"),$(".contact-form__resume-attach").toggleClass("contact-form__resume-plus contact-form__resume-attach"),$(".contact-form__resume-remove").toggleClass("contact-form__resume-after contact-form__resume-remove")})});