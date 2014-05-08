<!DOCTYPE html>
<html class="students" lang="es">
	<head>
		
		<title>Estudiantes &gt; Actividades</title>
		
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<meta name="description" content="Pr&aacute;cticas para estudiantes - Universidad de los Ni&ntilde;os">
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
        
        <style>
        	footer {
        		top: 1500px;
        	}
        	#content {
        		padding: 0;
        	}
        </style>
	</head>

	<body>
<?php
require_once '../../php/header.php';
?>
		<div id="breadcrumb"><a href="../">Estudiantes</a> &#62; <a href="./">Actividades</a></div>
		
<?php
require_once '../../php/nav.php';
nav("top");
nav("aside");
?>
		<aside id="tabs" class="students">
			<ul>
				<li><span>Pr&aacute;ctica 1</span><a href="#practice-1">Electr&oacute;nica B&aacute;sica</a></li>
				<li><span>Pr&aacute;ctica 2</span><a href="#practice-2">Electr&oacute;nica y L&oacute;gica</a></li>
				<li><span>Pr&aacute;ctica 3</span><a href="#practice-3">Sensores</a></li>
				<li><span>Pr&aacute;ctica 4</span><a href="#practice-4">Motores</a></li>
				<li><span>Pr&aacute;ctica 5</span><a href="#practice-5">Conceptos de Mov.</a></li>
				<li><span>Pr&aacute;ctica 6</span><a href="#practice-6">Locomoci&oacute;n</a></li>
			</ul>
		</aside>
		<div id="content">
			<!--Práctica 1 ------------------------------------------------------------------------------------------------>
        	<div class="tab" id="practice-1">
        		<h1>Electr&oacute;nica B&aacute;sica</h1>
        		<h2>Pr&aacute;ctica 1</h2>
        		<p>En está práctica trataremos los conceptos de circuitos resistencia-condensador (RC) y se harán mediciones utilizando instrumentos básicos como el multímetro y el osciloscopio.</p>
        		<h3>Materiales</h3>
        		<ul>
        			<li>Mult&iacute;metro</li>
        			<li>Osciloscopio</li>
        			<li>Proto-board</li>
        			<li>Generador de Se&ntilde;ales</li>
        			<li>Resistencias</li>
        			<li>Condensadores</li>
        			<li>Pilas</li>
        		</ul>
        		<h3>Diccionario</h3>
        		<p>En esta guía se encuentran algunos conceptos que pueden ser nuevos, a continuación encontrarás una lista con sus definiciones.</p>
        		<ul>
        			<li><a href="http://es.wikipedia.org/wiki/Tensi%C3%B3n_%28electricidad%29" target="_blank">Voltaje</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Corriente_el%C3%A9ctrica" target="_blank">Corriente</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Resistencia_el%C3%A9ctrica" target="_blank">Resistencia</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Condensador_electrol%C3%ADtico" target="_blank">Condensador Electrol&iacute;tico</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Condensador_el%C3%A9ctrico#Tipos_de_diel.C3.A9ctrico_utilizados_en_condensadores" target="_blank">Condensador Cer&aacute;mico</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Mult%C3%ADmetro" target="_blank">Multímetro</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Osciloscopio" target="_blank">Osciloscopio</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Generador_de_se%C3%B1ales" target="_blank">Generador de Señales</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Placa_de_pruebas" target="_blank">Protoboard</a></li>
        		</ul>
        		<h3>Informaci&oacute;n Adicional</h3>
        		<p>Antes de iniciar la pr&aacute;ctica es importatante consultar el funcionamiento de un mult&iacute;metro, un osciloscopio, un generador de señales y la protoboard, también el manejo del <a href="http://www.digikey.com/us/es/mkt/calculators/4-band-resistors.html">c&oacute;digo de colores</a> de las resistencias.</p>
        		<h3>Documentos</h3>
        		<p>A continuaci&oacute;n encontrar&aacute;s el documento con las instrucciones de pr&aacute;ctica 1.</p>
        		<a class="doc" href="/docs/PRACTICA-I-ELECTRONICA-BASICA.docx"><img alt="Documento pr&aacute;ctica 1" src="/images/docx-icon.png" /><span>Documento Pr&aacute;ctica I</span></a>
        	</div>
        	<!--Práctica 2 ------------------------------------------------------------------------------------------------>
        	<div class="tab" id="practice-2">
        		<h1>Electr&oacute;nica y L&oacute;gica</h1>
        		<h2>Pr&aacute;ctica 2</h2>
        		<p>Esta pr&aacute;ctica se basa en el aprendizaje de los conceptos b&aacute;sicos de la electr&oacute;nica y la l&oacute;gica digital donde se har&aacute;n jercicios de programaci&oacute;n de funciones l&oacute;gicas con la ayuda de una tarjeta de desarrollo.</p>
        		<h3>Materiales</h3>
        		<ul>
        			<li>Protoboard</li>
        			<li>Tarjeta de Desarrollo SIE-2</li>
        			<li>Conectores para la Tarjeta</li>
        			<li>Resistencias</li>
        			<li>Compuertas Lógicas <strong>AND</strong> (74LS08) y <strong>OR</strong> (74LS32)</li>
        			<li>LED's</li>
        			<li>Switchs Normalmente Abiertos</li>
        			<li>Pilas</li>
        		</ul>
        		<h3>Diccionario</h3>
        		<p>En esta guía se encuentran conceptos que pueden ser nuevos, a continuación encontrarás una lista con algunas de sus definiciones.</p>
        		<ul>
        			<li><a href="http://es.wikipedia.org/wiki/Puerta_l%C3%B3gica" target="_blank">Compuerta L&oacute;gica</a></li>
        			<li><a href="http://es.wikibooks.org/wiki/Circuito_integrado_7408" target="_blank">Integrado 74LS08</a></li>
        			<li>Integrado 74LS32</li>
        			<li><a href="http://es.wikipedia.org/wiki/Led" target="_blank">LED</a></li>
        			<li>Tarjeta de desarrollo</li>
        			<li>Ardublocks</li>
        		</ul>
        		<p>Como complemento se puede visitar la siguiente página con informaci&oacute;n sobre las <a href="http://www.virtual.unal.edu.co/cursos/ingenieria/2001771/html/cap07/07_03_01.html" target="_blank">compuertas l&oacute;gicas</a>.</p>
        		<h3>Informaci&oacute;n Adicional</h3>
        		<p>Se recomienda buscar información sobre las hojas de datos de las compuertas lógicas <a href="http://www.ti.com/lit/ds/symlink/sn74ls08.pdf" target="_blank">74LS08</a> y <a href="http://www.ti.com/lit/ds/symlink/sn74ls32.pdf" target="_blank">74LS32</a>, así mismo el funcionamiento y conexión de un LED y la programaci&oacute;n en el programa <a href="http://blog.ardublock.com/" hreflang="en" target="_blank">Ardublocks</a>.</p>
        		<h3>Documentos</h3>
        		<p>A continuaci&oacute;n encontrar&aacute;s el documento con las instrucciones de pr&aacute;ctica 2.</p>
        		<a class="doc" href="/docs/PRACTICA-II-ELECTRONICA-Y-LOGICA.docx"><img alt="Documento pr&aacute;ctica 2" src="/images/docx-icon.png" /><span>Documento Pr&aacute;ctica II</span></a>
        	</div>
        	<!--Práctica 3 ------------------------------------------------------------------------------------------------>
        	<div class="tab" id="practice-3">	
        		<h1>Sensores</h1>
        		<h2>Pr&aacute;ctica 3</h2>
        		<p>La siguiente práctica hace enfasis en el aprendizaje de unos de los sistemas de sensores más comunmente utilizados como la medición de la luminosidad, la presencia de un objeto o la posición de un motor.</p>
        		<h3>Materiales</h3>
        		<ul>
        			<li>Protoboard</li>
        			<li>Tarjeta de Desarrollo SIE-2</li>
        			<li>Conectores para la Tarjeta</li>
        			<li>Resistencias</li>
        			<li>Sensor de Distancia Sharp GP2Y0A41SK0F</li>
        			<li>LED's</li>
        			<li>Fotorresistencia</li>
        			<li>Encoders</li>
        			<li>Multímetro</li>
        			<li>Llanta y transportador</li>
        			<li>Pilas</li>
        		</ul>
        		<h3>Diccionario</h3>
        		<p>En esta guía se encuentran conceptos que pueden ser nuevos, a continuación encontrarás una lista con algunas de sus definiciones.</p>
        		<ul>
        			<li><a href="http://es.wikipedia.org/wiki/Sensor_infrarrojo" target="_blank">Sensor infrarrojo</a></li>
        			<li>Sharp GP2Y0A41SK0F</li>
        			<li><a href="http://es.wikipedia.org/wiki/Fotorresistencia" target="_blank">Fotorresistencia o LDR</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Codificador_rotatorio">Encoder</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Conversi%C3%B3n_anal%C3%B3gica-digital">ADC</a></li>
        		</ul>
        		<h3>Informaci&oacute;n Adicional</h3>
        		<p>Es recomendable consultar informaci&oacute;n sobre lo elementos que se van a usar, el funcionamiento y conexi&oacute;n de una fotorresistencia y la forma en que trabaja un encoder, junto a las hojas de datos de los elementos a usar.</p>
        		<h3>Documentos</h3>
        		<p>A continuaci&oacute;n encontrar&aacute;s el documento con las instrucciones de pr&aacute;ctica 3.</p>
        		<a class="doc" href="/docs/SENSORES.docx"><img alt="Documento pr&aacute;ctica 3" src="/images/docx-icon.png" /><span>Documento Pr&aacute;ctica III</span></a>
        	</div>
        	<!--Práctica 4 ------------------------------------------------------------------------------------------------>
        	<div class="tab" id="practice-4">
        		<h1>Motores</h1>
        		<h2>Pr&aacute;ctica 4</h2>
        		<p>Esta práctica se centra en el entendimiento del funcionamiento de un motor y el control de la velocidad y posición.</p>
        		<h3>Materiales</h3>
        		<ul>
        			<li>Protoboard</li>
        			<li>Motoreductor con Llanta</li>
        			<li>Potenci&oacute;metro</li>
        			<li>Resistencias</li>
        			<li>Sensor de Distancia</li>
        			<li>Puente H L293D</li>
        			<li>Bater&iacute;a</li>
        			<li>Encoder</li>
        			<li>Multímetro</li>
        			<li>Tarjeta de Desarrollo</li>
        		</ul>
        		<h3>Diccionario</h3>
        		<p>En esta guía se encuentran conceptos que pueden ser nuevos, a continuación encontrarás una lista con algunas de sus definiciones.</p>
        		<ul>
        			<li><a href="http://es.wikipedia.org/wiki/Motor" target="_blank">Motor</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Potenci%C3%B3metro" target="_blank">Potenciómetro.</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Modulaci%C3%B3n_por_ancho_de_pulsos">Modulaci&oacute;n por Ancho de Pulso.</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Puente_H_%28electr%C3%B3nica%29">Puente H</a></li>
        		</ul>
        		<h3>Informaci&oacute;n Adicional</h3>
        		<p>Es recomendable consultar informaci&oacute;n sobre lo elementos que se van a usar, el funcionamiento y conexi&oacute;n de motor DC, la conexión de un potenci&oacute;metro y el uso de motores para generaci&oacute;n, además de consultar las hojas de datos de los elementos que se van a usar.</p>
        		<h3>Documentos</h3>
        		<p>A continuaci&oacute;n encontrar&aacute;s el documento con las instrucciones de pr&aacute;ctica 4.</p>
        		<a class="doc" href="/docs/MOTORES.docx"><img alt="Documento pr&aacute;ctica 4" src="/images/docx-icon.png" /><span>Documento Pr&aacute;ctica IV</span></a>
        	</div>
        	<!--Práctica 5 ------------------------------------------------------------------------------------------------>
        	<div class="tab" id="practice-5">
        		<h1>Conceptos de Movimiento</h1>
        		<h2>Pr&aacute;ctica 5</h2>
        		<p>Esta práctica se centra en el entendimiento del funcionamiento de un motor y el control de la velocidad y posición.</p>
        		<h3>Materiales</h3>
        		<ul>
        			<li>Protoboard</li>
        			<li>Motoreductor con Llanta</li>
        			<li>Potenci&oacute;metro</li>
        			<li>Resistencias</li>
        			<li>Sensor de Distancia</li>
        			<li>Puente H L293D</li>
        			<li>Bater&iacute;a</li>
        			<li>Encoder</li>
        			<li>Multímetro</li>
        			<li>Tarjeta de Desarrollo</li>
        		</ul>
        		<h3>Diccionario</h3>
        		<p>En esta guía se encuentran conceptos que pueden ser nuevos, a continuación encontrarás una lista con algunas de sus definiciones.</p>
        		<ul>
        			<li><a href="http://es.wikipedia.org/wiki/Motor" target="_blank">Motor</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Potenci%C3%B3metro" target="_blank">Potenciómetro.</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Modulaci%C3%B3n_por_ancho_de_pulsos">Modulaci&oacute;n por Ancho de Pulso.</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Puente_H_%28electr%C3%B3nica%29">Puente H</a></li>
        		</ul>
        		<h3>Informaci&oacute;n Adicional</h3>
        		<p>Es recomendable consultar informaci&oacute;n sobre lo elementos que se van a usar, el funcionamiento y conexi&oacute;n de motor DC, la conexión de un potenci&oacute;metro y el uso de motores para generaci&oacute;n, además de consultar las hojas de datos de los elementos que se van a usar.</p>
        		<h3>Documentos</h3>
        		<p>A continuaci&oacute;n encontrar&aacute;s el documento con las instrucciones de pr&aacute;ctica 4.</p>
        		<a class="doc" href="/docs/MOTORES.docx"><img alt="Documento pr&aacute;ctica 4" src="/images/docx-icon.png" /><span>Documento Pr&aacute;ctica IV</span></a>
        	</div>
        	<div class="tab" id="practice-6">
        		<h1>Locomoci&oacute;n</h1>
        		<h2>Pr&aacute;ctica 6</h2>
        		<p>En está práctica trataremos los conceptos de lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra vel mi sed varius. Curabitur interdum erat nec nisi porttitor fermentum. Phasellus eu mi mattis, viverra justo in, sagittis orci. Sed nibh purus, tincidunt et mauris nec, vulputate rhoncus mauris. Sed eget venenatis turpis. Duis imperdiet augue vel interdum iaculis. Phasellus at neque a dui pellentesque tristique id et turpis. Nam aliquet mi justo, vitae gravida sem lacinia eget. Morbi sapien odio, mattis at lobortis non, posuere vitae odio. Ut in pretium leo, non posuere ipsum. Duis ac lacinia leo, tempus tempor nibh. Cras placerat, metus id vulputate tempus, magna orci interdum tortor, non dapibus nisi massa quis quam</p>
        	</div>
        </div>
        
        <div id="top-btn"><a href="#"></a></div>
<?php
require_once '../../php/footer.php';
?>
	</body>
</html>
