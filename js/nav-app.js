$(function() {

    $(window).scroll(function() {
        if ($(this).scrollTop() > 120)
            $("nav").css("top","0");
        else
            $("nav").css("top","-52px");

        $("#dummy").text($(this).scrollTop());
    });

    $(".menu").mouseenter(function() {
        $(".submenu").css("display","block");
    });

    $(".menu").mouseleave(function() {
        $(".submenu").css("display","none");
    });
});
