<?php
session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hero Burger &#x2605; Made to Order!</title>

	<link rel="stylesheet" href="css/content.css" media="screen"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed|Permanent+Marker|Crete+Round|Droid+Serif|Roboto">
	<script src="https://use.fontawesome.com/97f2d469d8.js"></script>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
			integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			crossorigin="anonymous"></script>
</head>

<body>
	<!-- navigation -->
	<nav>
		<ul>
			<!--<li><img src="images/logosm.png"></li>-->
			<li><i class="fa fa-shield" aria-hidden="true"></i></li>
		
			<div class="dropdown">	
			<li><a href="creation.php" class="targetlink">Creation</a></li>
				<div class="dropdown-content">
					<a href="#">Hero Basics</a>
					<a href="#">Background Story</a>
					<a href="#">Spells & Skills</a>
					<a href="#">Weapons & Armour</a>
					<a href="#">Character Image</a>
					<a href="summary.php">Hero Summary</a>
				</div>
			</div>
		
			<li><a href="summary.php" class="targetlink" style="margin-left:4%;">Summary</a>&nbsp;&nbsp;</li>
		
			<li><a href="charvault.php" class="targetlink">Character Vault</a>&nbsp;&nbsp;&nbsp;</li>
		
			<div class="dropdown">
				<li><a href="account.php" class="targetlink">Account</a>&nbsp;&nbsp;</li>
				<div class="dropdown-content">
					<a href="account.php">Create</a>
					<a href="#">Manage</a>
					<a href="#">Logout</a>
				</div>
			</div>
		
			<li><i class="fa fa-shield" aria-hidden="true"></i></li>
		</ul>
	</nav>
	
	<!-- content -->
	<iframe id="frame" src="creation.php"></iframe>

	<!-- footer -->
	<div id="footer">
		<p id="copyright">
			&copy; Copyright 2017 <a href="mailto:theateam@fanshaweonline.ca">The A-Team</a>. All Rights Reserved.<br class="newline"/>
			<a href="#"><i class="fa fa-facebook-square fa-1x" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter-square fa-1x" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-tumblr-square fa-1x" aria-hidden="true"></i></a>
		</p>
	</div>

</body>
</html>