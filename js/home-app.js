//funciones que otorgan dinamismo a la página de inicio
$(function() {
    var screenIndex = 1, //Indice de pantalla
        numScreens = $(".screen").length,//Número de pantalas
        isTransitioning = false,//Bandera de transición
        transitionDur = 800;//Tiempo de transición

	//Al dar click en el botón siguiente pasa a la siguiente pantalla llamando la función de transición
    $("#next-btn").click(function(e) {
        e.preventDefault();
        if (!isTransitioning) {
            changeScreen(-1);
        }
    });

//Al dar click en el botón anterior pasa a la anterior pantalla llamando la función de transición
    $("#prev-btn").click(function(e) {
        e.preventDefault();
        if (!isTransitioning) {
            changeScreen(1);
        }
    });

	//Función de transición, recibe un parámetro con la dirección del cambio
    function changeScreen(dir) {
        isTransitioning = true;//Bandera de transición activada

		//Parámetro de dirección en -1
        if (dir === -1)
            if (screenIndex === numScreens)//Si es la última pantalla
                screenIndex = 1;//Vuelve al inicio
            else
                screenIndex++;//Sino aumenta en uno el índice
        else if (dir === 1)//Parámetro de dirección en 1
            if (screenIndex === 1)//Si es la primer pantalla
                screenIndex = numScreens;//Va a la última pantalla
            else
                screenIndex--;//Sino, disminuye en uno 

		//Muestra u oculta el menú de navegación superior dependiendo la pantalla en la que se encuentre
        if (screenIndex === 1)
            $("nav#top").css("top","-52px");
        else
            $("nav#top").css("top","0");

		//Efecto de transición
        $("#wrapper").transit(
            {'top':'-'+(100*(screenIndex-1))+'%'},
            transitionDur,
            onTransitionComplete);
    }

    function onTransitionComplete() {
        isTransitioning = false;//Al terminar la transición limpia la bandera
    }

	//Activa animación se cambio de pantalla con el scroll del mouse
    $(window).mousewheel(function(event,delta) {
        event.stopPropagation();
        event.preventDefault();

        if (!isTransitioning)
            changeScreen(delta);
    });

	//Animeación de tamaño de los submenú al ingresar o retirar el puntero
    $(".menu").mouseenter(function() {
        $(".submenu").css("height","220px");
    });

    $(".menu").mouseleave(function() {
        $(".submenu").css("height","0");
    });
	
	//Animación para llamar la atención del botón de navegación de las pantallas
	$("#next-btn").hide( "puff", {percent: "500"}, 1300, function () {
		$("#next-btn").show();
	} );
});
