<?php
	require_once('connect.php');
	session_start();
	
	if(!isset($_SESSION['userId'])){
	$_SESSION['userId'] = "";
	$_SESSION['username'] = "";
	}
	$user = array();
	
	//if the session has started previously, skip to next page
	if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
		header("location: account.php");
	}
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$_SESSION['username'] = $_POST['username'];
	
		$username = $_SESSION['username'];
		$isUser = $conn->query("SELECT * FROM user_info WHERE user_name = '".$username."' LIMIT 1");
		

		if (isset($username) && $isUser->num_rows == 1) {
			//user already exists, so don't make another user entry
		
	$user = $isUser->fetch_assoc();
			$_SESSION['userId'] = $user['user_id'];
			header ("location: content.php");
		} 
	
	} //end server post method check
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hero Burger &#x2605; Made to Order!</title>

	<link rel="stylesheet" href="css/index.css"/>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed|Permanent+Marker|Crete+Round|Droid+Serif|Roboto">
</head>

<body>
	<!-- header  -->
	<div id="header">
	
		<!-- logo image -->
		<img src="images/logo1.png"/>
	
		<!-- sign in information -->
		<div id="signin">	
			<h2>Already a Member?</h2>
			Login with your username and password below:<br/>
			
			<form method="POST">
				<input type="text" class="textbox" name="username" placeholder="&nbsp;&nbsp;username" value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];} ?>"/>
				<input type="password" class="textbox" name="password" placeholder="&nbsp;&nbsp;password"/>
				
				<input type="submit" name="start" class="button" value="Go"/>
			</form>
			
			<p><br/><a href="account.php">Create an Account</a> or <a href="content.php">Continue without signing in</a></p>
		</div>
	</div>
</body>
</html>