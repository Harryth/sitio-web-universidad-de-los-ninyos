<!DOCTYPE html>
<html lang="es" class="teachers">
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
			<a href="/teachers">Profesores</a> &gt; <a href="/teachers">Descripci&oacute;n</a> &gt;  <a href="./">Software</a>
		</div>

<?php
require_once '../../../php/nav.php';
nav("top");
nav("aside");
?>

		<aside id="tabs" class="teachers">
			<ul>
				<li><span>Instalaci&oacute;n</span><a href="#install">Sigue estos pasos</a></li>
				<li><span>Como usarlo</span><a href="#usage">Instrucciones</a></li>
			</ul>
		</aside>
		<div id="content">
			<div class="tab">
				<h1>Ardublock</h1>
				<p>Ardublock es un programa de computadores que sirve como entorno de desarrollo, permitiendo la programaci&oacute;n de la plataforma rob&oacute;tica SIEBOT. Con este programa podr&aacute; darle instrucciones al SIEBOT de manera muy sencilla, algo tan simple como arrastrar y soltar un bloque.</p>
				<p>Ardublock est&aacute; pensado de tal manera que simplifique el proceso de programaci&oacute;n, con bloques que encajan unos con otros de la manera m&aacute;s apropiada, reduciendo errores de sintaxis muy comunes en el proceso de programaci&oacute;n. Con Ardublock se aprender&aacute;n las sentencias principales en los distintos lenguajes de programaci&oacute;n, mientras se aprenden los aspectos m&aacute;s b&aacute;sicos de la rob&oacute;tica m&oacute;vil, como la generaci&oacute;n de trayectorias y los controles de velocidad y posici&oacute;n.</p>
				<p>En la pesta&ntilde;a de la derecha encontrar&aacute; las instrucciones para tener instalado el programa en su computador y hacerlo funcionar correctamente.</p>
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
				<p>Para tener Ardublock instalado y funcionando debe seguir las siguientes instrucciones:</p>
				<h3>Verificar la Instalaci&oacute;n de Java</h3>
				<p>Uno de los pasos m&aacute;s importantes es saber si se cuentas con Java instalado en el equipo. Java es una plataforma que permite la ejecuci&oacute;n de muchos programas, as&iacute; que es muy probable que ya est&eacute; instalado en su equipo. Para verificar que lo tenga instalado haga click en el siguiente enlace para <a href="http://www.java.com/es/download/installed.jsp" target="_blank">verificar la instalaci&oacute;n de Java</a>.</p>
				<p>Si no tiene instalado Java, puede seguir el siguiente enlace para <a href="http://www.java.com/es/download/" target="_blank">instalar Java</a>.</p>
				
				<h2>Descarga Ardublock</h2>
				<p>Una vez se hayan realizado los pasos previos debe descargar Ardublock en el siguiente enlace, descoprimir su contenido en la carpeta de su preferencia y dar click en el archivo <em>ardublock-all.jar</em> para ejecutar el programa.</p>
				<a class="doc" href="https://dl.dropboxusercontent.com/u/5004468/Ardublock.zip"><img alt="Documento pr&aacute;ctica 6" src="/images/tar-icon.png" /><span>Ardublock</span></a>
			</div>
			<!-- Como Usarlo------------------------------------------------------------------------------------------->
			<div class="tab" id="usage">
				<h1>Instrucciones de Uso</h1>
				<p>Usar Ardublock es muy sencillo y aqu&iacute; le ense&ntilde;aremos como:</p>
				<p>Primero abra la carpeta donde descomprimi&oacute; el programa, normalmente se llama <em>Ardublock</em> y a continuaci&oacute;n de doble click en el archivo llamdao <em>ardublock-all</em>.</p>
				<div class="gallery">
					<a href="/images/Ardublocks/folder.png" rel="prettyPhoto[usage]" title="Ejecutable Ardublock."><img src="/images/thumbnails/t-folder.png" width="339" height="170" alt="Ejecutable Ardublock" /></a>
				</div>
				<p>La interfaz del programa en funcionamiento se puede ver en la imagen siguiente.</p>
				<div class="gallery">
					<a href="/images/Ardublocks/ardublocks-1.png" rel="prettyPhoto[usage]" title="Interfaz Ardublock."><img src="/images/thumbnails/t-ardublocks-1-usage.png" width="359" height="250" alt="Interfaz Ardublock" /></a>
				</div>
				<p>Los enlaces de colores en la parte izquierda nos permiti&aacute;n navegar por los distintos bloques con los que cuenta el programa y est&aacute;n agrupados seg&uacute;n su funcionalidad.</p>
				<p>Para hacer un primer programa de click en el enlace de color amarillo llamado <em>control</em> y arrastre el primer bloque, llamado <em>program</em> que tiene las entradas, <em>setup</em> y <em>loop</em>. Este bloque sirve para hacer la configuraci&oacute;n inicial del programa. Puede arrastrar y soltar este bloque en cualquier parte del espacio central de la interfaz.</p>
				<div class="gallery">
					<a href="/images/Ardublocks/ardublock-usage-1.png" rel="prettyPhoto[usage]" title="Bloques de Control."><img src="/images/thumbnails/t-ardublock-usage-1.png" width="370" height="250" alt="Bloques de Control" /></a>
				</div>
				<p>Despu&eacute;s de esto arrastre un bloque <em>if/else</em> y a enc&aacute;jelo en el espacio enfrente de la palabra <em>loop</em> del bloque <em>program</em>, como puede ver enla im&aacute;gen. Este bloque eval&uacute;a una condici&oacute;n, y si se cumple (if) se ejecuta un c&oacute;digo, sino se cumple (else), se ejecuta otro c&oacute;digo. A continuaci&oacute;n ver&aacute; como.</p> 
				<div class="gallery">
					<a href="/images/Ardublocks/ardublock-usage-2.png" rel="prettyPhoto[usage]" title="Bloque Condicional."><img src="/images/thumbnails/t-ardublock-usage-2.png" width="361" height="250" alt="Bloques Condicional" /></a>
				</div>
				<p>Inicialmente vamos a crear la expresi&oacute;n que se va a evaluar, en esta ocasi&oacute;n se usar&aacute; una funci&oacute;n l&oacute;gica tipo <em>AND</em>.</p>
				<p>La funci&oacute;n <em>AND</em> la encontrar&aacute; dando click en el v&iacute;nculo de color naranja llamado <em>Conditionals</em>.Arrastre el bloque llamado <em>AND</em> y a enc&aacute;jelo frente a la ranura <em>test</em> del bloque <em>if/else</em>.</p>
				<div class="gallery">
					<a href="/images/Ardublocks/ardublock-usage-3.png" rel="prettyPhoto[usage]" title="Bloque AND."><img src="/images/thumbnails/t-ardublock-usage-3.png" width="361" height="250" alt="Bloques AND" /></a>
				</div>
				<p>Ahora vamos a crear las condiciones a evaluar y a ponerlas en las ranuras del bloque <em>AND</em>. Estas condiciones no son m&aacute;s sino la lectura de pines de entrada en nuestra tarjeta de desarrollo, y para leerlos vamos a utlizar el bloque <em>digital pin</em> en el enlace de color azul llamado <em>Pins</em>. Arrastre dos bloques <em>digital pin</em> frente a cada ranura del bloque <em>AND</em> y a elija los pines 32 y 33 dando click sobre el n&uacute;mero en cada bloque de color rosa y escriba los respectivos n&uacute;meros, de tal manera que quede igual que la figura.</p>
				<div class="gallery">
					<a href="/images/Ardublocks/ardublock-usage-4.png" rel="prettyPhoto[usage]" title="Expresi&oacute;n a Evaluar."><img src="/images/thumbnails/t-ardublock-usage-4.png" width="361" height="250" alt="Expresi&oacute;n a Evaluar" /></a>
				</div>
				<p>Ahora crearemos el c&oacute;digo que se ejecuta cuando los pines 32 y 33 tienen un estado l&oacute;gico <em>verdadero</em>. Para ello iremos al enlace <em>Pins</em> y arrastraremos un bloque <em>set digital pin</em> a la ranura marcada como <em>then</em> (entonces). Siguiendo el mismo procedimiento que el paso anterior seleccionaremos el pin n&uacute;mero 34 y dejaremos el bloque p&uacute;rpura como est&aacute;.</p>
				<div class="gallery">
					<a href="/images/Ardublocks/ardublock-usage-5.png" rel="prettyPhoto[usage]" title="Condici&oacute;n Verdadera."><img src="/images/thumbnails/t-ardublock-usage-5.png" width="361" height="250" alt="Condici&oacute;n Verdadera" /></a>
				</div>
				<p>Para finalizar, haremos la programaci&oacute;n para el caso en que no se cumpla la condici&oacute;n. Arrastre un nuevo bloque <em>set digital pin</em> y eleja nuevamente el pin n&uacute;mero 34, pero esta vez el bloque p&uacute;rpura se cambiar&aacute; a estado <em>LOW</em>, para hacer esto, debemos pasar el puntero por encima del bloque y dar click sobre el peque&ntilde;o tri&aacute;ngulo que se muestra, luego seleccione en la lista desplegada. El programa debe quedar como en la imagen.</p>
				<div class="gallery">
					<a href="/images/Ardublocks/ardublock-usage-6.png" rel="prettyPhoto[usage]" title="Programa Finalizado."><img src="/images/thumbnails/t-ardublock-usage-6.png" width="361" height="250" alt="Programa Finalizado" /></a>
				</div>
				<p>Ya con esto completamos el programa, para finalizar el proceso de click en en el bot&oacute;n <em>Upload to SIE2</em> para empezar el proceso de compilaci&oacute;n y enviarlo a la plataforma SIE2.</p>
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
