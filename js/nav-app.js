//Funciones del menú de navegación
$(function() {

	//Activa y desactiva la visualización del menú superior y lateral dependiendo la posición de la pantalla
    $(window).scroll(function() {
        if ($(this).scrollTop() > 250)
            $("nav#top").css("top","0");
        else
            $("nav#top").css("top","-60px");
    });

	//Animación del tamaño del submenu a la salida y entrada del puntero
    $("#top .menu").mouseenter(function() {
        $("nav#top .submenu").css("height","220px");
    });

    $("#top .menu").mouseleave(function() {
        $("nav#top .submenu").css("height","0");
    });
});
