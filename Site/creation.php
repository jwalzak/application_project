<?php
    session_start();
    require("connect.php");

	$races = array();
	$classes = array();
	$target_dir = "charpics/"; //where the uploaded images will go
	$acceptedExt = array('jpg', 'jpeg', 'gif', 'png', 'bmp'); //only accept these file types
	$isValid = true; //error array
	$charphoto = (isset($_POST['charphoto'])); //holds the image that has been uploaded																				

	if(!isset($_SESSION['currentCharId'])) {
		$_SESSION['currentCharId']="";
	}
    
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$userId = $_SESSION['userId'];
		$char = (object) [ 
			'name' => $_POST['charName'],
			'age' => $_POST['charAge'],
			'gender' => $_POST['gender'],
			'height' => $_POST['height'],
			'weight' => $_POST['weight'],
			'race' => str_replace('_', ' ', $_POST['raceSelect']),
			'class' => $_POST['classSelect'],
			'skills' => array(), 
			'spells' => array(), 
			'str' => $_POST['str'], 
			'dex' => $_POST['dex'], 
			'int' => $_POST['int'],
			'wis' => $_POST['wis'],
			'con' => $_POST['con'],
			'cha' => $_POST['cha'],
			'alignment' => $_POST['alignment'],
			'backstory' => $_POST['backstory'],
			'languages' => $_POST['languages']  
		];

		if(isset($_POST['Acrobatics'])) {
			$x = 'Acrobatics';
			$char->skills = array_push($char->skills, $x); 
		}
	
		$_SESSION['newChar'] = $char; 

		$saveQry = 'INSERT INTO tblChar (userId, name, age, gender, height, weight, race, class) VALUES ("' . $userId . '", "' . $char->name . '", "' . $char->age . '", "'. $char->gender .'","'. $char->height .'","'.$char->weight .'","'.$char->race .'","'.$char->class .'");';

		$conn->query($saveQry);
		$_SESSION['charId'] = $conn->insert_id; 
		echo '<pre>';
		print_r($char);
		echo '</pre>';
		
		//IMAGE UPLOADER STUFF
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
		} //image uploader stuff
	}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hero Burger &#x2605; Made to Order!</title>

	<!-- Google Fonts CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Galindo|Fira+Sans+Condensed|Frijole|Press+Start+2P|Crete+Round|Droid+Serif"/>
	<!-- Font Awesome Icons JS -->
	<script src="https://use.fontawesome.com/97f2d469d8.js"></script>	
	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<!-- jQuery library -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"
			integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			crossorigin="anonymous"></script>
	<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
			integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
			crossorigin="anonymous"></script>
	<!-- Latest compiled Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/creation.css"/>
	<!-- Custom Function JS -->
	<script src="js/dice_roll.js"></script>
    <script src="js/saving_throws.js"></script>
    <script src="js/hp_and_skills.js"></script>
	<script src="js/weapon_prof.js"></script>
    <script src="js/spells.js"></script>
	<script src="js/racebonuses.js"></script>

	<script>
	$( function() {
		$( ".align" ).checkboxradio({
			icon: false
		});
	} );
	</script>
	
	<style>
	body {
		background: url("images/bg.png");
		font-size: 14pt;		  
	}
	.dropdown {
		border: #83ae1e solid 3px;
		border-radius: 7px;
		background: #f1ffb7;
		padding: 8px 15px;
		width: 90%;
	}
	hr {
		border: 3px solid #83ae1e;
		width: 75%;
	}
	::-webkit-input-placeholder {
		color: #83ae1e;
	}
	.choosefile {
		border: #83ae1e solid 3px;
		border-radius: 7px;
		background: #f1ffb7;
		padding: 8px 15px;
		width: 90%;
	}
	.rollbutton {
		border: #83ae1e solid 3px;
		border-radius: 7px;
		padding: 3px 5px;
		font-family: "Fira Sans Condensed", sans-serif;
		font-weight: 700;
		text-transform: uppercase;
		font-size: 18px;
		color: #494c49;
		cursor: pointer;
		display: inline-block;
		background: #f1ffb7;
		background-image: linear-gradient(to bottom, #ffffff, #f1ffb7);
		transition: all 0.3s ease 0s;
		margin: 0 0 1% 0;
	}
	.rollbutton:hover {
		opacity: 0.75;
	}
	.textbox2 {
		border: #83ae1e solid 3px;
		border-radius: 7px;
		float: right;
		background: #f1ffb7;
		padding: 3px 15px;
		width: 50%;
		margin-right: 20px;
	}
	.align-rad, .align-rad:hover {
		font-family: "Fira Sans Condensed", sans-serif;
		font-weight: 700;
		font-size: 20px;
		color: #494c49;
		width: 100%;
	}		  
	</style>
</head>

<body>
	<!-- content  -->
	<section id="content" class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Hero Creation</h1>
            </div>
        </div>
     
		<form method="post" enctype="multipart/form-data">		
		<div class="row">
			<div class="col-xs-12" id="char-basics" style="height: 50px"></div>
		</div>
		
		<div class="row">
			<!-- BASIC CHARACTERISTICS -->					 
			<div class="col-sm-6" id="personal1">
				<p class="category">Name<br/>
				<input type="text" placeholder="character name" id="charName" name="charName" class="textbox" value="<?php if(isset($_SESSION['loadChar'][0]['name'])) {echo $_SESSION['loadChar'][0]['name'];}?>"></p>
				
				<p class="category">Age<br/>
				<input type="text" placeholder="age" name="charAge" class="textbox" value="<?php if(isset($_SESSION['loadChar'][0]['age'])) {echo $_SESSION['loadChar'][0]['age'];}?>"></p>
				
				<p class="category">Gender<br/>
				<select id="genderSelect" name="gender" class="dropdown">
					<option selected disabled> </option>
					<option value='female'<?php if(isset($_SESSION['loadChar'][0]['gender']) && $_SESSION['loadChar'][0]['gender'] == "female") echo ' selected'?>>Female</option>
					<option value='male' <?php if(isset($_SESSION['loadChar'][0]['gender']) && $_SESSION['loadChar'][0]['gender'] == "male") echo ' selected'?>>Male</option>
					<option value='other' <?php if(isset($_SESSION['loadChar'][0]['gender']) && $_SESSION['loadChar'][0]['gender'] == "other") echo ' selected'?>>Other</option>
				</select></p>
				
				<p class="category">Known Languages<br/>
                <select id="languages" class="dropdown">
					<option value='common'>Common</option>
					<option value='elven'>Elven</option>
					<option value='dwarven'>Dwarven</option>
					<option value='orcish'>Orcish</option>
					<option value='gnomish'>Gnomish</option>
                </select></p>
			</div><!--end row personal1-->

			<div class="col-sm-6" id="personal2 raceNclass">
				<p class="category">Height<br/>
				<input type='text' placeholder='height' name='height' class="textbox" value="<?php if(isset($_SESSION['loadChar'][0]['height'])) {echo $_SESSION['loadChar'][0]['height'];}?>"></p>
					
				<p class="category">Weight<br/>
				<input type='text' placeholder='weight' name='weight' class="textbox" value="<?php if(isset($_SESSION['loadChar'][0]['weight'])) {echo $_SESSION['loadChar'][0]['weight'];}?>"></p>
				
				<p class="category">Race<br/>
					<select name="raceSelect" id="raceSelect" class="dropdown">
					<option selected disabled> </option>
				<?php
				$qry = 'SELECT race from tblRace';
				if($result = $conn->query($qry)) {
					for ($i = 0; $i < $result->num_rows; $i++) { 
						$row = $result->fetch_assoc();
						$races['optionId'] = str_replace(' ', '_', $row['race']);
						$races['race'] = $row['race']; ?>
						<option value="<?php echo $races['optionId']; ?>"
						<?php 
								if($_SESSION['loadChar'][0]['race'] == $races['race']){
								echo ' selected';
								}
						?>>
							<?php echo $races['race']; }} ?>
						</option>
					</select>
				</p>
					
				<p class="category">Class<br/>
					<select id="slct1" name="classSelect" class="dropdown" onchange="populate(this.id,'slct2'), spells(this.id,'slct3')">
					<option selected disabled> </option>
				<?php
				$qry = 'SELECT class from tblclass';
				if($result = $conn->query($qry)) {
					for ($i = 0; $i < $result->num_rows; $i++) { 
						$row = $result->fetch_assoc();
						$classes['class'] = $row['class']; ?>
						<option value="<?php echo $classes['class'];?>" 
							<?php 
								if($_SESSION['loadChar'][0]['class'] == $classes['class']){
								echo ' selected';
								}
						?>>
							<?php echo $classes['class'];}} ?>
						</option>				
					</select>
				</p>
			</div><!--end row personal2-->	
		</div>
    	
		<div class="row">
			<div class="col-xs-12" id="char-skills" style="margin: 50px 0;"><hr/></div>
		</div>
		
		<div class="row">
			<!-- SKILLS -->
			<!-- Dynamically changes based on the class chosen -->
			<div class='col-sm-6'>
				<p class="category">Skills<br/>
				<p id="pText">Choose a Class to begin</p>
				<div id="slct2"></div>
			</div>
			
			<!-- SPELLS -->
			<!-- Dynamically changes based on the class chosen -->
			<div class='col-sm-6'>
				<p class="category">Spells<br/>
				<p id="spellText">Choose a Class to begin</p>
				<div id="slct3"></div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12" id="char-abilities" style="margin: 50px 0;"><hr/></div>
		</div>
		
		<div class="row">		
			<!-- ABILITIES: ROLLS -->				
			<div id="rolls" class="col-sm-6">
				<p class="category">Ability Scores</p>  
				<input value="Roll" type="button" class="rollbutton" onclick="diceRoll(this.id)" id="strBut"></input>
				<label>Strength</label>
				<input name='str' id="strInput" type="text" class="textbox2"><br/>

				<input value="Roll" type="button" class="rollbutton" class="button" onclick="diceRoll(this.id)" id="dexBut"></input>
				<label>Dexterity</label>
				<input name='dex' id="dexInput" type="text" class="textbox2"><br/>

				<input value="Roll" type="button" class="rollbutton" onclick="diceRoll(this.id)" id="conBut"></input>
				<label>Constitution</label>
				<input name='con' id="conInput" type="text" class="textbox2"><br/>
        
				<input value="Roll" type="button" class="rollbutton" onclick="diceRoll(this.id)" id="wisBut"></input>
				<label>Wisdom</label>
				<input name='wis' id="wisInput" type="text" class="textbox2"><br/>

				<input value="Roll" type="button" class="rollbutton" onclick="diceRoll(this.id)" id="intBut"></input>
				<label>Intelligence</label>
				<input name='int' id="intInput" type="text" class="textbox2"><br/>

				<input value="Roll" type="button" class="rollbutton" onclick="diceRoll(this.id)" id="chaBut"></input>
				<label>Charisma</label>
				<input name='char' id="chaInput" type="text" class="textbox2"><br/>
			</div>
		
			<!-- SAVING THROWS -->			 
			<div class='col-sm-6'>		
				<p class="category">Saving Throws</p>
				<label for="saveStr">Strength</label><br/>
				<label for="saveCon">Constitution</label><br/>
				<label for="saveDex">Dexterity</label><br/>
				<label for="saveInt">Intelligence</label><br/>
				<label for="saveWis">Wisdom</label><br/>
				<label for="saveCha">Charisma</label><br/>

				<p><input type="button" class="rollbutton" value="Roll" onclick="saveRoll(this.id)">
				<input type="text" name="save" id="save" class="textbox2" style="margin-left:10px; float: none;"></p>
			</div>
		</div><!-- end -->

		<div class="row">
			<div class="col-xs-12" id="char-profs" style="margin: 50px 0;"><hr/></div>
		</div>
			
		<div class='row'>				
			<!-- WEAPON PROFS -->			
			<div class='col-xs-6'>	
				<p class="category">Weapon Proficiencies</p>
				<div id='weaponList' class='col-xs-12'>
				</div>
			</div>
						
			<!-- ARMOUR PROFS -->			
			<div class='col-xs-6'>	
				<p class="category">Armour Proficiencies</p>
				<div id='armour-prof' class='col-xs-12'>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12" id="char-align" style="margin: 50px 0;"><hr/></div>
		</div>
		
		<div class='row'>				
			<!-- ALIGNMENT -->		 
			<div class='col-xs-12'>	
			<p class="category">Alignment</p>
			
			<div class='row'>
				<div class='col-xs-4'>
					<label for='lGood' class="align-rad">Lawful Good</label>
					<input class='align' type="radio" id='lGood' name="alignment" value="Lawful Good">
					<label for='nGood' class="align-rad">Neutral Good</label>
					<input class='align' type="radio" id='nGood' name="alignment" value="Neutral Good">
					<label for='cGood' class="align-rad">Chaotic Good</label>
					<input class='align' type="radio" id='cGood' name="alignment" value="Chaotic Good"> 
				</div>
					
				<div class='col-xs-4'>
					<label for='lNeutral' class="align-rad">Lawful Neutral</label>
					<input class='align' type="radio" id='lNeutral' name="alignment" value="Lawful Neutral">
					<label for='tNeutral' class="align-rad">True Neutral</label>
					<input class='align' type="radio" id='tNeutral' name="alignment" value="True Neutral">
					<label for='cNeutral' class="align-rad">Chaotic Neutral</label>
					<input class='align' type="radio" id='cNeutral' name="alignment" value="Chaotic Neutral"> 
				</div>
					
				<div class='col-xs-4'>
					<label for='lEvil' class="align-rad">Lawful Evil</label>
					<input class='align' type="radio" id='lEvil' name="alignment" value="Lawful Evil"> 
					<label for='nEvil' class="align-rad">Neutral Evil</label>
					<input class='align' type="radio" id='nEvil' name="alignment" value="Neutral Evil"> 
					<label for='cEvil' class="align-rad">Chaotic Evil</label>
					<input class='align' type="radio" id='cEvil' name="alignment" value="Chaotic Evil"> 
				</div>
			</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12" id="char-story" style="margin: 50px 0;"><hr/></div>
		</div>
		
		<div class='row'>				
			<!-- BACKSTORY -->
			<div class='col-xs-12 col-sm-6'>	
				<p class="category">Backstory</p>
				<textarea rows="8" cols="60" class="textbox" style="width: 95%;" name="backstory" placeholder="Here you can outline your character's unique backstory. Blah blah blah adventures, blah blah treasure, blah!"></textarea>
			</div>
			
			<!-- CHARACTER IMAGE UPLOADER -->
			<div class='col-xs-12 col-sm-6'>	
				<p class="category">Character Image</p>
				<div id="show-charimage">
					<img src="<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){echo $newName;}?>" width="200" height="240"/>
				</div>

				<div id="upload-charimage">
					<p><br/><input type="file" name="charphoto" id="charphoto" class="choosefile"/></p>
				</div>
			</div>
        </div>
		
		<div class="row">
			<div class="col-xs-12" id="char-image" style="margin: 50px 0;"><hr/></div>
		</div>
		
		<div class='row'>
			<!-- HIT POINTS -->	   
			<div class='col-sm-6' id='hpRoll'>
				<p class="category">Hit Point Calculator</p>
				<input type="button" id="setHitPoints" onclick="rollHitPoints()" value="Roll" class="rollbutton">
				<input type="text" id="hitPointText" class="textbox2" placeholder="hit points" style="width: 50%; float:none;">
			</div>

			<!-- LEVELING -->
			<div class='col-sm-6' id='levels'>
				<p class="category">Leveling</p>
				<input id='leveling' type="text" placeholder='a textbox for isaiah' name="leveling" class="textbox2" style="width: 90%; float: none;"></p>
			</div>
		</div>
		</form>
			
        <p><br/><input type="submit" class="button" style="width: 230px;" value="Save Character"></p>

</body>
</html>