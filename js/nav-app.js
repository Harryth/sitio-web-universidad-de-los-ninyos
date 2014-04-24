$(function() {

    $(window).scroll(function() {
        if ($(this).scrollTop() > 120)
            $("nav#top").css("top","0");
        else
            $("nav#top").css("top","-52px");
    });

    $("#top .menu").mouseenter(function() {
        $("nav#top .submenu").css("height","220px");
    });

    $("#top .menu").mouseleave(function() {
        $("nav#top .submenu").css("height","0");
    });
});
