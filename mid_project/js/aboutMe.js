/**
 * Created by tangdaniel on 2016/4/13.
 */
$(document).ready(function () {
    $("#boy .pic").click(function () {
        if ($("#girl > div > img").hasClass("pic_active")) {
            $("#girl > div > img").removeClass("pic_active");
        }
        if ($(this).children("img").hasClass("pic_active")) {
            $(this).children("img").removeClass("pic_active");
            var parent = $(this).parent("div");
            //parent.children(".info").slideUp();
        }
        else {
            var pic = $(this).children("img");
            pic.addClass("pic_active");
            var parent = $(this).parent("div");
            //parent.children(".info").slideDown();
        }
    });

    $("#girl").click(function () {
        if ($("#boy > div > img").hasClass("pic_active")) {
            $("#boy > div > img").removeClass("pic_active");
        }
        if ($("#girl > div > img").hasClass("pic_active")) {
            $("#girl > div > img").removeClass("pic_active");
        }
        else {
            $("#girl > div > img").addClass("pic_active");
        }
    });
});
