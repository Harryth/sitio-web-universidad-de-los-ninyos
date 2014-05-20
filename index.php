<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <title>Universidad Nacional de Colombia - Universidad de los Ni&#241;os</title>

        <link rel="stylesheet" type="text/css" href="css/index-layout.css" />
        <link rel="stylesheet" type="text/css" href="css/index-style.css" />
        <link rel="stylesheet" type="text/css" href="css/nav-layout.css" />
        <link rel="stylesheet" type="text/css" href="css/nav-style.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="js/jquery.transit.min.js"></script>
        <script src="js/jquery.mousewheel.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div class="screen" id="screen-1">
                <header>
                    <a href="/" id="logoSIE"><img src="images/logoSIE.png" alt="logo SIE" /></a>
                    <a href="http://www.unal.edu.co" target="_blank" id="escudoUN"><img src="images/escudoUN.png" alt="escudo UN" /></a>
                </header>
                <div class="img" id="img-1"></div>
                <iframe width="640" height="360" src="//www.youtube.com/embed/rPjpA4sn7yI?rel=0" frameborder="0" allowfullscreen></iframe>
                <div id="links">
                	<div class="link">
                        <img src="images/sphere.png"><a href="/SIE/">Ir a UN Ni&ntilde;os</a>
                    </div>
                    <div class="link">
                        <img src="images/sphere.png"><a href="/students/">Ir a Estudiantes</a>
                    </div>
                    <div class="link">
                        <img src="images/sphere.png"><a href="/teachers/">Ir a Profesores</a>
                    </div>
                    <div class="link">
                        <img src="images/sphere.png"><a href="/developers/">Ir a Desarrolladores</a>
                    </div>
                </div>
            </div>
            <div class="screen students">
                <div class="img" id="img-2"></div>
                <div class="content">
                    <h1>Rob&#243;tica Divertida</h1>
                    <p>Divi&#233;rte en grande mientras aprendes del maravilloso mundo de la rob&#243;tica.</p>
                    <a href="/students/">Ir al Portal de Estudiantes</a>
                </div>
            </div>
            <div class="screen teachers">
                <div class="img" id="img-3"></div>
                <div class="content">
                    <h1>Gran Plataforma para la Ense&#241;anza</h1>
                    <p>Ense&#241;e a sus estudiantes las ciencias b&#225;sicas con herramientas de &#250;ltima tecnolog&#237;a.</p>
                    <a href="#">Ir al Portal de Profesores</a>
                </div>
            </div>
            <div class="screen developers">
                <div class="img" id="img-4"></div>
                <div class="content">
                    <h1>Software y Hardware de C&#243;digo Abierto</h1>
                    <p>Haga parte de un gran proyecto para distribuir la ense&#241;anza de la rob&#243;tica</p>
                    <a href="#">Ir al Portal de Desarrolladores</a>
                </div>
            </div>
        </div>
        
<?php 
require_once './php/nav.php';
nav("top");
?>

        <div id="next-btn" class="slide-btn"><a href="#" class="icon"></a></div>
        <div id="prev-btn" class="slide-btn"><a href="#" class="icon"></a></div>

        <script src="js/home-app.js"></script>
    </body>
</html>
