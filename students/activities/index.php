<!DOCTYPE html>
<html class="students" lang="es">
	<head>
		
		<title>Estudiantes &gt; Actividades - La Universidad de los Nin&ntilde;os</title>
		
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
        <link rel="stylesheet" type="text/css" href="./css/style-sheet.css" />
        <link rel="stylesheet" type="text/css" href="../css/students.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script src="../../js/nav-app.js"></script>
        <script src="../../js/sections-app.js"></script>
        
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
				<li><span>Pr&aacute;ctica 7</span><a href="#practice-7">Control Pos. y Vel.</a></li>
				<li><span>Pr&aacute;ctica 8</span><a href="#practice-8">Trayectorias</a></li>
				<li><span>Pr&aacute;ctica 9</span><a href="#practice-9">Engranes</a></li>
			</ul>
		</aside>
		<div id="content">
			
			<div class="tab">
				<h1>Actividades</h1>
				<p>En esta p&aacute;gina encontrar&aacute;s todas las actividades del curso, acompa&ntilde;ada de la informaci&oacute;n m&aacute;s importante que debes tener en cuenta, como: la lista de materiales, t&eacute;rminos nuevos a aprender, informaci&oacute;n adicional y los ducumentos con el desarrollo completo de las pr&aacute;cticas.</p>
				<p>En el menú de navegación de la derecha encontrarás los cínculos a cada una de las prácticas y podras navegar entre ellas.</p>
			</div>
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
        			<li><a href="http://es.wikipedia.org/wiki/Codificador_rotatorio" target="_blank">Encoder</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Conversi%C3%B3n_anal%C3%B3gica-digital" target="_blank">ADC</a></li>
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
        			<li><a href="http://es.wikipedia.org/wiki/Potenci%C3%B3metro" target="_blank">Potenciómetro</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Modulaci%C3%B3n_por_ancho_de_pulsos" target="_blank">Modulaci&oacute;n por Ancho de Pulso</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Puente_H_%28electr%C3%B3nica%29" target="_blank">Puente H</a></li>
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
        		<p>En esta pr&aacute;ctica trataremos los conceptos de velocidad, fuerza y aceleración y se buscará determinar la relación entre la distancia recorrida y la rotación de una rueda, experimentando los conceptos de movimiento a trav&eacute;s de la utilizaci&oacute;n de sensores y elementos de electr&oacute;nica.</p>
        		<h3>Materiales</h3>
        		<ul>
        			<li>Tubo Artesanal</li>
        			<li>Esferas de Diferentes Pesos</li>
        			<li>Cron&oacute;metro</li>
        			<li>Regla</li>
        			<li>Transportador</li>
        			<li>Ruedas de Diferentes Tamaños</li>
        			<li>Tarjeta de Desarrollo SIE-2</li>
        			<li>Encoders</li>
        			<li>Puente H L293D</li>
        			<li>Conectores para Tarjeta</li>
        			<li>Resistencias</li>
        			<li>Pilas</li>
        		</ul>
        		<h3>Diccionario</h3>
        		<p>En esta guía se encuentran conceptos que pueden ser nuevos, a continuación encontrarás una lista con algunas de sus definiciones.</p>
        		<ul>
        			<li><a href="http://es.wikipedia.org/wiki/Per%C3%ADmetro" target="_blank">Per&iacute;metro</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Masa" target="_blank">Masa</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Velocidad" target="_blank">Velocidad</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Aceleraci%C3%B3n" target="_blank">Aceleraci&oacute;n</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Fuerza" target="_blank">Fuerza</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Gravedad" target="_blank">Gravedad</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Leyes_de_Newton" target="_blank">Leyes de newton</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Ca%C3%ADda_libre" target="_blank">Ca&iacute;da Libre</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Movimiento_uniformemente_acelerado" target="_blank">Movimiento Uniformemente Acelerado</a></li>
        		</ul>
        		<p>Se recomienda visitar la siguiente p&aacute;gina con información sobre el <a href="http://www.profesorenlinea.cl/fisica/Movimiento_rectilineo_acelerado.html">movimiento uniformemente acelerado</a>.</p>
        		<h3>Documentos</h3>
        		<p>A continuaci&oacute;n encontrar&aacute;s el documento con las instrucciones de pr&aacute;ctica 5.</p>
        		<a class="doc" href="/docs/CONCEPTOS-DE-MOV.docx"><img alt="Documento pr&aacute;ctica 5" src="/images/docx-icon.png" /><span>Documento Pr&aacute;ctica V</span></a>
        	</div>
        	<!--Práctica 6 ------------------------------------------------------------------------------------------------>
        	<div class="tab" id="practice-6">
        		<h1>Locomoci&oacute;n</h1>
        		<h2>Pr&aacute;ctica 6</h2>
        		<p>Esta práctica se centra en la locomoci&oacute;n de un robot m&oacute;vil, la generaci&oacute;n de trayectorias y la simulaci&oacute;n de las mismas en un robot m&oacute;vil en configuraci&oacute;n diferencial.</p>
        		<h3>Materiales</h3>
        		<ul>
        			<li>Ruedas</li>
        			<li>Final de Carrera o Microswitch</li>
        			<li>Interruptor</li>
        			<li>Tarjeta de Desarrollo SIE-2</li>
        			<li>Encoders</li>
        			<li>Motores</li>
        			<li>Conectores para Tarjeta</li>
        			<li>Pilas</li>
        		</ul>
        		<h3>Diccionario</h3>
        		<p>En esta guía se encuentran conceptos que pueden ser nuevos, a continuación encontrarás una lista con algunas de sus definiciones.</p>
        		<ul>
        			<li>Locomoci&oacute;n</li>
        			<li>Tracci&oacute;n</li>
        			<li>Configuraci&oacute;n Diferencial</li>
        			<li><a href="http://es.wikipedia.org/wiki/Trayectoria" target="_blank">Trayectoria</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Centro_de_gravedad" target="_blank">Centro de Gravedad</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Sensor_final_de_carrera" target="_blank">Final de Carrera</a></li>
        		</ul>
        		<h3>Informaci&oacute;n Adicional</h3>
        		<p>Se recomienda la lectura de informaci&oacute;n relacionada con la configuraci&oacute;n diferencial, tambi&eacute;n sobre tracci&oacute;n y el funcionamiento de un final de carrera.</p>
        		<h3>Documentos</h3>
        		<p>A continuaci&oacute;n encontrar&aacute;s el documento con las instrucciones de pr&aacute;ctica 6.</p>
        		<a class="doc" href="/docs/LOCOMOCION.docx"><img alt="Documento pr&aacute;ctica 6" src="/images/docx-icon.png" /><span>Documento Pr&aacute;ctica VI</span></a>
        	</div>
        	<!--Práctica 7 ------------------------------------------------------------------------------------------------>
        	<div class="tab" id="practice-7">
        		<h1>Control de Posici&oacute;n y Velocidad de un Motor</h1>
        		<h2>Pr&aacute;ctica 7</h2>
        		<p>Esta pr&aacute;ctica est&aacute; orientada hac&iacute;a el aprendizaje del control de posici&oacute;n y velocidad de un motor entendiendo los efectos de la realimentaci&oacute;n en un lazo de control.</p>
        		<h3>Materiales</h3>
        		<ul>
        			<li>Tarjeta de desarrollo SIE-2</li>
        			<li>Encoder </li>
        			<li>Conectores para tarjeta</li>
        			<li>Pilas</li>
        			<li>Llanta y transportador</li>
        		</ul>
        		<h3>Diccionario</h3>
        		<p>En esta guía se encuentran conceptos que pueden ser nuevos, a continuación encontrarás una lista con algunas de sus definiciones.</p>
        		<ul>
        			<li>Sistema Discreto</li>
        			<li><a href="http://es.wikipedia.org/wiki/Sistema_de_control" target="_blank">Sistema de Control</a></li>
        			<li>Lazo Cerrado</li>
        			<li><a href="http://es.wikipedia.org/wiki/Realimentaci%C3%B3n" target="_blank">Realimentaci&oacute;n</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Ciclo_de_trabajo" target="_blank">Ciclo &Uacute;til</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Control_proporcional" target="_blank">Control Proporcional</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Velocidad_angular" target="_blank">Velocidad Angular</a></li>
        			<li>Posición Angular</li>
        			<li>Resoluci&oacute;n de un sensor</li>
        		</ul>
        		<h3>Informaci&oacute;n Adicional</h3>
        		<p>Es muy recomendable repasar los t&eacute;rminos sugeridos en la secci&oacute;n previa y entender el principio de funcionamiento de un sistema de control y un sistema discreto, as&iacute; mismo se deben tener claros los conceptos de posici&oacute;n y velocidad de un motor. Es muy importante aprender  sobre el funcionamiento de un encoder, en especial las caracter&iacute;sticas del encoder Pololu 0J3334 que se est&aacute; utilizando.</p>
        		<h3>Documentos</h3>
        		<p>A continuaci&oacute;n encontrar&aacute;s el documento con las instrucciones de pr&aacute;ctica 7 y los programas para ejecutar en el software Ardublock.</p>
        		<a class="doc" href="/docs/CONTROL-POSICION-Y-VELOCIDAD.docx"><img alt="Documento pr&aacute;ctica 7" src="/images/docx-icon.png" /><span>Documento Pr&aacute;ctica VII</span></a>
        		<br />
        		<a class="doc" href="/docs/Lazo-abierto.abp"><img alt="Programa Lazo Abierto" src="/images/ardublock-icon.png" /><span>Programa Lazo Abierto</span></a>
        		<br />
        		<a class="doc" href="/docs/Lazo-cerrado-pos.abp"><img alt="Programa Lazo Cerrado Posici&oacute;n" src="/images/ardublock-icon.png" /><span>Programa Lazo Cerrado Posici&oacute;n</span></a>
        		<br />
        		<a class="doc" href="/docs/Lazo-cerrado-vel.abp"><img alt="Programa Lazo Cerrado Velocidad" src="/images/ardublock-icon.png" /><span>Programa Lazo Cerrado Velocidad</span></a>
        	</div>
        	<!--Práctica 8 ------------------------------------------------------------------------------------------------>
        	<div class="tab" id="practice-8">
        		<h1>Generaci&oacute;n de Trayectorias</h1>
        		<h2>Pr&aacute;ctica 8</h2>
        		<p>Esta pr&amp;aacute;ctica se centra en la ense&ntilde;anza del c&aacute;lculo de trayectorias en robots m&oacute;viles.</p>
        		<h3>Materiales</h3>
        		<ul>
        			<li>SIEBOT</li>
        			<li>Hojas con trayectorias</li>
        		</ul>
        		<h3>Diccionario</h3>
        		<p>En esta guía se encuentran conceptos que pueden ser nuevos, a continuación encontrarás una lista con algunas de sus definiciones.</p>
        		<ul>
        			<li><a href="http://es.wikipedia.org/wiki/Trayectoria" target="_blank">Trayectoria</a></li>
        			<li>Velocidad Tangencial</li>
        			<li><a href="http://es.wikipedia.org/wiki/Posici%C3%B3n" target="_blank">Posici&oacute;n</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Vector" target="_blank">Vector</a></li>
        			<li>Distancia Recorrida</li>
        			<li><a href="http://es.wikipedia.org/wiki/Per%C3%ADmetro" target="_blank">Perímetro</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Longitud_de_arco" target="_blank">Longitud de Arco</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Radi%C3%A1n" target="_blank">Radián</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/%C3%81ngulos_suplementarios" target="_blank">&Aacute;ngulos suplementarios</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Teorema_del_seno" target="_blank">Teorema del seno</a></li>
        		</ul>
        		<h3>Informaci&oacute;n Adicional</h3>
        		<p>Es muy recomendable repasar los t&eacute;rminos sugeridos en la secci&oacute;n previa y entender el funcionamiento de un encoder y como calcular la posici&oacute;n a partir de este elemento.</p>
        		<h3>Documentos</h3>
        		<p>A continuaci&oacute;n encontrar&aacute;s el documento con las instrucciones de pr&aacute;ctica 8 y los programas para ejecutar en el software Ardublock.</p>
        		<a class="doc" href="/docs/GENERACION-TRAYECTORIAS.docx"><img alt="Documento pr&aacute;ctica 8" src="/images/docx-icon.png" /><span>Documento Pr&aacute;ctica VIII</span></a>
        		<br />
        		<a class="doc" href="/docs/Cuadrado.abp"><img alt="Programa Trayectoria Cuadrada" src="/images/ardublock-icon.png" /><span>Programa Trayectoria Cuadrada</span></a>
        		<br />
        		<a class="doc" href="/docs/Triangulo.abp"><img alt="Programa Trayectoria Triangular" src="/images/ardublock-icon.png" /><span>Programa Trayectoria Triangular</span></a>
        		<br />
        		<a class="doc" href="/docs/Circulo.abp"><img alt="Programa Trayectoria Circular" src="/images/ardublock-icon.png" /><span>Programa Trayectoria Circular</span></a>
        	</div>
        	<!--Práctica 9 ------------------------------------------------------------------------------------------------>
        	<div class="tab" id="practice-9">
        		<h1>Engranes</h1>
        		<h2>Pr&aacute;ctica 9</h2>
        		<p>Esta pr&aacute;ctica enseña el uso de los engranes y sus características más importantes haciendo énfasis en el cálculo de relaciones de velocidad</p>
        		<h3>Materiales</h3>
        		<ul>
        			<li>Aplicación engranes</li>
        		</ul>
        		<h3>Diccionario</h3>
        		<p>En esta guía se encuentran conceptos que pueden ser nuevos, a continuación encontrarás una lista con algunas de sus definiciones.</p>
        		<ul>
        			<li><a href="http://es.wikipedia.org/wiki/Engranaje" target="_blank">Engrane</a></li>
        			<li>Transmisión de potencia</li>
        			<li><a href="http://es.wikipedia.org/wiki/Reductores_de_velocidad" target="_blank">Reductor de Velocidad</a></li>
        			<li><a href="http://es.wikipedia.org/wiki/Relaci%C3%B3n_de_transmisi%C3%B3n" target="_blank">Relaci&oacute;n de transmisi&oacute;n</a></li>
        		</ul>
        		<h3>Informaci&oacute;n Adicional</h3>
        		<p>Es muy recomendable repasar los t&eacute;rminos sugeridos en la secci&oacute;n previa y tambi&eacute;n revisar los diferentes tipos y configuraciones de engranes buscando im&aacute;genes y videos que ayuden a visualizar su construcci&oacute;n y funcionamiento.</p>
        		<h3>Documentos</h3>
        		<p>A continuaci&oacute;n encontrar&aacute;s el documento con las instrucciones de pr&aacute;ctica 9 y enlaces a los recursos principales para el desarrollo de la pr&aacute;ctica.</p>
        		<a class="doc" href="/docs/ENGRANES.docx"><img alt="Documento pr&aacute;ctica 9" src="/images/docx-icon.png" /><span>Documento Pr&aacute;ctica IX</span></a>
        		<br />
        		<a class="doc" href="http://www.fisme.science.uu.nl/toepassingen/00725/" target="_blank"><img alt="Aplicaci&oacute;n engranes" src="/images/http-icon.png" /><span>Aplicaci&oacute;n Engranes</span></a>
        		<br />
        		<a class="doc" href="http://youtu.be/4augy82FQBk" target="_blank"><img alt="Video tutorial" src="/images/http-icon.png" /><span>Video Tutorial</span></a>
        	</div>
        </div>
        
        <div id="top-btn"><a href="#"></a></div>
<?php
require_once '../../php/footer.php';
?>
	</body>
</html>
