<!DOCTYPE html>
<html lang="es" class="developers">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Estudiantes &gt; Descripci&oacute;n &gt; Hardware - La Universidad de los Ni&ntilde;os</title>
		<meta name="description" content="Descripci&oacute;n Hardware La Universidad de los Ni&ntilde;os">
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
			<a href="/developers/">Desarrolladores</a> &gt; <a href="/developers/description/">Descripci&oacute;n</a> &gt;  <a href="./">Hardware</a>
		</div>

<?php
require_once '../../../php/nav.php';
nav("top");
nav("aside");
?>

		<aside id="tabs" class="developers">
			<ul>
				<li><span>SIEBOT</span><a href="#SIEBOT">El Robot</a></li>
				<li><span>SIE2</span><a href="#SIE2">La Tarjeta</a></li>
			</ul>
		</aside>
		<div id="content">
			<div class="tab">
				<h1>Hardware</h1>
				<p>Como se hab&iacute;a mensionado previamente el proyecto La Universidad de los Ni&ntilde;os se divide en dos partes principales, un desarrollo de software bifurcado del proyecto Ardublok y un hardware, desarrollado desde cero, orientado hac&iacute;a la rob&oacute;rica m&oacute;vil,  este &uacute;ltimo se puede dividir en dos componentes principales, el primero la estructura del robot y el segundo la tarjeta de desarrollo SIE2.</p>
				<p>En las pesta&ntilde;as de la derecha se podr&aacute; encontrar m&aacute;s informaci&oacute;n de cada uno de estos componentes, as&iacute; como los archivos necesarios para seguir el desarrollo en torno a estos elementos, SIEBOT es la estructura y se podrán encontrar los planos de corte y modelados, SIE2 es la tarjeta de desarrollo y se encontrar&aacute; la distribuici&oacute;n de pines.</p>
			</div>
			<div class="tab" id="SIEBOT">
				<h1>SIEBOT</h1>
				<p>El SIEBOT es una plataforma de robótica móvil muy sencilla de ensamblar, consta de muy pocas piezas, pero así mismo es muy versatil y atractivo.</p>
				<p>El SIEBOT consta de dos versiones, una versi&oacute;n convensional que tiene espacio para instalar una tarjeta con una serie de sensores cuya imagen se puede ver a continuaci&oacute;n</p>
				<div class="gallery">
					<a href="/images/SIEBOT/SIEBOT-sensors.jpg" rel="prettyPhoto[siebot]" title="Versi&oacute;n con Tarjeta de Sensores."><img src="/images/thumbnails/t-SIEBOT-sensors.jpg" width="400" height="300" alt="Versi&oacute;n con Tarjeta de Sensores" /></a>
				<p>La otra versi&oacute;n disponible deja de un lado la tarjeta con sensores y habilita la posibilidad de instalar un lapiz que permita dibujar las trayectorias del robot, esta versi&oacute;n es llamada <em>Dibujante</em> y su fotograf&iacute;a se ve en la siguiente figura.</p>
				<a href="/images/SIEBOT/SIEBOT-draft.jpg" rel="prettyPhoto[siebot]" title="Versi&oacute;n Dibujante."><img src="/images/thumbnails/t-SIEBOT-draft.jpg" width="400" height="300" alt="Versi&oacute;n Dibujante" /></a>
			</div>
			<p>Los archivos con los modelados y los planos de corte del SIEBOT se encuentran a continuaci&oacute;n.</p>
				<a class="doc" href="/docs/SIEBOT-MODEL.zip"><img alt="Modelados SIEBOT" src="/images/inventor-icon.png" /><span>Modelados SIEBOT</span></a>
				<br />
				<a class="doc" href="/docs/SIEBOT-LASER.zip"><img alt="Corte Laser SIEBOT" src="/images/draw-icon.png" /><span>
Corte Laser SIEBOT</span></a>
			</div>
			<div class="tab" id="SIE2">
				<h1>SIE2</h1>
				<p>La tarjeta SIE2 cuenta con un procesador de la familia STM32 F4 de la l&iacute;nea ARM Cortex M4. Esta tarjeta es programada con un receptor Bluetooth y un sistema operativo embebido que se encarga de administrar esta señal inalámbrica y programar el microprocesador STM32F4.</p>
				<p>La distribución de pines de la tarjeta SIE2 se encuentra en el siguiente archivo</p>
				<a class="doc" href="/docs/PinoutSIE2.xlsx"><img alt="Distribuci&oacute;n de pines SIE2" src="/images/xlsx-icon.png" /><span>Distribuci&oacute;n de pines SIE2</span></a>
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
