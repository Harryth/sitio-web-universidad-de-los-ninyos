$(function() {
    var screenIndex = 1,
        numScreens = $(".screen").length,
        isTransitioning = false,
        transitionDur = 800;

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
            $("nav#top").css("top","-52px");
        else
            $("nav#top").css("top","0");

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
	
	$("#next-btn").hide( "puff", {percent: "500"}, 1300, function () {
		$("#next-btn").show();
	} );
});
