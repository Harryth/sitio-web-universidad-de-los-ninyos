$(function() {

    $(window).scroll(function() {
        if ($(this).scrollTop() > 120)
            $("nav#top").css("top","0");
        else
            $("nav#top").css("top","-52px");
    });

    $(".menu").mouseenter(function() {
        $(".submenu").css("display","block");
    });

    $(".menu").mouseleave(function() {
        $(".submenu").css("display","none");
    });
});
