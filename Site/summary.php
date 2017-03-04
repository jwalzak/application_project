<?php
	session_start();
	require("navbar.php");
	require("connect.php");
	
	if (!isset($_SESSION)) {
		print "No characters available at this time.";
	}
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
<style>
#charname {
	background: #83ae1e;
	text-align: center;
	padding: 1px 0 1px 0;
	max-width: 360px;
	border-top-left-radius: 30px;
	border-top-right-radius: 30px;
}
#charname h1 {
	font-size: 32px;
	color: #ffffff;
}
#charpic {
	float: left;
}
#charpic img {
	border-bottom-left-radius: 30px;
	border-bottom-right-radius: 30px;
	border: 5px solid #83ae1e;
	max-width: 350px;
}
#charsummary {
	background: red;
	float: left;
	margin-left: 2%;
	padding: 30px;
	border-radius: 30px;
	width: 60%;
	height: 470px;
	background: linear-gradient(#83ae1e,transparent);
	margin-top: -90px;
	color: #ffffff;
}
#charsummary h2 {
	margin-bottom: -5px;
}
</style>

<!-- content  -->
<div id="content">
	<h1>Hero Summary</h1>
	
	<div id="charname">
		<?php 
			$characters = $conn->query("SELECT * FROM tblchar WHERE charid = 3;");
			while($row = $characters->fetch_assoc()) {
				echo "<h1>$row[name]</h1>";
			}
		?>
	</div>
	
	<div id="charpic">
		<!-- print "<img src='".$row['image']."'>"; -->
		<?php echo "<img src='charpics/char-id3.png'>"; ?>
	</div>
	
	<div id="charsummary">
		<?php 
			$characters = $conn->query("SELECT * FROM tblchar WHERE charid = 3;");
	
			//loop through the results of query to fill in character info 
			while($row = $characters->fetch_assoc()) {
		echo "<div style='float:left'>";
				echo "<p><h2>Age</h2>$row[age]</p>";
				echo "<p><h2>Gender</h2>$row[gender]</p>";
				echo "<p><h2>Height</h2>$row[height]</p>";
		echo "</div>";
		echo "<div style='float:left; margin-left:40px'>";
				echo "<p><h2>Weight</h2>$row[weight]</p>";
				echo "<p><h2>Race</h2>$row[race]</p>";
				echo "<p><h2>Class</h2>$row[class]</p>";
		echo "</div>";
			}
		?>
		
		<p align="right">
			<a href="#top"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
		</p>
	</div>
</div>

</body>
</html>