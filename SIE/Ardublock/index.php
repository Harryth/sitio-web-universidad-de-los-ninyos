<!DOCTYPE html>
<html lang="es" class="sie">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Ardublocks - La Universidad de los Ni&ntilde;os</title>
		<meta name="description" content="Ardublocks">
		<meta name="author" content="Harold Vallejo">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">

		<link rel="stylesheet" type="text/css" href="../../css/sections-layout.css" />
		<link rel="stylesheet" type="text/css" href="../../css/sections-style.css" />
		<link rel="stylesheet" type="text/css" href="../../css/nav-layout.css" />
		<link rel="stylesheet" type="text/css" href="../../css/nav-style.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script src="../../js/nav-app.js"></script>
		<script src="../../js/sections-app.js"></script>
		
		<script src="/js/jquery.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
		<script src="/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

	</head>

	<body>
<?php
require_once '../../php/header.php';
?>

		<div id="breadcrumb">
			<a href="../">La Universidad de los Ni&ntilde;os</a> &gt; <a href="./">Ardublocks</a>
		</div>

<?php
require_once '../../php/nav.php';
nav("top");
nav("aside");
?>
		<div id="content">
			<h1>Ardublock</h1>
			<p><a href="http://blog.ardublock.com/" hreflang="en">Ardublock</a> es un lenguaje de programaci&oacute;n por bloques dise&ntilde;ado para Arduino, as&iacute; mismo es una entorno de programaci&oacute;n gr&aacute;fica lleva la programaci&oacute;n de dispositivos Arduino a un nivel de simpleza tal como arrastrar y soltar.</p>
			<p>Dada la naturaleza c&oacute;digo libre de Ardublock, este ha sido modificado y adaptado por estudiantes y profesores de la Universidad Nacional de Colombia para ser utilizado con el sistema rob&oacute;tico SIEBOT y su arquitectura de hardware.</p>
			<p>A continuaci&oacute;n encontraremos una galer&iacute;a con algunas im&aacute;genes de la interfaz de Ardublock para SIEBOT.</p>
			<div class="gallery">
				<a href="/images/Ardublocks/ardublocks-1.png" rel="prettyPhoto[ardublock]" title="Interfaz Ardublock."><img src="/images/thumbnails/t-ardublocks-1.png" width="120" height="120" alt="Interfaz Ardublock" /></a>
				<a href="/images/Ardublocks/ardublocks-2.png" rel="prettyPhoto[ardublock]" title="Bloques propios de la UN."><img src="/images/thumbnails/t-ardublocks-2.png" width="120" height="120" alt="Bloques propios de la UN" /></a>
				<a href="/images/Ardublocks/ardublocks-3.png" rel="prettyPhoto[ardublock]" title="Programa de Ejemplo."><img src="/images/thumbnails/t-ardublocks-3.png" width="120" height="120" alt="Programa de Ejemplo" /></a>
				<a href="/images/Ardublocks/ardublocks-4.png" rel="prettyPhoto[ardublock]" title="Proceso de Compilación."><img src="/images/thumbnails/t-ardublocks-4.png" width="120" height="120" alt="Proceso de Compilación" /></a>
			</div>
			<h2>Descarga</h2>
			<p>El programa Ardublock puede ser descargado de ls siguiente v&iacute;nculo en formato ZIP comprimido.</p>
			<a class="doc" href="https://dl.dropboxusercontent.com/u/5004468/UNNinnos.zip"><img alt="Documento pr&aacute;ctica 6" src="/images/tar-icon.png" /><span>Ardublock</span></a>
		</div>

		<div id="top-btn">
			<a href="#"></a>
		</div>

<?php
require_once '../../php/footer.php';
?>
		<script type="text/javascript" charset="utf-8">
		  $(document).ready(function(){
		    $("a[rel^='prettyPhoto']").prettyPhoto();
		  });
		</script>
	</body>
</html>
