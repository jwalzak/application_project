<?php
	require_once("navbar.php");
	require_once("GetChar.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hero Burger &#x2605; Made to Order!</title>

	<link rel="stylesheet" href="css/subcontent.css"/>
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed|Permanent+Marker|Crete+Round|Droid+Serif|Roboto" rel="stylesheet">
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/97f2d469d8.js"></script>
	
	<script src="js/charvault.js"></script>
</head>

<body>
<!-- navigation  -->

<!-- content  -->
<div id="content">
	<h1>Character Vault</h1>
	<p>Select a character to view their summary sheet.</p>  
	
	<div id="image-container">
		<img src="images/logosm.png"/><br/>
		Character Name
	</div>
	
	<div id="image-container">
		<img src="images/logosm.png"/><br/>
		Character Name
	</div>
	
	<div id="image-container">
		<img src="images/logosm.png"/><br/>
		Character Name
	</div>
	
	<p align="right">
		<a href="#top"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
	</p>
	<form action="creation.php" id="editChar" method="POST">
		<input type="submit" value="Edit Character">
	</form>
</div>

</body>
</html>