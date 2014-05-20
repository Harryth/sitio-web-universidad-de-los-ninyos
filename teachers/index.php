<!DOCTYPE html>
<html lang="es" class="teachers">
    <head>
        
        <meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<meta name="description" content="Portal para Profesores - Universidad de los Ni&ntilde;os">
		<meta name="author" content="Harold Vallejo">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="stylesheet" type="text/css" href="../css/sections-layout.css" />
        <link rel="stylesheet" type="text/css" href="../css/sections-style.css" />
        <link rel="stylesheet" type="text/css" href="../css/nav-layout.css" />
        <link rel="stylesheet" type="text/css" href="../css/nav-style.css" />
        <link rel="stylesheet" type="text/css" href="./css/teachers.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script src="../js/nav-app.js"></script>
        <script src="../js/sections-app.js"></script>

        <title>Profesores</title>
    </head>
    <body>

<?php
require_once '../php/header.php';
?>

        <div id="breadcrumb"><a href="./">Profesores</a></div>

<?php
require_once '../php/nav.php';
nav("top");
nav("aside");
?>

        <div id="content">
        	<h1>La Universidad de los Ni&ntilde;os</h1>
        	<p>En este portal encontrar&aacute; toda la informaci&oacute;n, pr&aacute;cticas, tutoriales y v&iacute;nculos relacionados al proyecto SIEBOT, ac&aacute; se presentan los recursos necesarios para ayudarle al proceso de ense&ntilde;anza de la rob&oacute;tica m&oacute;vil a sus estudiates.</p>
        	<p>En la secci&oacute;n <a href="/teachers/description/">Descripci&oacute;n</a> encontrar&aacute; informaci&oacute;n sobre el proyecto, sus beneficios y cualidades, el Hardare y el Software necesario adem&aacute;s de im&aacute;genes e informaci&oacute;n de uso.</p>
        	<p>En la secci&oacute;n <a href="/teachers/guides/">Gu&iacute;as</a> podr&aacute; acceder a las gu&iacute;as de desarrollo del curso y la informaci&oacute;n necesaria para desarrollarla con sus estudiantes.</p>
        	<p></p>
        </div>
        
        <div id="top-btn"><a href="#"></a></div>
<?php
require_once '../php/footer.php';
?>

    </body>
</html>
