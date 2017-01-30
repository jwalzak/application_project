<?php
session_start();
require_once('input_data.php');
if($_SERVER['REQUEST_MEHTOD'] == 'POST' && !empty($_POST['f_name']) && !empty($_POST['l_name']) && !empty($_POST['backstory'])){
    $SESSION['f_name'] = $_POST['f_name'];
    $SESSION['l_name'] = $_POST['l_name'];
    $SESSION['backstory'] = $POST['backstory'];
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
<!-- navigation  -->
<nav>
	<ul>
		<li><a href="account.php">Create an Account</a></li>
		<li><a href="charvault.php">Character Vault</a></li>
		<li><a href="creation.php">Hero Creation</a></li>
		<li><a href="summary.php">Hero Summary</a></li>
		<li><a href="about.php">About</a></li>
	</ul>
</nav>

<!-- content  -->
<div id="content">
	<h1>Hero Creation</h1>
	
	<form action="">
		<p>Let's get some peliminary information out of the way:</p>
        <p>Fist Name:</p>
        <input type="text" name="f_name">
        <p>Last Name:</p>
        <input type="text" name="l_name">
        <p>Character Backstory</p>
        <textarea rows="4" cols="50" name="backstory"></textarea>
        
		<input type="submit">
    </form>
	
	<p align="right">
		<a href="#top"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
	</p>
</div>

</body>
</html>