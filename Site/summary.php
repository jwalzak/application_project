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
			
			<?php 
				$characters = $conn->query("SELECT * FROM tblchar WHERE charid = 3;");
		
				//loop through the results of query to fill in character info 
				while($row = $characters->fetch_assoc()) {
					echo "<div class='col-sm-8' style='float:right'>";
						echo "<div class='col-xs-12 sum-div'><p><h3>Age</h3>$row[age]</p></div>";
						echo "<div class='col-xs-12 sum-div'><p><h3>Gender</h3>$row[gender]</p></div>";
						echo "<div class='col-xs-12 sum-div'><p><h3>Height</h3>$row[height]</p></div>";
						echo "<div class='col-xs-12 sum-div'><p><h3>Weight</h3>$row[weight]</p></div>";
						echo "<div class='col-xs-12 sum-div'><p><h3>Race</h3>$row[race]</p></div>";
						echo "<div class='col-xs-12 sum-div'><p><h3>Languages</h3></p></div>";
						echo "<div class='col-xs-12 sum-div'><p><h3>Class</h3>$row[class]</p></div>";
						echo "<div class='col-xs-12 sum-div'><p><h3>Alignment</h3></p></div>";
						echo "<div class='col-xs-12 sum-div'><p><h3>Background</h3>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p></div>";
						echo "<div class='col-xs-12 sum-div'><p><h3>Skills</h3></p></div>";
						echo "<div class='col-xs-12 sum-div'><p><h3>Spells</h3></p></div>";
						echo "<div class='col-xs-12 sum-div'><p><h3>Weapon Proficiencies</h3></p></div>";
						echo "<div class='col-xs-12 sum-div'><p><h3>Armour Proficiencies</h3></p></div>";
					echo "</div>";
				}
			?>
			
			<div class="col-xs-12" style="text-align:center;">
				<img src="images/logo2.png" class="sum-logo"/>
			</div>
		</div>
	</div>
	
</body>
</html>