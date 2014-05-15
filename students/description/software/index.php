<!DOCTYPE html>
<html lang="es" class="students">
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
		<link rel="stylesheet" type="text/css" href="./css/style-sheet.css" />
		<link rel="stylesheet" type="text/css" href="../../css/students.css" />
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
			<a href="/students">Estudiantes</a> &gt; <a href="/students/description/">Descripci&oacute;n</a> &gt;  <a href="./">Software</a>
		</div>

<?php
require_once '../../../php/nav.php';
nav("top");
nav("aside");
?>

		<aside id="tabs" class="students">
			<ul>
				<li><span>Instalaci&oacute;n</span><a href="#install">Sigue estos pasos</a></li>
			</ul>
		</aside>
		<div id="content">
			<div class="tab">
				<h1>Ardublock</h1>
				<p>Ardublock es un programa de computadores que sirve como entorno de desarrollo, permitiendo la programaci&oacute;n de la plataforma rob&oacute;tica SIEBOT. Con este programa podr&aacute;s darle instrucciones al SIEBOT de manera muy sencilla, algo tan simple como arrastrar y soltar un bloque.</p>
				<p>Ardublock te permitir&aacute; programar al robot con instrucciones como: ir hacía adelante, girar a la izquierda o la derecha, leer la velocidad del SIEBOT, entre otras.</p>
				<p>En la pestaña de la derecha encontrarás las instrucciones para tener instalado el programa en tu computador y hacerlo funcionar correctamente.</p>
				<p>A continuación verás una galería de imágenes del programa.</p>
				
				<div class="gallery">
					<a href="/images/Ardublocks/ardublocks-1.png" rel="prettyPhoto[ardublock]" title="Interfaz Ardublock."><img src="/images/thumbnails/t-ardublocks-1.png" width="120" height="120" alt="Interfaz Ardublock" /></a>
					<a href="/images/Ardublocks/ardublocks-2.png" rel="prettyPhoto[ardublock]" title="Bloques propios de la UN."><img src="/images/thumbnails/t-ardublocks-2.png" width="120" height="120" alt="Bloques propios de la UN" /></a>
					<a href="/images/Ardublocks/ardublocks-3.png" rel="prettyPhoto[ardublock]" title="Programa de Ejemplo."><img src="/images/thumbnails/t-ardublocks-3.png" width="120" height="120" alt="Programa de Ejemplo" /></a>
					<a href="/images/Ardublocks/ardublocks-4.png" rel="prettyPhoto[ardublock]" title="Proceso de Compilación."><img src="/images/thumbnails/t-ardublocks-4.png" width="120" height="120" alt="Proceso de Compilación" /></a>
				</div>
			</div>
			
			<div class="tab" id="install">
				<h1>Instalaci&oacute;n</h1>
				<p>Para tener Ardublock instalado y funcionando debes seguir las siguientes instrucciones:</p>
				<h3>Verificar la Instalaci&oacute;n de Java</h3>
				<p>Uno de los pasos m&aacute;s importantes es saber si se cuentas con Java instalado en el equipo. Java es una plataforma que permite la ejecuci&oacute;n de muchos programas, as&iacute; que es muy probable que ya est&eacute; instalado en tu equipo. Para verificar que lo tengas instalado has click en el siguiente enlace para <a href="http://www.java.com/es/download/installed.jsp">verificar la instalaci&oacute;n de Java</a>.</p>
				<p>Si no tienes instalado Java, puedes seguir el siguiente enlace para <a href="http://www.java.com/es/download/">instalar Java</a>.</p>
				<h3>Instalar el Compilador</h3>
				<p>El compilador es un programa que nos permite traducir las instrucciones que nosotros demos en Ardublock a unas instrucciones más complejas que el SIEBOT pueda entender. Para instalarlo, sigue estos simples pasos.</p>
				<p>Lo primero que debes hacer es descargarlo en el siguiente enlace.</p>
				<a class="doc" href="https://sourcery.mentor.com/GNUToolchain/package12193/public/arm-none-eabi/arm-2013.11-24-arm-none-eabi.exe"><img alt="G++ Lite Edition" src="/images/exe-icon.png" /><span>G++ Lite Edition</span></a>
			</div>
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
