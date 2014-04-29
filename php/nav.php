<?php 

function nav ($id) {
    echo <<<_TEXT
    <nav id="$id">
        <ul>
            <li class="home"><a href="/">Inicio</a></li>
            <li class="menu sie"><a href="/">SIE</a>
            	<ul class="submenu">
            		<li><a href="#">Software</a></li>
            		<li><a href="#">Hardware</a></li>
               </ul>
            </li>
            <li class="menu students"><a href="/students/">Estudiantes</a>
                <ul class="submenu">
                    <li><a href="/students/description/">Descripci&#243;n</a>
                        <ul>
                            <li><a href="#">Sofware</a></li>
                            <li><a href="#">Hardware</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Actividades</a></li>
                    <li><a href="#">Recursos</a></li>
                </ul>
            </li>
            <li class="menu teachers"><a href="#">Profesores</a>
                <ul class="submenu">
                    <li><a href="#">Descripci&#243;n</a>
                        <ul>
                            <li><a href="#">Software</a></li>
                            <li><a href="#">Hardware</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Gu&#237;as</a></li>
                    <li><a href="#">Recursos</a></li>
                </ul>
            </li>
            <li class="menu developers"><a href="#">Desarrolladores</a>
                <ul class="submenu">
                    <li><a href="#">Descripci&#243;n</a>
                        <ul>
                            <li><a href="#">Software</a></li>
                            <li><a href="#">Hardware</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Documentación</a></li>
                </ul>
            </li>
            <li class="about"><a href="#">Acerca de</a></li>
        </ul>
    </nav>
_TEXT;
}
