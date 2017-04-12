<?php
	require_once('connect.php');
	session_start();
	$_SESSION['userid'] = "temp_user_id";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['username']) && isset($_POST['password'])) {
			$username = $_POST['username'];
			$isUser = $conn->query("SELECT * FROM user_info WHERE user_name = '".$username."' LIMIT 1");

			if ($isUser->num_rows == 1) {
				$username = $_SESSION['userId'];
				header ("location: content.php");
			}
		}
		$_SESSION['userId'] = $_POST['username'];
	} //end server post method check
	
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hero Burger &#x2605; Made to Order!</title>

	<link rel="stylesheet" href="css/index.css" media="screen"/>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed|Permanent+Marker|Crete+Round|Droid+Serif|Roboto">
	
	<style>
	@media screen and (max-width: 384px) {
		img {
			top: 100px;
		}	
		#signin {
			width: 90%;
		}
		.textbox {
			width: 80%;
			margin-top: 5px;
		}
		.button {
			margin-top: 10px;
		}
	}
	</style>
</head>

<body>
	<!-- main frame  -->
	<div id="main">
	
		<!-- logo image -->
		<img src="images/logo1.png"/>
	
		<!-- sign in information -->
		<div id="signin">	
			<h2>Already a Member?</h2>
			Login with your username and password below:<br/>
			
			<form method="POST">
				<input type="text" class="textbox" name="username" placeholder="&nbsp;&nbsp;username" value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];} ?>"/><br class="newline"/>
				<input type="password" class="textbox" name="password" placeholder="&nbsp;&nbsp;password"/>
				<br class="newline"/>
				<input type="submit" name="start" class="button" value="GO"/>
			</form>
			
			<p><br/><a href="content2.php">Create an Account</a> or <a href="content.php" onclick="function()">Continue without signing in</a></p>
		</div>
	</div>
</body>
</html>