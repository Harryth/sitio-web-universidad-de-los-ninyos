$(function() {

    $(window).scroll(function() {
        if ($(this).scrollTop() > 250)
            $("nav#top").css("top","0");
        else
            $("nav#top").css("top","-60px");
    });

    $("#top .menu").mouseenter(function() {
        $("nav#top .submenu").css("height","220px");
    });

    $("#top .menu").mouseleave(function() {
        $("nav#top .submenu").css("height","0");
    });
});
