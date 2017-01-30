<?php
	require_once("connect.php");
	require_once("navbar.php");
	session_start();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
			
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
			} 
			//validation for name field - an error will show if name is blank
			else if (empty($_SESSION['email']) && empty($_SESSION['emailconf']) 
				&& empty($_SESSION['username']) && empty($_SESSION['fname']) 
				&& empty($_SESSION['lname']) && empty($_SESSION['pword'])) {
				$error['invalid'] = "<font color=red>" . "**Field cannot be blank" . "</font color>";
			}
			//if both e-mail entries don't match
			else if ($_SESSION['email'] !== $_SESSION['emailconf']) {
				$error['match'] = "<font color=red>" . "**E-mails do not match" . "</font color>";
			}
		}
	} //end server post method check
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
	<h1>Account Info</h1>
	<p>With an account, you're able to save your <strong>Hero Burger</strong> creations for later use! Register below.</p>
	
	<form method="POST">
		<div id="userinfoleft" style="float:left;">
		<p><strong>E-mail</strong><br/>
			<input type="text" name="email" class="textbox" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; } ?>"/>
		<br/><?php if (isset($errors['invalid'])){ echo $errors['invalid']; } ?></p>	
		
		<p><strong>Confirm E-mail</strong><br/>
			<input type="text" name="emailconf" class="textbox" value="<?php if(isset($_SESSION['emailconf'])) { echo $_SESSION['emailconf']; } ?>"/>
		<br/><?php if (isset($errors['invalid'])){ echo $errors['invalid']; } ?></p>	
		<br/><?php if (isset($errors['match'])){ echo $errors['match']; } ?></p>
		
		<p><strong>Username</strong><br/>
			<input type="text" name="username" class="textbox" value="<?php if(isset($_SESSION['username'])) { echo $_SESSION['username']; } ?>"/>
		<br/><?php if (isset($errors['invalid'])){ echo $errors['invalid']; } ?></p>	
		
		<p><br/><input type="submit" class="button" value="Register" style="border: #79553b solid 3px; padding: 5px 14px 5px 14px; color: #ffffff; font-size: 18px; font-family: 'Crete Round', serif; background: #83ae1e;	cursor: pointer;"/></p>
		</div>
		
		<div id="userinforight" style="float:left; margin-left:4%;">
		<p><strong>First Name</strong><br/>
			<input type="text" name="fname" class="textbox" value="<?php if(isset($_SESSION['fname'])) { echo $_SESSION['fname']; } ?>"/>
		<br/><?php if (isset($errors['invalid'])){ echo $errors['invalid']; } ?></p>
		
		<p><strong>Last Name</strong><br/>
			<input type="text" name="lname" class="textbox" value="<?php if(isset($_SESSION['lname'])) { echo $_SESSION['lname']; } ?>"/>
		<br/><?php if (isset($errors['invalid'])){ echo $errors['invalid']; } ?></p>	
		
		<p><strong>Password</strong><br/>
			<input type="text" name="pword" class="textbox" value="<?php if(isset($_SESSION['pword'])) { echo $_SESSION['pword']; } ?>"/>
		<br/><?php if (isset($errors['invalid'])){ echo $errors['invalid']; } ?></p>
		</div>
	</form>

</div>
	
</body>
</html>