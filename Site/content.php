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
	</script>
	<style>nav li {margin: 0 20px;}</style>
</head>

<body>
	<!-- navigation -->
	<nav>
		<ul>
			<li><i class="fa fa-shield" aria-hidden="true"></i></li>
		
			<div class="dropdown">	
			<li><a href="creation.php" target="frame" id="link-creation">Creation</a>&nbsp;</li>
				<div class="dropdown-content">
					<a href="creation.php#char-basics" target="frame">Basics</a>
					<a href="creation.php#char-skills" target="frame">Spells & Skills</a>
					<a href="creation.php#char-abilities" target="frame">Ability Scores</a>
					<a href="creation.php#char-profs" target="frame">Weapons & Armour</a>
					<a href="creation.php#char-align" target="frame">Alignment</a>
					<a href="creation.php#char-story" target="frame">Backstory</a>			
					<a href="creation.php#char-image" target="frame">Character Image</a>
					<a href="summary.php" target="frame">Hero Summary</a>
				</div>
			</div>
		
			<li><a href="summary.php" target="frame" id="link-summary">Summary</a></li>
		
			<li><a href="charvault.php" target="frame" id="link-vault">Character Vault</a></li>
		
			<div class="dropdown">
				<li><a href="account.php" target="frame" id="link-account">Account</a>&nbsp;</li>
				<div class="dropdown-content">
					<a href="account.php" target="frame">Create</a>
					<a href="#" target="frame">Manage</a>
					<a href="#" target="frame">Logout</a>
				</div>
			</div>
		
			<li><i class="fa fa-shield" aria-hidden="true"></i></li>
		</ul>
	</nav>
	
	<!-- content -->
	<!-- links from the above navbar will load into the frame via jquery -->
	<iframe id="frame" name="frame" src="creation.php"></iframe>

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