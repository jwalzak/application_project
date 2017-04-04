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
	}
	</style>
</head>

<body>
	<!-- content  -->
	<div id="content">
		<h1>Hero Summary</h1>
		
		<div class="row">
            <div class="col-xs-12 col-sm-4">
				<div id="charname">
				<?php 
					$characters = $conn->query("SELECT * FROM tblchar WHERE charid = 3;");
					while($row = $characters->fetch_assoc()) {
						echo "<h1>$row[name]</h1>";
					}
				?>
				</div>
				
				<div id="charpic">
												  
					<?php echo "<img src='charpics/char-id3.png'>"; ?>
				</div>
				
				<div id="print">
					<button type="button" class="button">Print PDF</button>
				</div>
			</div>
		
			<div class="col-xs-12 col-sm-8" id="charsummary">
			<?php 
				$characters = $conn->query("SELECT * FROM tblchar WHERE charid = 3;");
		
				//loop through the results of query to fill in character info 
				while($row = $characters->fetch_assoc()) {
					echo "<div class='row'>";
						echo "<div class='col-xs-12'>";
							echo "<p><h3>Age</h3>$row[age]</p>";
							echo "<p><h3>Gender</h3>$row[gender]</p>";
							echo "<p><h3>Height</h3>$row[height]</p>";
							echo "<p><h3>Weight</h3>$row[weight]</p>";
							echo "<p><h3>Race</h3>$row[race]</p>";
							echo "<p><h3>Language</h3></p>";
							echo "<p><h3>Class</h3>$row[class]</p>";
							echo "<p><h3>Alignment</h3></p>";
						echo "</div>";
						echo "<div class='col-xs-12'>";
							echo "<p><h3>Skills</h3></p>";
							echo "<p><h3>Spells</h3></p>";
							echo "<p><h3>Weapon Proficiencies</h3></p>";
							echo "<p><h3>Armour Proficiencies</h3></p>";
						echo "</div>";
					echo "</div>";
				}
			?>
			</div>
		</div>
	</div>
	
</body>
</html>