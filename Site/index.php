<?php
	//require_once("connect.php");
	session_start();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$_SESSION['username'] = $_POST['username'];
		
		if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
			
			header ("location: content.php");
		} else {	
			//if no e-mail is entered, make 'em enter one!
			echo "**Please sign in or create an account";
		}
	} //end server post method check
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hero Burger &#x2605; Made to Order!</title>

	<link rel="stylesheet" href="css/index.css"/>
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed|Permanent+Marker|Crete+Round|Droid+Serif|Roboto" rel="stylesheet">
	<script src="https://use.fontawesome.com/97f2d469d8.js"></script>
</head>

<body>
	<!-- header  -->
	<div id="header">
	
		<!-- logo image -->
		<img src="images/logo1.png"/>
	
		<!-- sign in information -->
		<div id="signin">	
			<h2>Already a Member?</h2>
			Login with your username below:<br/>
			
			<form method="POST">
				<input type="text" class="textbox" name="username" placeholder="&nbsp;&nbsp;username" value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];} ?>"/> 
				
				<input type="submit" name="start" class="button" value="Go"/>
			</form>
			
			<p><br/><a href="account.php">Create an Account</a> or <a href="content.php">Continue without signing in</a></p>
		</div>
	</div>
</body>
</html>