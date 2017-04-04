<?php
require("connect.php");

$target_dir = "charpics/";
$acceptedExt = array('jpg', 'jpeg', 'gif', 'png', 'bmp');
$isValid = true;
$charphoto = (isset($_POST['charphoto']));

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if ($_FILES['charphoto']['error'] == 0 && $_FILES['charphoto']['size'] > 0) {
		$ext = strtolower(pathinfo($_FILES['charphoto']['name'], PATHINFO_EXTENSION));
		
		//validate that the file exists and is an accepted photo type
		if (!file_exists($_FILES['charphoto']['tmp_name'])) {
			echo "The file doesn't exist";
			$isValid = false;
		} else if (!in_array($ext, $acceptedExt)) {
			echo "That file type is not accepted";
			$isValid = false;
		}
	} else {
		print "Your image failed to upload";
		$isValid = false;
	}
	
	//move the file if validation passes
	if ($isValid) {
		chmod($_FILES['charphoto']['tmp_name'], 420);
		
		//make variable for randomly-generated file name
		$newName = $target_dir."characterImage".rand(1000,9999).".".$ext;
		$success = move_uploaded_file($_FILES['charphoto']['tmp_name'], $newName);
		
		if ($success) {
			$conn->query("INSERT INTO tblchar (charpic) VALUES ('$newName'");
		} else {
			echo "Your image failed to upload";
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="js/dice_roll.js"></script>
<script src="js/saving_throws.js"></script>
<script src="js/weapon_prof.js"></script>
<head>
    <meta charset="UTF-8">
    <title>HERO BURGER</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <select name="raceSelect" id="raceSelect">
            <option value="mtnDwarf">Mountain Dwarf</option>
            <option value="hillDwarf">Hill Dwarf</option>
            <option value="highElf">High Elf</option>
            <option value="woodElf">Wood Elf</option>
            <option value="lightfootHalfling">Lightfoot Halfling</option>
            <option value="stoutHalfling">Stout Halfling</option>
            <option value="Human">Human</option>
        </select>
        <br />
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
    
        <input type="radio" name="saveThrow" id="saveStr"><label for="saveStr">Strength</label><br/>
        <input type="radio" name="saveThrow" id="saveCon"><label for="saveCon">Constitution</label><br/>
        <input type="radio" name="saveThrow" id="saveDex"><label for="saveDex">Dexterity</label><br/>
        <input type="radio" name="saveThrow" id="saveInt"><label for="saveInt">Intelligence</label><br/>
        <input type="radio" name="saveThrow" id="saveWis"><label for="saveWis">Wisdom</label><br/>
        <input type="radio" name="saveThrow" id="saveChar"><label for="saveChar">Charisma</label><br/>

        <input type="text" name="save" id="save"><input type="button" value="Roll" onclick="saveRoll(this.id)">
  <fieldset>
        <div id="weaponList">
            <h3>Weapons</h3>
        </div>
    </fieldset>
	
	
	<div class="col-sm-6" id="upload-charimage">
		<p><br/></p><input type="file" name="charphoto" id="charphoto"/>
	</div>
	
	<p><br/><input type="submit" class="button" style="width: 230px;" value="Save Character"></p>
    </form>	
</body>
</html>