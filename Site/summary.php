<?php
	session_start();
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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Galindo|Fira+Sans+Condensed|Frijole|Press+Start+2P|Crete+Round|Droid+Serif">
	
	<script src="https://use.fontawesome.com/97f2d469d8.js"></script>	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"
			integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
			integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
			crossorigin="anonymous"></script>
</head>

<body>
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
		</div>
	</div>

</body>
</html>