<?php
session_start();
require("navbar.php");
require_once('input_data.php');
require_once('character.php');

	if($_SERVER['REQUEST_MEHTOD'] == 'POST' && !empty($_POST['f_name']) && !empty($_POST['l_name']) && !empty($_POST['backstory'])) {
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
    <script src="js/dice_roll.js"></script>
</head>

<body>
<!-- navigation  -->

<!-- content  -->
<div id="content">
    <h1>Hero Creation</h1>
    
    <form method="post">
        <p>Let's get some preliminary information out of the way:</p>
        <p>First Name:</p>
        <input type="text" name="f_name">
        <p>Last Name:</p>
        <input type="text" name="l_name">
        <p>Race</p>
        <select id="raceSelect">
            <option value="Dwarf">Dwarf</option>
            <option value="Elf">Elf</option>
            <option value="Halfling">Halfling</option>
            <option value="Halfling">Halfling</option>
            <option value="Human">Human</option>
        </select>
        <p>Character Backstory</p>
        <textarea rows="4" cols="50" name="backstory"></textarea>   
    <div id="rolls" class="rolls">
        <br/>
        <input value="Roll" type="button" onclick="diceRoll(this.id)" id="strBut"></input>
        <label>Strength</label>
        <input id="strInput" type="text"><br>

        <input value="Roll" type="button" onclick="diceRoll(this.id)" id="dexBut"></input>
        <label>Dexterity</label>
        <input id="dexInput" type="text"><br>

        <input value="Roll" type="button" onclick="diceRoll(this.id)" id="conBut"></input>
        <label>Constitution</label>
        <input id="conInput" type="text"><br>
        
        <input value="Roll" type="button" onclick="diceRoll(this.id)" id="wisBut"></input>
        <label>Wisdom</label>
        <input id="wisInput" type="text"><br>

        <input value="Roll" type="button" onclick="diceRoll(this.id)" id="intBut"></input>
        <label>Intelligence</label>
        <input id="intInput" type="text"><br>

        <input value="Roll" type="button" onclick="diceRoll(this.id)" id="chaBut">    
        </input><label>Charisma</label>
        <input id="chaInput" type="text"><br>
        <input type="submit">
    </div>
    </form>
    
    <p align="right">
        <a href="#top"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
    </p>
</div>

</body>
</html>