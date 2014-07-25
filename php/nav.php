<?php 
//Imprime el menú de navegación con el id proporcionado
function nav ($id) {
    echo <<<_TEXT
    <nav id="$id">
        <ul>
            <li class="home"><a href="/">Inicio</a></li>
            <li class="menu sie"><a href="/SIE/">UN Ni&ntilde;os</a>
            	<ul class="submenu">
            		<li><a href="/SIE/Ardublock/">Ardublock</a></li>
            		<li><a href="/SIE/SIEBOT">SIEBOT</a></li>
               </ul>
            </li>
            <li class="menu students"><a href="/students/">Estudiantes</a>
                <ul class="submenu">
                    <li><a href="/students/description/">Descripci&#243;n</a>
                        <ul>
                            <li><a href="/students/description/software/">Sofware</a></li>
                            <li><a href="/students/description/hardware/">Hardware</a></li>
                        </ul>
                    </li>
                    <li><a href="/students/activities/">Actividades</a></li>
                    <!--<li><a href="#">Recursos</a></li>-->
                </ul>
            </li>
            <li class="menu teachers"><a href="/teachers/">Profesores</a>
                <ul class="submenu">
                    <li><a href="/teachers/description/">Descripci&#243;n</a>
                        <ul>
                            <li><a href="/teachers/description/software/">Software</a></li>
                            <li><a href="/teachers/description/hardware/">Hardware</a></li>
                        </ul>
                    </li>
                    <li><a href="/teachers/guides/">Gu&#237;as</a></li>
                    <!--<li><a href="#">Recursos</a></li>-->
                </ul>
            </li>
            <li class="menu developers"><a href="/developers/">Desarrolladores</a>
                <ul class="submenu">
                    <li><a href="/developers/description/">Descripci&#243;n</a>
                        <ul>
                            <li><a href="/developers/description/software/">Software</a></li>
                            <li><a href="/developers/description/hardware/">Hardware</a></li>
                        </ul>
                    </li>
                    <!--<li><a href="#">Documentación</a></li>-->
                </ul>
            </li>
            <li class="about"><a href="/about/">Acerca de</a></li>
        </ul>
    </nav>
_TEXT;
}
