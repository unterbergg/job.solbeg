$(function(){$(document).on("change",".contact-form__resume input[type='file']",function(t){if($(this).val()){var e=$(this).val().split("\\");let o=$(t.target).closest(".wpcf7-form");e=e[e.length-1],o.find(".contact-form__resume-text span").text(e),o.find(".contact-form__resume-text").toggleClass("contact-form__resume-attach contact-form__resume-plus"),o.find(".contact-form__resume-after").toggleClass("contact-form__resume-remove contact-form__resume-after")}}),$(document).on("click",".contact-form__resume-text",function(t){t.preventDefault(),t.stopPropagation(),$(t.target).closest(".wpcf7-form").find("input[type=file]").click()}),$(document).on("click",".contact-form__resume-remove",function(){$(".contact-form__resume input[type='file']").val(null),$(".contact-form__resume-text span").text("Прикрепить резюме"),$(".contact-form__resume-attach").toggleClass("contact-form__resume-plus contact-form__resume-attach"),$(".contact-form__resume-remove").toggleClass("contact-form__resume-after contact-form__resume-remove")}),document.addEventListener("wpcf7invalid",function(t){let e=$(t.target).find(".contact-form__resume-input");$(".contact-form__resume").removeClass("invalid").removeClass("show-tip");let o=e.val().split("\\");(o=o[o.length-1])||(t.preventDefault(),e.closest(".contact-form__resume").addClass("invalid").addClass("show-tip")),$(t.target).find(".wpcf7-form-control").each(function(t){$(this).bind("DOMSubtreeModified",function(t){$(t.target).is("#email")&&$(t.target).hasClass("wpcf7-not-valid")?($(t.target).closest(".email").addClass("invalid"),0==$(t.target).val().length&&$(".fill-in-required-fields").show()):0==$(t.target).val().length&&$(".fill-in-required-fields").show()})})},!1),document.addEventListener("wpcf7submit",function(t){$(".email").removeClass("invalid"),$(".fill-in-required-fields").hide()},!1),document.addEventListener("wpcf7mailsent",function(t){$(".main-page-comtact-form__thanks").show(),$(".contact-form__resume input[type='file']").val(null),$(".contact-form__resume-text span").text("Прикрепить резюме"),$(".contact-form__resume-attach").toggleClass("contact-form__resume-plus contact-form__resume-attach"),$(".contact-form__resume-remove").toggleClass("contact-form__resume-after contact-form__resume-remove"),$(".email").removeClass("invalid"),$(".contact-form__resume").removeClass("invalid").removeClass("show-tip"),$(".fill-in-required-fields").hide()}),$(".contact-form__resume-after").hover(function(){$(this).closest(".wpcf7-form").find(".contact-form__resume").hasClass("invalid")||$(this).closest(".wpcf7-form").find(".contact-form__resume").addClass("show-tip")},function(){$(this).closest(".wpcf7-form").find(".contact-form__resume").hasClass("invalid")||$(this).closest(".wpcf7-form").find(".contact-form__resume").removeClass("show-tip")}),$(".contact-form__resume-after").on("click",function(t){t.preventDefault(),$(this).closest(".wpcf7-form").find(".contact-form__resume").hasClass("invalid")||$(this).closest(".wpcf7-form").find(".contact-form__resume").toggleClass("show-tip")})});