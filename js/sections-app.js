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
		  $(this).css("height","0");
		  $(this).css("padding","0");
		});
		$(link).css("height","auto");
		$(link).css("padding","15px");
    });
    
    $("#top-btn").click(function(event) {
    	event.preventDefault();
    	$('html, body').animate({scrollTop:0}, 'slow');
    });
    
    var tag = window.location.hash.substr(1);
    
    if (tag != "") {
    	$("#content .tab").each(function() {
		  $(this).css("height","0");
		  $(this).css("padding","0");
		});
    	$(".tab#"+tag).css("height","auto");
    	$(".tab#"+tag).css("padding","15px");
    }
});
