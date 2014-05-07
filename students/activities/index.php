<!DOCTYPE html>
<html class="students" lang="es">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>index</title>
		<meta name="description" content="">
		<meta name="author" content="Harold">

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
	</head>

	<body>
<?php
require_once '../../php/header.php';
?>
		<div id="breadcrumb"><a href="./">Estudiantes</a></div>
		
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
				<li><span>Pr&aacute;ctica 5</span><a href="#practice-5">Conceptos de Mov</a></li>
				<li><span>Pr&aacute;ctica 6</span><a href="#practice-6">Locomoci&oacute;n</a></li>
			</ul>
		</aside>
		<div id="content">
        	<h1 style="padding: 30px 30px 10px 30px;">Lorem Ipsum</h1>
            <p style="padding: 10px 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra vel mi sed varius. Curabitur interdum erat nec nisi porttitor fermentum. Phasellus eu mi mattis, viverra justo in, sagittis orci. Sed nibh purus, tincidunt et mauris nec, vulputate rhoncus mauris. Sed eget venenatis turpis. Duis imperdiet augue vel interdum iaculis. Phasellus at neque a dui pellentesque tristique id et turpis. Nam aliquet mi justo, vitae gravida sem lacinia eget. Morbi sapien odio, mattis at lobortis non, posuere vitae odio. Ut in pretium leo, non posuere ipsum. Duis ac lacinia leo, tempus tempor nibh. Cras placerat, metus id vulputate tempus, magna orci interdum tortor, non dapibus nisi massa quis quam</p>
            <p style="padding: 10px 30px;">Donec nisl lectus, aliquam sollicitudin ullamcorper ac, dapibus ac nulla. Sed lacinia blandit ipsum, sed ornare urna volutpat tincidunt. Nullam sagittis erat sit amet velit sodales accumsan. Ut hendrerit dictum eros, sed elementum enim commodo in. Duis pulvinar lobortis dolor. Vivamus sit amet aliquet tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris non hendrerit metus.</p>
            <p style="padding: 10px 30px;">Phasellus pellentesque euismod turpis quis commodo. Aenean sapien urna, tempor eget augue ac, aliquam aliquam urna. Suspendisse at dictum massa. In tempor dictum tempor. Sed rutrum tempor sapien et vehicula. Morbi in ullamcorper massa. Donec molestie accumsan turpis at varius. Suspendisse ut erat nec ligula dapibus molestie.</p>
            <p style="padding: 10px 30px;">Etiam quis neque posuere eros pulvinar dictum. Proin sollicitudin est lorem, sed ullamcorper leo hendrerit sit amet. Duis at lacus ante. Fusce eget ornare magna. Donec in lacus id dui consequat imperdiet. Quisque convallis aliquet auctor. Duis hendrerit mauris ut vulputate ultrices. Quisque scelerisque dapibus tempor. Quisque feugiat leo eget metus lobortis, eu auctor nisl tincidunt.</p>
            <p style="padding: 10px 30px;">Aliquam erat volutpat. Integer tempor nibh metus, at vehicula mi rutrum nec. Donec dapibus non orci ut aliquam. Maecenas faucibus a risus sit amet tempus. Donec consectetur massa nec urna dictum, ut ornare leo porttitor. Integer quis lacinia diam. Phasellus dictum mi erat, non cursus odio malesuada vel. Ut posuere sapien nec enim ultrices lacinia. Nam euismod eros et ligula gravida aliquam. Nullam nec urna ut magna dignissim tristique ut ac leo. Curabitur sit amet risus purus.</p>
        </div>
	</body>
</html>
