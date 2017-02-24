<?php
session_start();
require("navbar.php");
require_once('Char.php');

// This array will be used to populate the race dropdown in the future
/*$raceArray = []; 
$raceArray[0] = 'mtnDwarf'; 
$raceArray[1] = 'hillDwarf';
$raceArray[2] = 'hightElf';
$raceArray[3] = 'woodElf';
$raceArray[4] = 'lightfootHalfling';
$raceArray[5] = 'stoutHalfling'; 
$raceArray[6] = ' Human'; 
*/

//create a new Character object
$newChar = new Character(); 

	if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['f_name']) && !empty($_POST['l_name']) && !empty($_POST['backstory'])) {

            $newChar->char_f_name = $_POST['f_name'];
	 $newChar->char_l_name = $_POST['l_name'];
            $newChar->char_race = $_POST['raceSelect'];
                    
                    if ($_POST['gender'] == 'other') {
                        $newChar->char_gender = $_POST['otherGender']; 
                    }
                    else {
                        $newChar->char_gender = $_POST['gender']; 
                    }

            $newChar->char_align = $_POST['alignment']; 
            $newChar->char_history = $_POST['backstory'];
            $newChar->strength = $_POST['str'];
            $newChar->dexterity = $_POST['dex'];
            $newChar->constitution = $_POST['con']; 
            $newChar->wisdom = $_POST['wis']; 
            $newChar->intelligence = $_POST['int']; 
            $newChar->charisma = $_POST['char']; 
            var_dump($newChar); 
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Hero Burger &#x2605; Made to Order!</title>

    <link rel="stylesheet" href="css/subcontent.css"/>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed|Permanent+Marker|Crete+Round|Droid+Serif|Roboto" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/97f2d469d8.js"></script>
    <script src="js/dice_roll.js"></script>
    <script src="js/saving_throws.js"></script>
</head>

<body>
<!-- navigation  -->

<!-- content  -->
<div id="content">
    <h1>Hero Creation</h1>
     
    <form method="post">
        <p><h2>Charaction Bio</h2></p>
        <fieldset style="margin-bottom:2px">
        <p>First Name:</p>
        <input type="text" name="f_name" value=''<?php echo 'first name' ?>" />
        <p>Last Name:</p>
        <input type="text" name="l_name">
        </fieldset>
        <fieldset style="margin-bottom:2px">
        <p>Race</p>
        <select name="raceSelect" id="raceSelect">
            <option value="mtnDwarf">Mountain Dwarf</option>
            <option value="hillDwarf">Hill Dwarf</option>
            <option value="highElf">High Elf</option>
            <option value="woodElf">Wood Elf</option>
            <option value="lightfootHalfling">Lightfoot Halfling</option>
            <option value="stoutHalfling">Stout Halfling</option>
            <option value="Human">Human</option>
        </select>
        <p>Class</p>
        <select>
            <option value="cleric">Cleric</option>
            <option value="fighter">Fighter</option>
            <option value="thief">Thief</option>
            <option value="wizard">Wizard</option>
        </select>

        <p>Gender</p>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="male"> Male <br>
        <input type="radio" name="gender" value="other"> Other <input type="text" name="otherGender" />        
</fieldset>

<fieldset style="margin-bottom:2px">
        <p>Alignment</p>
        <table>
        <tr>
        <td><input type="radio" name="alignment" value="Lawful Good"> </td>
        <td><input type="radio" name="alignment" value="Neutral Good"></td> 
        <td><input type="radio" name="alignment" value="Chaotic Good"> </td>
        <td><input type="radio" name="alignment" value="Lawful Neutral"></td>
        <td><input type="radio" name="alignment" value="True Neutral"></td>
        <td><input type="radio" name="alignment" value="Chaotic Neutral"> </td>
        <td><input type="radio" name="alignment" value="Neutral Evil"> </td>
        <td><input type="radio" name="alignment" value="Lawful Evil"> </td>
        <td><input type="radio" name="alignment" value="Chaotic Evil"> </td>
        </tr> 
        <tr>
        <td>Lawful<br>Good</td>
        <td>Neutral<br>Good</td>
        <td>Chaotic<br>Good</td>
        <td>Lawful<br>Neutral</td>
        <td>True<br>Neutral</td>
        <td>Chaotic<br>Neutral</td>
        <td>Neutral<br>Evil</td>
        <td>Lawful<br>Evil</td>
        <td>Chaotic<br>Evil</td>
        </tr>
        </table>
        
        <p>Character Backstory</p>
        <textarea rows="4" cols="50" name="backstory"></textarea>   
        </fieldset>
<fieldset style="margin-bottom:2px">
   
    <div id="rolls" class="rolls">

        <br/>
   
       <p>Attributes</p>  
        <input value="Roll" type="button" onclick="diceRoll(this.id)" id="strBut"></input>
        <label>Strength</label>
        <input name='str' id="strInput" type="text"><br>

        <input value="Roll" type="button" onclick="diceRoll(this.id)" id="dexBut"></input>
        <label>Dexterity</label>
        <input name='dex' id="dexInput" type="text"><br>

        <input value="Roll" type="button" onclick="diceRoll(this.id)" id="conBut"></input>
        <label>Constitution</label>
        <input name='con' id="conInput" type="text"><br>
        
        <input value="Roll" type="button" onclick="diceRoll(this.id)" id="wisBut"></input>
        <label>Wisdom</label>
        <input name='wis' id="wisInput" type="text"><br>

        <input value="Roll" type="button" onclick="diceRoll(this.id)" id="intBut"></input>
        <label>Intelligence</label>
        <input name='int' id="intInput" type="text"><br>

        <input value="Roll" type="button" onclick="diceRoll(this.id)" id="chaBut">    
        </input><label>Charisma</label>
        <input name='char' id="chaInput" type="text"><br>
        <input type="submit">
    </div>
    </fieldset>
    
    <!--Saving Throws-->
    <fieldset style="margin-bottom:2px">
     <p>Saving Throws</p>
        <input type="radio" name="saveThrow" id="strength"><label for="strength">Strength</label><br/>
        <input type="radio" name="saveThrow" id="constitution"><label for="constitution">Constitution</label><br/>
        <input type="radio" name="saveThrow" id="dexterity"><label for="dexterity">Dexterity</label><br/>
        <input type="radio" name="saveThrow" id="intelligence"><label for="intelligence">Intelligence</label><br/>
        <input type="radio" name="saveThrow" id="wisdom"><label for="wisdom">Wisdom</label><br/>
        <input type="radio" name="saveThrow" id="charisma"><label for="charisma">Charisma</label><br />

        <input type="text" name="save" id="save"><input type="button" value="Roll" onclick="saveRoll(this.id)">
    </fieldset>




    </form>
    
    <p align="right">
        <a href="#top"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
    </p>
</div>

</body>
</html>