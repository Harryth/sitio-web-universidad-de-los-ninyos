<!DOCTYPE html>
<html lang="es" class="teachers">
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
		<link rel="stylesheet" type="text/css" href="./css/style-sheet.css" />
		<link rel="stylesheet" type="text/css" href="../../css/teachers.css" />
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
			<a href="/teachers">Profesores</a> &gt; <a href="/teachers/description/">Descripci&oacute;n</a> &gt;  <a href="./">Hardware</a>
		</div>

<?php
require_once '../../../php/nav.php';
nav("top");
nav("aside");
?>

		<aside id="tabs" class="teachers">
			<ul>
				<li><span>Construcci&oacute;n</span><a href="#building">C&oacute;mo se Arma</a></li>
			</ul>
		</aside>
		<div id="content">
			<div class="tab">
				<h1>SIEBOT</h1>
				<p>SIEBOT es una plataforma de rob&oacute;tica m&oacute;vil, con el que podr&aacute; enseñar los principios fundamentales de esta ciencia, como: la programaci&oacute;n de hardware, la lectura de sensores, los principios de locomoci&oacute;n y movimiento, entre otros. SIEBOT se ha diseñado de tal manera que sea atractivo para los estudiantes y ofresca muchas posiblilidades de trabajar con &eacute;l y explorar sus caracter&iacute;sticas. SIEBOT, junto con su software de programaci&oacute;n hacen un gran conjunto para llevar la ense&ntilde;anza a otros niveles.</p>
				<p>A continuaci&oacute;n encontrar&aacute; unas im&aacute;genes para que conozca el SIEBOT.</p>
				<div class="gallery">
					<a href="/images/SIEBOT/front.png" rel="prettyPhoto[siebot]" title="Vista Frontal."><img src="/images/thumbnails/t-front.png" width="120" height="120" alt="Vista Frontal SIEBOT" /></a>
					<a href="/images/SIEBOT/rigth.png" rel="prettyPhoto[siebot]" title="Vista Frontal-Derecha."><img src="/images/thumbnails/t-rigth.png" width="120" height="120" alt="Vista Frontal-Derecha SIEBOT" /></a>
					<a href="/images/SIEBOT/back-right.png" rel="prettyPhoto[siebot]" title="Vista Posterior-Derecha."><img src="/images/thumbnails/t-back-right.png" width="120" height="120" alt="Vista Posterior-Derecha SIEBOT" /></a>
					<a href="/images/SIEBOT/back.png" rel="prettyPhoto[siebot]" title="Vista Posterior."><img src="/images/thumbnails/t-back.png" width="120" height="120" alt="Vista Posterior SIEBOT" /></a>
					<a href="/images/SIEBOT/no-cover.png" rel="prettyPhoto[siebot]" title="Vista Interior."><img src="/images/thumbnails/t-no-cover.png" width="120" height="120" alt="Vista Interior SIEBOT" /></a>
				</div>
			</div>
			<div class="tab" id="building">
				<h1>Construyendo el SIEBOT</h1>
				<p>La construcción del SIEBOT es muy sencilla, y se requieren muy pocos pasos, inicialmente se debe contar con todas las piezas, si se desea realizar el corte de las piezas, debe dirigirse a la sección de <a href="/developers/description/hardware/">desarrollo</a>. El SIEBOt consta de dos modelos diferentes con unas peque&ntilde;as variantes, uno modelo convencional con una tarjeta de sensores y un modelo dibujante, con espacio para un l&aacute;piz que permita hacer dibujos de las trayectorias, el modelo con m&aacute;s partes es el segundo y su conjunto de piezas se puede ver en la siguientes figuras.</p>
				<div class="gallery">
					<a href="/images/SIEBOT/pieces-1.jpg" rel="prettyPhoto[build]" title="Piezas Peque&ntilde;as SIEBOT."><img src="/images/thumbnails/t-pieces-1.jpg" width="250" height="188" alt="Piezas Peque&ntilde;as SIEBOT" /></a>
					<a href="/images/SIEBOT/pieces-2.jpg" rel="prettyPhoto[build]" title="Piezas Grandes SIEBOT."><img src="/images/thumbnails/t-pieces-2.jpg" width="250" height="188" alt="Piezas Grandes SIEBOT" /></a>
				</div>
				<p>Lo primero que vamos a hacer es poner las ruedas de bola en su posici&oacute;n, usando los agujeros para tal fin. Atornillaremos las dos ruedas de tal manera que queden igual que la figura.</p>
				<div class="gallery">
					<a href="/images/SIEBOT/ball-casters.jpg" rel="prettyPhoto[build]" title="Ruedas de Bola."><img src="/images/thumbnails/t-ball-casters.jpg" width="400" height="300" alt="Ruedas de Bola" /></a>
				</div>
				<p>Seguiremos con el armado de las ruedas, estas constan de diferentes piezas, como se puede ver en la siguiente figura, se cuenta con el conjunto de rueda y motor, los soportes (piezas blancas), los encoders (piezas verdes) y sus respectivos juegos de tuerca y tornillo.</p>
				<div class="gallery">
					<a href="/images/SIEBOT/wheels.jpg" rel="prettyPhoto[build]" title="Piezas Ruedas."><img src="/images/thumbnails/t-wheels.png" width="400" height="300" alt="Piezas Ruedas" /></a>
				</div>
				<p>Para hacer el montaje de las ruedas vamos a atornillar los soportes a la base, de tal manera que los conectores del encoder pasen por los agujeros rectangulares, tal como se ve en la figura siguiente.</p>
				<div class="gallery">
					<a href="/images/SIEBOT/mount-wheels.jpg" rel="prettyPhoto[build]" title="Montaje Ruedas."><img src="/images/thumbnails/t-mount-wheels.jpg" width="400" height="300" alt="Montaje Ruedas" /></a>
				</div>
				<p>Ahora vamos a tomar las dos piezas en forma de &quot;T&quot; y las dos piezas que tiene un agujero en forma rectangular en el centro para formar el soporte del l&aacute;piz; vamos a tomar una de las partes en forma de &quot;T&quot; e insertar las pesta&ntilde;as de su base en los agujeros rectangulares de las otras dos piezas. La otra parte en forma de &quot;T&quot; debe ir sobre las muescas en el borde de las piezas. La base del l&aacute;piz debe quedar igual que la siguiente figura.</p>
				<div class="gallery">
					<a href="/images/SIEBOT/pen-base.jpg" rel="prettyPhoto[build]" title="Base para el l&aacute;piz."><img src="/images/thumbnails/t-pen-base.jpg" width="400" height="300" alt="Base para el l&aacute;piz" /></a>
				</div>
				<p>Continuamos montando el soporte para el l&aacute;piz en la base principal usando para ello los agujeros correspondientes en la base, de la misma forma que se puede ver en la siguiente figura.</p>
				<div class="gallery">
					<a href="/images/SIEBOT/mount-pen-base.jpg" rel="prettyPhoto[build]" title="Montaje Base para el l&aacute;piz."><img src="/images/thumbnails/t-mount-pen-base.jpg" width="400" height="300" alt="Montaje Base para el l&aacute;piz" /></a>
				</div>
				<p>Como &uacute;ltimos pasos encajaremos las cuatro piezas restantes en la base principal para formar la caja de soporte para ls pilas, con lo que el SIEBOT se debe ver igual que la figura siguiente.</p>
				<div class="gallery">
					<a href="/images/SIEBOT/batt-base.jpg" rel="prettyPhoto[build]" title="Montaje Base para Bater&iacute;as."><img src="/images/thumbnails/t-batt-base.jpg" width="400" height="300" alt="Montaje Base para Bater&iacute;as" /></a>
				</div>
				<p>Para finalizar nuestro SIEBOT usaremos un par de tornillos largos y los usaremos para soportar la tarjeta de desarrollo, que debe quedar igual que la imagen.</p>
				<div class="gallery">
					<a href="/images/SIEBOT/SIE2.jpg" rel="prettyPhoto[build]" title="Montaje Completo."><img src="/images/thumbnails/t-SIE2.png" width="400" height="300" alt="Montaje Completo" /></a>
				</div>
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
