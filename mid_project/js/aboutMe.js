/**
 * Created by tangdaniel on 2016/4/13.
 */
$(document).ready(function () {
    $("#boy").mouseenter(function () {
        if ($("#girl > div > img").hasClass("pic_active")) {
            $("#girl > div > img").removeClass("pic_active");
        }
        var pic = $(this).children(".pic");
        if (pic.children("img").hasClass("pic_active")) {
            pic.children("img").removeClass("pic_active");
        }
        else {
            pic.children("img").addClass("pic_active");
        }
    });

    $("#boy").mouseleave(function () {
        if ($("#girl > div > img").hasClass("pic_active")) {
            $("#girl > div > img").removeClass("pic_active");
        }
        var pic = $(this).children(".pic");
        if (pic.children("img").hasClass("pic_active")) {
            pic.children("img").removeClass("pic_active");
        }
    });

    $("#girl").mouseenter(function () {
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

    $("#girl").mouseleave(function () {
        if ($("#boy > div > img").hasClass("pic_active")) {
            $("#boy > div > img").removeClass("pic_active");
        }
        if ($("#girl > div > img").hasClass("pic_active")) {
            $("#girl > div > img").removeClass("pic_active");
        }
    });
});
