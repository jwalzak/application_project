<?php
	session_start();
    require("connect.php");
	
	session_destroy();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hero Burger &#x2605; Made to Order!</title>

	<!-- Google Fonts CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Galindo|Fira+Sans+Condensed|Frijole|Press+Start+2P|Crete+Round|Droid+Serif">
	<!-- Font Awesome Icons JS -->
	<script src="https://use.fontawesome.com/97f2d469d8.js"></script>	
	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- Latest compiled Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/subcontent.css"/>
	
	<style>
	body {
		background: url("images/bg.png");
		overflow: hidden;
	}
	a {
		text-decoration: none;
		color: #494c49;
	}
	a:hover {
		color: #355c57;
		transition: all 1s;
	}
	</style>
</head>

<body>
	<!-- content  -->
	<div id="content">
		<h1>So Long!</h1>
	
		<div class="row">
            <div class="col-xs-12" style="text-align: center;">
				<p>Thank you for using Hero Burger &#x2605;</p>
				
				<img src="images/burg.gif" id="burger" style="max-width: 30%; height: auto;">
				
				<p><a href="index.php" target="_parent"><i class="fa fa-2x fa-home" aria-hidden="true" style="padding-top: 20px;"></i></a></p>
            </div>		
		</div>
	</div>
	
</body>
</html>