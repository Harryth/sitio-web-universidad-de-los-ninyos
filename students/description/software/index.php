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
			<!-- Instalación------------------------------------------------------------------------------------------------>
			<div class="tab" id="install">
				<h1>Instalaci&oacute;n</h1>
				<p>Para tener Ardublock instalado y funcionando debes seguir las siguientes instrucciones:</p>
				<h3>Verificar la Instalaci&oacute;n de Java</h3>
				<p>Uno de los pasos m&aacute;s importantes es saber si se cuentas con Java instalado en el equipo. Java es una plataforma que permite la ejecuci&oacute;n de muchos programas, as&iacute; que es muy probable que ya est&eacute; instalado en tu equipo. Para verificar que lo tengas instalado has click en el siguiente enlace para <a href="http://www.java.com/es/download/installed.jsp">verificar la instalaci&oacute;n de Java</a>.</p>
				<p>Si no tienes instalado Java, puedes seguir el siguiente enlace para <a href="http://www.java.com/es/download/">instalar Java</a>.</p>
				<h3>Instalar el Compilador</h3>
				<p>El compilador es un programa que nos permite traducir las instrucciones que nosotros demos en Ardublock a unas instrucciones más complejas que el SIEBOT pueda entender. Para instalarlo, sigue estos simples pasos.</p>
				<p>Lo primero que debes hacer es descargarlo en el siguiente enlace.</p>
				<a class="doc" href="https://sourcery.mentor.com/GNUToolchain/package12193/public/arm-none-eabi/arm-2013.11-24-arm-none-eabi.exe"><img alt="G++ Lite Edition" src="/images/exe-icon.png" /><span>Sourcery G++ Lite</span></a>
				<p>Una vez descagado, ejecuta el archivo e inicia el proceso de instalaci&oacute;n.</p>
				<p>Aparecer&aacute; una ventana de bienvenida como la siguiente:</p>
				<div class="gallery">
					<a href="/images/g++/g++2.jpg" rel="prettyPhoto[g++]" title="Bienvenida instalador G++."><img src="/images/thumbnails/t-g++2.jpg" width="349" height="250" alt="Bienvenida instalador G++" /></a>
				</div>
				<p>Da click en siguiente, Lee y Acepta los t&eacute;rminos y condiciones de uso (License Agreement).</p>
				<p>A continuaci&oacute;n apareceuna pantalla con el resumen de la instalaci&oacute;n, da click en siguiente.</p>
				<p>En la siguiente pantalla (Choose Install Set) elige la opci&oacute;n t&iacute;pica (Typical) y da click en siguiente.</p>
				<p>Posteriormente elige la ruta de instalaci&oacute;n, puede ser la sugerida por defecto y de nuevo, da click en siguiente.</p>
				<p>En la siguiente ventana, a la pregunta si se quiere agregar el producto al PATH (Add product to the PATH) elige la opci&oacute;n de modificar para todos los usuarios (Modify PATH for all users).</p>
				<div class="gallery">
					<a href="/images/g++/g++7.jpg" rel="prettyPhoto[g++]" title="Modificar PATH para todos los usuarios."><img src="/images/thumbnails/t-g++7.jpg" width="349" height="250" alt="Modificar PATH para todos los usuarios" /></a>
				</div>
				<p>En la siguiente pantalla deja la opci&oacute;n por defecto seleccionada y da click en siguiente</p>
				<p>Finalmente aparecerá una pantalla con el resumen de la instalaci&oacute;n (Pre-Install Summary), da click en instalar (Install).</p>
				<p>Despu&eacute;s de esto aparecer&aacute;n una serie de pantallas con el proceso de instalaci&oacute;n. Espera un poco hasta que salga la ventana de aviso que se ha completado la instalaci&oacute;n (Install Complete) y da click en el bot&oacute;n hecho (Done).</p>
				<h3>Herramientas Adicionales</h3>
				<p>Es necesario instalar de manera adicional un conjunto de herramientas complementarias que nos ayudar&aacute;n en la programaci&oacute;n, para descargar el instalador podemos dar click en el enlace siguiente:</p>
				<a class="doc" href="https://csud.googlecode.com/files/yagarto-tools-20121018-setup.exe"><img alt="Yagarto Tools" src="/images/exe-icon.png" /><span>YAGARTO Tools</span></a>
				<p>Despu&eacute;s de descargado se debe ejecutar el instalador con lo que tendremos una pantalla de bienvenida.</p>
				<div class="gallery">
					<a href="/images/yagarto/y1.jpg" rel="prettyPhoto[yagarto]" title="Bienvenida Instalador Yagarto Tools."><img src="/images/thumbnails/t-y1.jpg" width="321" height="250" alt="Bienvenida Instalador Yagarto Tools" /></a>
				</div>
				<p>Damos click en el bot&oacute;n siguiente (Next) y pasamos a la ventana de t&eacute;rminos de licencia (License Agreement), los leemos y aceptamos, luego damos click en siguiente (Next).</p>
				<p>A continuaci&oacute;n aparecer&aacute; una pantalla para elegir los compnentes deseados (Choose Components) donde debemos dejar selecionadas las dos opciones y dar click en siguiente (Next).</p>
				<div class="gallery">
					<a href="/images/yagarto/y3.jpg" rel="prettyPhoto[yagarto]" title="Elegir los componentes de Yagarto."><img src="/images/thumbnails/t-y3.jpg" width="321" height="250" alt="Elegir los componentes de Yagarto" /></a>
				</div>
				<p>Luego elegimos la ruta de instalaci&oacute;n (Choose Instal Location) que puede ser cualquiera, y damos clock en siguiente.</p>
				<p>En la ventana siguiente damos click en el bot&oacute;n instalar (Install) para iniciar el proceso de instalaci&oacute;n.</p>
				<p>Despu&eacute;s de finalizado este proceso (Instalation Complete) damos click en el bot&oacute;n siguiente para luego dar click en el bot&oacute;n finalizar (Finish).</p>
				<div class="gallery">
					<a href="/images/yagarto/y7.jpg" rel="prettyPhoto[yagarto]" title="Final Instalaci&oacute;n Yagarto."><img src="/images/thumbnails/t-y7.jpg" width="321" height="250" alt="Final Instalaci&oacute;n Yagarto" /></a>
				</div>
				<h2>Descarga Ardublock</h2>
				<p>Ya finalmente solo debes descargar Ardublock en el siguiente enlace y descoprimir su contenido en la carpeta que prefieras.</p>
				<a class="doc" href="https://dl.dropboxusercontent.com/u/5004468/UNNinnos.zip"><img alt="Documento pr&aacute;ctica 6" src="/images/tar-icon.png" /><span>Ardublock</span></a>
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
