//Funciones de la secciones internas de la página
$(function() {
	//Esconde o muestra el menú de navegación lateral y el boton de ir a inicio dependiendo la posición de la pantalla
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
    
    //Funcionalidad de los botones de pestañas
    $("#tabs a").click(function(event) {
    	event.preventDefault();//Previene el comportamiento por defecto
    	var link = $(this).attr("href");//Captura la dirección a la que apuntar
    	$("#content .tab").each(function() {//Esconde las pestañas que no son seleccionadas
		  $(this).css("height","0");
		  $(this).css("padding","0");
		});
		$(link).css("height","auto");//Muestra la pestaña que fue seleccionada con el hipervínculo
		$(link).css("padding","15px");
    });
    
    $("#top-btn").click(function(event) {
    	event.preventDefault();
    	$('html, body').animate({scrollTop:0}, 'slow');
    });
    
    //Permite mostrar pestañas desde la url
    var tag = window.location.hash.substr(1);//captura la url y almacena el id al que se apunta
    
    //Si existe algun id de una pestaña se ocultan las demás y se muestra la seleccionada
    if (tag != "") {
    	$("#content .tab").each(function() {
		  $(this).css("height","0");
		  $(this).css("padding","0");
		});
    	$(".tab#"+tag).css("height","auto");
    	$(".tab#"+tag).css("padding","15px");
    }
});
