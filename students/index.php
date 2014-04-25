<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="../css/sections-layout.css" />
        <link rel="stylesheet" type="text/css" href="../css/sections-style.css" />
        <link rel="stylesheet" type="text/css" href="../css/nav-layout.css" />
        <link rel="stylesheet" type="text/css" href="../css/nav-style.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script src="../js/nav-app.js"></script>
        <script src="../js/sections-app.js"></script>

        <title>Estudiantes</title>
    </head>
    <body>

        <header>
            <a href="/" id="logoSIE"><img src="../images/logoSIE.png" alt="logo SIE" /></a>
            <a href="http://www.unal.edu.co" target="_blank" id="escudoUN"><img src="../images/escudoUN.png" alt="escudo UN" /></a>
        </header>

        <div id="breadcrumb"><a href="index.html">Estudiantes</a></div>

<?php
require_once '../../php/nav.php';
nav("top");
nav("aside");
?>

        <div style="width:63%; height:2000px; background:#fff; position:relative; margin: 250px auto;" id="content"></div>

    </body>
</html>
