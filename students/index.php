<!DOCTYPE html>
<html lang="es" class="students">
    <head>
        
        <meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<meta name="description" content="Portal para estudiantes - Universidad de los Ni&ntilde;os">
		<meta name="author" content="Harold Vallejo">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="stylesheet" type="text/css" href="../css/sections-layout.css" />
        <link rel="stylesheet" type="text/css" href="../css/sections-style.css" />
        <link rel="stylesheet" type="text/css" href="../css/nav-layout.css" />
        <link rel="stylesheet" type="text/css" href="../css/nav-style.css" />
        <link rel="stylesheet" type="text/css" href="./css/students.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script src="../js/nav-app.js"></script>
        <script src="../js/sections-app.js"></script>

        <title>Estudiantes</title>
    </head>
    <body>

<?php
require_once '../php/header.php';
?>

        <div id="breadcrumb"><a href="./">Estudiantes</a></div>

<?php
require_once '../php/nav.php';
nav("top");
nav("aside");
?>

        <div id="content">
        	<h1>La Universidad de los Ni&ntilde;os</h1>
        	<p>En este portal podr&aacute;s encontrar toda la informaci&oacute;n, recursos, pr&aacute;cticas, tutoriales y v&iacute;nculos a otras p&aacute;ginas que ser&aacute;n importantes en el desarrollo de las pr&aacute;cticas y proyectos que tenemos para ti.</p>
        	<p>En la p&aacute;gina <a href="./description/">Descripci&oacute;n</a> encontrar&aacute;s una breve descripci&oacute;n de este proyecto, informaci&oacute;n de todo lo que vas a aprender y porque es importante para ti. También encontrarás información de los elementos más importantes de este proyecto, como el software y el hardware que vas a utilizar y las intrucciones para utilizarlos.</p>
        	<p>En la p&aacute;gina <a href="./activities/">Actividades</a> están todas las prácticas que desarrollaremos durantel el curso, información importante a tener en cuenta, la lista de materiales y los documentos descargables.</p>
        </div>
        
        <div id="top-btn"><a href="#"></a></div>
<?php
require_once '../php/footer.php';
?>

    </body>
</html>
