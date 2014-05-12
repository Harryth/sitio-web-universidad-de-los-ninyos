<!DOCTYPE html>
<html lang="es" class="sie">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Acerca de - La Universidad de los Ni&ntilde;os</title>
		<meta name="description" content="SIEBOT">
		<meta name="author" content="Harold Vallejo">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">

		<link rel="stylesheet" type="text/css" href="../../css/sections-layout.css" />
		<link rel="stylesheet" type="text/css" href="../../css/sections-style.css" />
		<link rel="stylesheet" type="text/css" href="../../css/nav-layout.css" />
		<link rel="stylesheet" type="text/css" href="../../css/nav-style.css" />
		<link rel="stylesheet" type="text/css" href="../css/sie.css" />
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

		<div id="breadcrumb"><a href="../">La Universidad de los Ni&ntilde;os</a> &gt; <a href="./">SIEBOT</a></div>

<?php
require_once '../../php/nav.php';
nav("top");
nav("aside");
?>
		<div id="content">
			<h1>SIEBOT</h1>
			<p>SIEBOT es una plataforma rob&oacute;tica desarrollada con el fin de ense&ntilde;ar los principios de la rob&oacute;tica m&oacute;vil a ni&ntilde;os en edad escolar.</p>
			<p>A continuaci&oacute;n encontraremos una galer&iacute;a con algunas im&aacute;genes de la plataforma SIEBOT.</p>
			<div class="gallery">
				<a href="/images/SIEBOT/front.png" rel="prettyPhoto[siebot]" title="Vista Frontal."><img src="/images/thumbnails/t-front.png" width="120" height="120" alt="Vista Frontal SIEBOT" /></a>
				<a href="/images/SIEBOT/rigth.png" rel="prettyPhoto[siebot]" title="Vista Frontal-Derecha."><img src="/images/thumbnails/t-rigth.png" width="120" height="120" alt="Vista Frontal-Derecha SIEBOT" /></a>
				<a href="/images/SIEBOT/back-right.png" rel="prettyPhoto[siebot]" title="Vista Posterior-Derecha."><img src="/images/thumbnails/t-back-right.png" width="120" height="120" alt="Vista Posterior-Derecha SIEBOT" /></a>
				<a href="/images/SIEBOT/back.png" rel="prettyPhoto[siebot]" title="Vista Posterior."><img src="/images/thumbnails/t-back.png" width="120" height="120" alt="Vista Posterior SIEBOT" /></a>
				<a href="/images/SIEBOT/no-cover.png" rel="prettyPhoto[siebot]" title="Vista Interior."><img src="/images/thumbnails/t-no-cover.png" width="120" height="120" alt="Vista Interior SIEBOT" /></a>
				
			</div>
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
