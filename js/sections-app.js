$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 250){
            $("nav#aside").css("left","-400px");
            $("#top-btn").css("display","block");
        }
        else{
            $("nav#aside").css("left","3%");
            $("#top-btn").css("display","none");
		}
    });
    
    $("#tabs a").click(function(event) {
    	event.preventDefault();
    	var link = $(this).attr("href");
    	$("#content .tab").each(function() {
		  $(this).css("z-index","0");
		});
		$(link).css("z-index","10");
    });
    
    $("#top-btn").click(function(event) {
    	event.preventDefault();
    	$('html, body').animate({scrollTop:0}, 'slow');
    });
});
