<?php
	require_once("connect.php");
	session_start();
	echo $_SESSION['userId'];

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		//if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
			
			//declare variables
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['emailconf'] = $_POST['emailconf'];
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['fname'] = $_POST['fname'];
			$_SESSION['lname'] = $_POST['lname'];
			$_SESSION['pword'] = $_POST['pword'];
			$errors = array();
			
			//the SQL queries only run if all fields have been filled out
			if (!empty($_SESSION['email']) && !empty($_SESSION['emailconf']) 
				&& !empty($_SESSION['username']) && !empty($_SESSION['fname']) 
				&& !empty($_SESSION['lname']) && !empty($_SESSION['pword'])) {
			
				//insert user info into database
				$conn->query("INSERT INTO user_info (user_name, first_name, last_name, email,
				password) VALUES ('".$_SESSION['username']."', '".$_SESSION['fname']."', 
				'".$_SESSION['lname']."', '".$_SESSION['email']."', '".$_SESSION['pword']."')");

				$_SESSION['userId'] = $conn->insert_id;
				
				$errors['success'] = "<font color=red>Your account has been created!<br/>You may login with your username, " . $_SESSION['username'] . " in the future to access your <strong>Hero Burger</strong> creations!</font color>";
			} 
			//validation for name field - an error will show if name is blank
			else if (empty($_SESSION['email']) || empty($_SESSION['emailconf']) 
				|| empty($_SESSION['username']) || empty($_SESSION['fname']) 
				|| empty($_SESSION['lname']) || empty($_SESSION['pword'])) {
				$errors['invalid'] = "<font color=red>" . "**All fields must be filled in" . "</font color>";
			}
			//if both e-mail entries don't match
			else if ($_SESSION['email'] !== $_SESSION['emailconf']) {
				$errors['match'] = "<font color=red>" . "**E-mails do not match" . "</font color>";
			}
		//}
	} //end server post method check
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
		<h1>Create an Account</h1>
	
		<form method="POST">
			<div id="userinfoleft" style="float:left;">
				<p class="category">First Name<br/>
				<input type="text" name="fname" class="textbox" placeholder="first name" value="<?php if(isset($_SESSION['fname'])) { echo $_SESSION['fname']; } ?>"/></p>
		
				<p class="category">Last Name<br/>
				<input type="text" name="lname" class="textbox" placeholder="last name" value="<?php if(isset($_SESSION['lname'])) { echo $_SESSION['lname']; } ?>"/></p>
				
				<p class="category">E-mail<br/>
				<input type="text" name="email" class="textbox" placeholder="e-mail" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; } ?>"/></p>	
		
				<p class="category">Confirm E-mail<br/>
				<input type="text" name="emailconf" class="textbox" placeholder="e-mail" value="<?php if(isset($_SESSION['emailconf'])) { echo $_SESSION['emailconf']; } ?>"/></p>
		
				<p class="category">Username<br/>
				<input type="text" name="username" class="textbox" placeholder="username" value="<?php if(isset($_SESSION['username'])) { echo $_SESSION['username']; } ?>"/></p>	
			
				<p class="category">Password<br/>
				<input type="password" name="pword" class="textbox" placeholder="password" value="<?php if(isset($_SESSION['pword'])) { echo $_SESSION['pword']; } ?>"/></p>
				
				<p><br/><input type="submit" class="button" value="Register"/></p>
			</div>
		
			<div id="userinforight" style="float:left; margin-left:4%;">
				<p>With an account, you're able to save your <strong>Hero Burger</strong> creations for later use! Register below.</p>
				
				<?php if (isset($errors['invalid'])){ echo $errors['invalid'] . "<br/>"; } ?>
				<?php if (isset($errors['match'])){ echo $errors['match']; } ?>
				<?php if (isset($errors['success'])){ echo $errors['success']; } ?>
			</div>
		</form>
	</div>
	
	<div>
		<img src="images/burg.gif" style="max-width:30%; float:right; padding: 0 4% 4% 0">
	</div>
	
	<script src="https://use.fontawesome.com/97f2d469d8.js"></script>
	
</body>
</html>