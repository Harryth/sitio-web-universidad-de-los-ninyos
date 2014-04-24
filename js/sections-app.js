$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 120)
            $("nav#aside").css("left","-400px");
        else
            $("nav#aside").css("left","3%");
    });
})
