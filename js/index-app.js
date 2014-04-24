$(function() {
    var screenIndex = 1,
        numScreens = $(".screen").length,
        isTransitioning = false,
        transitionDur = 1000;

    $("#next-btn").click(function(e) {
        e.preventDefault();
        if (!isTransitioning) {
            changeScreen(-1);
        }
    });

    $("#prev-btn").click(function(e) {
        e.preventDefault();
        if (!isTransitioning) {
            changeScreen(1);
        }
    });

    function changeScreen(dir) {
        isTransitioning = true;

        if (dir === -1)
            if (screenIndex === numScreens)
                screenIndex = 1;
            else
                screenIndex++;
        else if (dir === 1)
            if (screenIndex === 1)
                screenIndex = numScreens;
            else
                screenIndex--;

        if (screenIndex === 1)
            $("nav#top").transit({'top':'-52px'},transitionDur,function(){});
        else
            $("nav#top").transit({'top':'0'},transitionDur,function(){});

        $("#wrapper").transit(
            {'top':'-'+(100*(screenIndex-1))+'%'},
            transitionDur,
            onTransitionComplete);
    }

    function onTransitionComplete() {
        isTransitioning = false;
    }

    $(window).mousewheel(function(event,delta) {
        event.stopPropagation();
        event.preventDefault();

        if (!isTransitioning)
            changeScreen(delta);
    });

    $(".menu").mouseenter(function() {
        $(".submenu").css("height","220px");
    });

    $(".menu").mouseleave(function() {
        $(".submenu").css("height","0");
    });
});
