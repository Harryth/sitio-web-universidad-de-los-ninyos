$(function() {
    var screenIndex = 1,
        numScreens = $(".screen").length,
        isTransitioning = false,
        transitionDur = 1000;

    $("#next-btn").click(function(e) {
        e.preventDefault();
        if (!isTransitioning) {
            next();
        }
    });

    $("#prev-btn").click(function(e) {
        e.preventDefault();
        if (!isTransitioning) {
            prev();
        }
    });

    function next() {
        isTransitioning = true;

        if (screenIndex === numScreens) {
            screenIndex = 1;
        } else {
            screenIndex++;
        }

        $("#wrapper").transit(
            {'top':'-'+(100*(screenIndex-1))+'%'},
            transitionDur,
            onTransitionComplete);
    }

    function prev() {
        isTransitioning = true;

        if (screenIndex === 1) {
            screenIndex = numScreens;
        } else {
            screenIndex--;
        }

        $("#wrapper").transit(
            {'top':'-'+(100*(screenIndex-1))+'%'},
            transitionDur,
            onTransitionComplete);
    }

    function onTransitionComplete() {
        isTransitioning = false;
    }
});
