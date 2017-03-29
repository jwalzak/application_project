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
			
	<script>
	$(function () {
		$("#link-creation").on("click", function () {
			$("#frame").load("creation.php");
		});
		$("#link-summary").on("click", function () {
			$("#frame").load("summary.php");
		});
		$("#link-vault").on("click", function () {
			$("#frame").load("charvault.php");
		});
		$("#link-account").on("click", function () {
			$("#frame").load("account.php");
		});
	});
	</script>
	<style>nav li {margin: 0 20px;}</style>
</head>

<body>
	<!-- navigation -->
	<nav>
		<ul>
			<li><i class="fa fa-shield" aria-hidden="true"></i></li>
		
			<div class="dropdown">	
			<li><a href="creation.php" class="targetlink" id="link-creation">Creation</a>&nbsp;</li>
				<div class="dropdown-content">
					<a href="#char-basics">Basics</a>
					<a href="#char-skills">Spells & Skills</a>
					<a href="#char-abilities">Ability Scores</a>
					<a href="#char-profs">Weapons & Armour</a>
					<a href="#char-align">Alignment</a>
					<a href="#char-story">Backstory</a>			
					<a href="#char-image">Character Image</a>
					<a href="summary.php">Hero Summary</a>
				</div>
			</div>
		
			<li><a href="summary.php" class="targetlink" id="link-summary">Summary</a></li>
		
			<li><a href="charvault.php" class="targetlink" id="link-vault">Character Vault</a></li>
		
			<div class="dropdown">
				<li><a href="account.php" class="targetlink" id="link-account">Account</a>&nbsp;</li>
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
	<!-- links from the above navbar will load into the frame via jquery -->
	<iframe id="frame" src="account.php"></iframe>

	<!-- footer has copyright info and social media links -->
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