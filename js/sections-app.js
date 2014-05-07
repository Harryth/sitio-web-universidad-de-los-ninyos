$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 120)
            $("nav#aside").css("left","-400px");
        else
            $("nav#aside").css("left","3%");
    });
    
    $("#tabs a").click(function(event) {
    	event.preventDefault();
    	var link = $(this).attr("href");
    	$("#content .tab").each(function() {
		  $(this).css("z-index","0");
		});
		$(link).css("z-index","10");
    });
});
