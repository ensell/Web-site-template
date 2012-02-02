<?php require_once( 'inc.php' ); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>title</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
	
	<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->
	
	<?php webAppSetup( array(
		"statusBar" => "", // default | black | black-translucent
		"icon" => "img/icon.png", // /images/icon.png
		"icon_retina" => "img/icon@2x.png", // /images/icon.png
		"iconGloss" => false, // boolean
		"startUpImg" => "img/launch.png", // For retina, use same name, but add a @2x (i.e., launch.png == launch@2x.png
		"vpWidth" => "",	// Usually device-width
		"vpInitialScale" => "1",
		"vpUserScalable" => "", // yes | no
		"vpMinimumScale" => "", 
		"vpMaximumScale" => ""
	) ); ?>	
	
	<link rel="stylesheet" href="default.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<section id="wrap">
		<header id="header">
			<h1>Header</h1>
		</header>
		
		<section id="main" class="cf">
		
			<div class="absCenter" style="background:red;">
				<p>This is a centered absolute positioned div.</p>
				<p>No height/width HAS to be set to be centered!</p>
			</div>
	
			<h1>Heading #1</h1>
			<h2>Heading #2</h2>
			<h3>Heading #3</h3>
			<h4>Heading #4</h4>
			<h5>Heading #5</h5>
			<h6>Heading #6</h6>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		</section>
	</section>

	<footer id="footer">
		<h4>Footer</h4>
		<p>This is a <small>sticky</small> footer.  Only height needs to be set in <em>style.css</em>.  Everything else is <strong>automagically</strong> done for you.
	</footer>

	<script src="layout.js"><!-- // Dynamic layout scripts --></script>
</body>
</html>