<?php
	require_once("GetChar.php");
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
	
	<script type="text/JavaScript" src="js/charvault.js"></script>
	<style>
	body {
		background: url("images/bg.png");
	}
	a {
		font-family: "Fira Sans Condensed", sans-serif;
		font-size: 14pt;			 
		font-weight: 700;
		color: #494c49;
	}
	a:hover {
		text-decoration: none;
	}
	</style> 
</head>

<body>
	<!-- CONTENT  -->
	<div id="content" style="text-align: center">
		<h1>Character Vault</h1>
		<p align="left">
			<?php if(isset($_SESSION['userId'])) {
				echo "Select a character to view their summary sheet.";
			} else { 
				echo "You must have a user account to access characters saved in the Vault.";
			}?>
		</p>
	</div>

</body>
</html>