<?php
session_start();
require_once("navbar.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hero Burger &#x2605; Made to Order!</title>

	<link rel="stylesheet" href="css/subcontent.css"/>
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed|Permanent+Marker|Crete+Round|Droid+Serif|Roboto" rel="stylesheet">
	<script src="https://use.fontawesome.com/97f2d469d8.js"></script>
</head>

<body>
<!-- navigation  -->

<!-- content  -->
<div id="content">
	<h1>Hero Summary</h1>
	<p><?php echo "$charName"; ?></p>  
	
	<?php 
		while ($row = $allCharacters->fetch_assoc()) {
			echo '<option name="option" style="border:#ffffff solid 6px;" value="'.$row['charImage'].'">'.'<br/>'.$row['charName'].'</option>';
		}
	?>
	
	<p align="right">
		<a href="#top"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
	</p>
</div>

</body>
</html>