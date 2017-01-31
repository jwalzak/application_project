<?php
session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hero Burger &#x2605; Made to Order!</title>

	<link rel="stylesheet" href="css/content.css"/>
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed|Permanent+Marker|Crete+Round|Droid+Serif|Roboto" rel="stylesheet">
	<script src="https://use.fontawesome.com/97f2d469d8.js"></script>
</head>

<body>

<!-- sidebar promo content -->
<div id="promo">
	
	<!-- logo header -->
	<p align="center"><img src="images/logosm.png"></p>
	
	<div id="subtitle"><h3>MADE TO ORDER!</h3></div>
	
	<!-- footer  -->
	<div id="footer">
		<p align="center"><br/>
			<a href="#"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-tumblr-square fa-3x" aria-hidden="true"></i></a>
		</p>
		
		<p>&copy; Copyright 2017 The A-Team.<br/>All Rights Reserved.</p>
		
		<p align="center"><img src="images/burg.gif"></p>
	</div>
</div>

<!-- content  -->
<iframe id="frame" src="about.php">
</iframe>

</body>
</html>