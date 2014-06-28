<!DOCTYPE html>
<html lang="es" class="developers">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Estudiantes &gt; Descripci&oacute;n &gt; Software - La Universidad de los Ni&ntilde;os</title>
		<meta name="description" content="Descripci&oacute;n Software La Universidad de los Ni&ntilde;os">
		<meta name="author" content="Harold Vallejo">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">

		<link rel="stylesheet" type="text/css" href="../../../css/sections-layout.css" />
		<link rel="stylesheet" type="text/css" href="../../../css/sections-style.css" />
		<link rel="stylesheet" type="text/css" href="../../../css/nav-layout.css" />
		<link rel="stylesheet" type="text/css" href="../../../css/nav-style.css" />
		<!--<link rel="stylesheet" type="text/css" href="./css/style-sheet.css" />-->
		<link rel="stylesheet" type="text/css" href="../../css/developers.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script src="../../../js/nav-app.js"></script>
		<script src="../../../js/sections-app.js"></script>
		
		<script src="/js/jquery.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
		<script src="/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

	</head>

	<body>
<?php
require_once '../../../php/header.php';
?>

		<div id="breadcrumb">
			<a href="/developers/">Desarrolladores</a> &gt; <a href="/developers/description/">Descripci&oacute;n</a> &gt;  <a href="./">Software</a>
		</div>

<?php
require_once '../../../php/nav.php';
nav("top");
nav("aside");
?>

		<!--<aside id="tabs" class="developers">
			<ul>
				<li><span>Instalaci&oacute;n</span><a href="#install">Sigue estos pasos</a></li>
				<li><span>Como usarlo</span><a href="#usage">Instrucciones</a></li>
			</ul>
		</aside>-->
		<div id="content">
			<h1>Software</h1>
			<p><a href="http://blog.ardublock.com/" target="_blank" hreflang="en">Ardublock</a> es un software de c&oacute;digo abierto desarrollado con el fin de ofrecer una alternativa a la programaci&oacute;n de la tarjeta de desarrollo Arduino. Ardublock se basa en el proyecto del MIT <a href="http://education.mit.edu/openblocks" target="_blank" hreflang="en">OpenBlocks</a> que es una librer&iacute;a en Java de c&oacute;digo abierto usada para crear interfaces de programaci&oacute;n basadas en bloques. La informaci&oacute;n sobre estos proyectos puede encontrarse en sus respectivas p&aacute;ginas haciendo seguimiento de lo v&iacute;nculos anteriores.</p>
			<p>El proyecto la Universidad de los Ni&ntilde;os hace uso de este software, creando una versi&oacute;n modificada de Ardublock para programar microcontroladores de la familia STM32 F4 con arquitectura Cortex M4 de 32 bits. Para hacer este cambio en la familia del microprocesador el software hace uso de una versi&oacute;n modificada de la librer&iacute;a de c&oacute;digo abierto <a href="http://leaflabs.com/docs/libmaple.html" target="_blank" hreflang="en">libmaple</a>, cuya finalidad es hacer uso de las librer&iacute;as usadas por el proyecto Arduino para la programaci&oacute;n de microprocesadores AVR en microprocesadores de la familia STM32 de la l&iacute;nea ARM Cortex M3.</p>
			<p>La bifurcaci&oacute;n de este software desarrollada para el proyecto La Universidad de los Ni&ntilde;os cuenta con bloques adicionales creados para facilitar el trabajo con plataformas de rob&oacute;tica m&oacute;vil que permiten mejorar la ense&ntilde;anza en ciencia</p>
			<p>El c&oacute;digo fuente de este software puede ser encontrado en el siguiente v&iacute;nculo</p>
			<a class="doc" href="https://dl.dropboxusercontent.com/u/5004468/Ardublock-code.zip"><img alt="C&oacute;digo Fuente Ardublock" src="/images/tar-icon.png" /><span>C&oacute;digo Fuente Ardublock</span></a>
		</div>

		<div id="top-btn">
			<a href="#"></a>
		</div>

<?php
require_once '../../../php/footer.php';
?>

		<script type="text/javascript" charset="utf-8">
		  $(document).ready(function(){
		    $("a[rel^='prettyPhoto']").prettyPhoto();
		  });
		</script>
	</body>
</html>
