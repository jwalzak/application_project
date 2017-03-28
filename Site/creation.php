<?php
    session_start();
    require("connect.php");

	$races = array();
	$classes = array();

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
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hero Burger &#x2605; Made to Order!</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Galindo|Fira+Sans+Condensed|Frijole|Press+Start+2P|Crete+Round|Droid+Serif">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/creation.css"/>
	
	<script src="https://use.fontawesome.com/97f2d469d8.js"></script>	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"
			integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
			integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
			crossorigin="anonymous"></script>
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
	html {
		overflow-x: hidden;
	}
	body {
		background: url("images/bg.png");
	}
	#genderSelect {
		width:45%;
		margin-left:2%;
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
     
		<form method="post">		
		<div class="row">
			<div class="col-xs-12" id="char-bio" style="height: 50px"></div>
		</div>
		
		<div class="row">
			<div class="col-sm-6" id="personal1">
				<p class="category">Name<br/>
				<input id='charName' type="text" placeholder='character name' name="charName"></p>
				
				<p class="category">Age<br/>
				<input type='text' placeholder='age' name='charAge' class="textbox"></p>
				
				<p class="category">Gender</p>
				<select name='gender' id='genderSelect'>
					<option selected disabled> </option>
					<option value='female'>Female</option>
					<option value='male'>Male</option>
					<option value='other'>Other</option>
				</select></p>
				
				<p class="category">Known Languages<br/>
                <select id='languages'>
					<option value='common'>Common</option>
					<option value='elven'>Elven</option>
					<option value='dwarven'>Dwarven</option>
					<option value='orcish'>Orcish</option>
					<option value='gnomish'>Gnomish</option>
                </select></p>
			</div><!--end row personal1-->

			<div class="col-sm-6" id="personal2 raceNclass">
				<p class="category">Height<br/>
				<input type='text' placeholder='height' name='height'></p>
					
				<p class="category">Weight<br/>
						<input type='text' placeholder='weight' name='weight'></p>
				
				<p class="category">Race<br/>
					<select name="raceSelect" id="raceSelect">
					<option selected disabled> </option>
				<?php
				$qry = 'SELECT race from tblRace';
				if($result = $conn->query($qry)) {
					for ($i = 0; $i < $result->num_rows; $i++) { 
						$row = $result->fetch_assoc();
						$races['optionId'] = str_replace(' ', '_', $row['race']);
						$races['race'] = $row['race']; ?>
						<option value="<?php echo $races['optionId']; ?>">
							<?php echo $races['race']; }} ?>
						</option>
					</select>
				</p>
					
				<p class="category">Class<br/>
					<select id="slct1" name="classSelect" onchange="populate(this.id,'slct2'), spells(this.id,'slct3')">
					<option selected disabled> </option>
				<?php
				$qry = 'SELECT class from tblclass';
				if($result = $conn->query($qry)) {
					for ($i = 0; $i < $result->num_rows; $i++) { 
						$row = $result->fetch_assoc();
						$classes['class'] = $row['class']; ?>
						<option value="<?php echo $classes['class']; ?>">
							<?php echo $classes['class']; }} ?>
						</option>				
					</select>
				</p>
			</div><!--end row personal2-->	
		</div>
    	
		<div class="row">
			<div class="col-xs-12" id="char-skills"></div>
			<hr style="border:1px solid red"/>
		</div>
		
		<div class="row">
			<div class='col-sm-6'>
				<p class="category">Skills<br/>
				<p id="pText">Choose a Class to begin</p>
				<div id="slct2"></div>
			</div>
			
			<div class='col-sm-6'>
				<p class="category">Spells<br/>
				<p id="spellText">Choose a Class to begin</p>
				<div id="slct3"></div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12" id="char-rolls"></div>
			<hr style="border:1px solid red"/>
		</div>
		
		<div class="row">		
			<div id="rolls" class="col-sm-6">
				<p class="category">Ability Scores</p>  
				<input value="Roll" type="button" onclick="diceRoll(this.id)" id="strBut"></input>
				<label>Strength</label>
				<input name='str' id="strInput" type="text"><br/>

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

				<input value="Roll" type="button" onclick="diceRoll(this.id)" id="chaBut"></input>
				<label>Charisma</label>
				<input name='char' id="chaInput" type="text"><br>
			</div>
		
			<div class='col-sm-6'>		
				<p class="category">Saving Throws</p>
				<label for="saveStr">Strength</label><br/>
				<label for="saveCon">Constitution</label><br/>
				<label for="saveDex">Dexterity</label><br/>
				<label for="saveInt">Intelligence</label><br/>
				<label for="saveWis">Wisdom</label><br/>
				<label for="saveCha">Charisma</label><br/>

				<p><input type="button" value="Roll" onclick="saveRoll(this.id)"><input type="text" name="save" id="save"></p>
			</div>
		</div><!-- end -->

		<div class="row">
			<div class="col-xs-12" id="char-rolls"></div>
			<hr style="border:1px solid red"/>
		</div>
		
		<div class='row' id='story'>				
			<div class='col-sm-7'>	
				<legend>Alignment</legend>
			
				<div class='row' id='alignment'>
					<div class='col-sm-4'>
						<label for='lGood'>Lawful Good</label>
						<input class='align' type="radio" id='lGood' name="alignment" value="Lawful Good">
						<label for='nGood'>Neutral Good</label>
						<input class='align' type="radio" id='nGood' name="alignment" value="Neutral Good">
						<label for='cGood'>Chaotic Good</label>
						<input class='align' type="radio" id='cGood' name="alignment" value="Chaotic Good"> 
					</div>
					
					<div class='col-sm-4'>
						<label for='lNeutral'>Lawful Neutral</label>
						<input class='align' type="radio" id='lNeutral' name="alignment" value="Lawful Neutral">
						<label for='tNeutral'>True Neutral</label>
						<input class='align' type="radio" id='tNeutral' name="alignment" value="True Neutral">
						<label for='cNeutral'>Chaotic Neutral</label>
						<input class='align' type="radio" id='cNeutral' name="alignment" value="Chaotic Neutral"> 
					</div>
					
					<div class='col-sm-4'>
						<label for='nEvil'>Neutral Evil</label>
						<input class='align' type="radio" id='nEvil' name="alignment" value="Neutral Evil"> 
						<label for='lEvil'>Lawful Evil</label>
						<input class='align' type="radio" id='lEvil' name="alignment" value="Lawful Evil"> 
						<label for='cEvil'>Chaotic Evil</label>
						<input class='align' type="radio" id='cEvil' name="alignment" value="Chaotic Evil"> 
					</div>
				</div>
			</div>
		</div> <!-- end story-->
			
		<div class='row'>				
			<div class='col-xs-12'>	
				<p class="category">Weapon Proficiencies</p>
				<div id='weaponList' class='col-xs-12'>
				</div>
			</div>
		</div>

		<div class='row'>				
			<div class='col-xs-12'>	
				<p class="category">Armour Proficiencies</p>
				<div id='armour-prof' class='col-xs-12'>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12" id="char-alignment"></div>
			<hr style="border:1px solid red"/>
		</div>
		
		<div class='row'>				
			<div class='col-xs-12'>	
			<p class="category">Alignment</p>
			
			<div class='row'>
				<div class='col-xs-3'>
					<label for='lGood'>Lawful Good</label>
					<input class='align' type="radio" id='lGood' name="alignment" value="Lawful Good">
					<label for='nGood'>Neutral Good</label>
					<input class='align' type="radio" id='nGood' name="alignment" value="Neutral Good">
					<label for='cGood'>Chaotic Good</label>
					<input class='align' type="radio" id='cGood' name="alignment" value="Chaotic Good"> 
				</div>
					
				<div class='col-xs-3'>
					<label for='lNeutral'>Lawful Neutral</label>
					<input class='align' type="radio" id='lNeutral' name="alignment" value="Lawful Neutral">
					<label for='tNeutral'>True Neutral</label>
					<input class='align' type="radio" id='tNeutral' name="alignment" value="True Neutral">
					<label for='cNeutral'>Chaotic Neutral</label>
					<input class='align' type="radio" id='cNeutral' name="alignment" value="Chaotic Neutral"> 
				</div>
					
				<div class='col-xs-3'>
					<label for='nEvil'>Neutral Evil</label>
					<input class='align' type="radio" id='nEvil' name="alignment" value="Neutral Evil"> 
					<label for='lEvil'>Lawful Evil</label>
					<input class='align' type="radio" id='lEvil' name="alignment" value="Lawful Evil"> 
					<label for='cEvil'>Chaotic Evil</label>
					<input class='align' type="radio" id='cEvil' name="alignment" value="Chaotic Evil"> 
				</div>
			</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12" id="char-story"></div>
			<hr style="border:1px solid red"/>
		</div>
		
		<div class='row'>				
			<div class='col-xs-12'>	
				<p class="category">Backstory</p>
				<textarea rows="6" cols="60" name="backstory" placeholder="Here you can outline your character's unique backstory. Blah blah blah adventures, blah blah treasure blah"></textarea>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12" id="char-image"></div>
			<hr style="border:1px solid red"/>
		</div>

		<div class="row">				
			<div class='col-xs-12'>	
				<p class="category">Character Image</p>
				<div class="col-sm-6" id="show-charimage"></div>

				<div class="col-sm-6" id="upload-charimage">
					<input type="file" name="charphoto" accept="image/*" class="choosefile"/>
				</div>
			</div>
        </div>
		
		<div class="row">
			<div class="col-xs-12"></div>
			<hr style="border:1px solid red"/>
		</div>
		
		<div class='row'>
			<div class='col-sm-6' id='hpRoll'>
				<p class="category">Hit Point Calculator</p>
				<input type="button" id="setHitPoints" onclick="rollHitPoints()" value="Roll HP">
				<input type="text" id="hitPointText">
			</div>

			<div class='col-sm-6' id='levels'>
				<p class="category">Leveling</p>
			</div>
		</div>
		</form>
			
        <input type="submit" class="button" style="width: 230px;" value="Save Character">

</body>
</html>