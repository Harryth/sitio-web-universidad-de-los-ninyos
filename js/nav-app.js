$(function() {
    $(".menu").mouseenter(function() {
        $(".submenu").css("display","block");
    });

    $(".menu").mouseleave(function() {
        $(".submenu").css("display","none");
    });
});
