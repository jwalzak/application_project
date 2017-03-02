<?php
	session_start();
	require("navbar.php");
	//require_once('Char.php');
	require("connect.php");

$races = array();
$classes = array();


	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
$char = (object) [ 
'name' => $_POST['charName'],
'age' => $_POST['charAge'],
'gender' => $_POST['gender'],
'height' => $_POST['height'],
'weight' => $_POST['weight'],
'race' => str_replace('_', ' ', $_POST['raceSelect']),
'class' => $_POST['classSelect']
];

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

  
    <script src="https://use.fontawesome.com/97f2d469d8.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed|Permanent+Marker|Crete+Round|Droid+Serif|Roboto" rel="stylesheet">

    	<script src="https://code.jquery.com/jquery-3.1.1.min.js"
			integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			crossorigin="anonymous"></script>
    

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




    

  <script
  src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


  	<link rel="stylesheet" href="css/subcontent.css"/>
    
    <script src="js/dice_roll.js"></script>
    <script src="js/saving_throws.js"></script>
	<script src="js/skills.js"></script>

<style>

.row {
border-bottom:1px solid grey;
	padding:1%;
}



.col-sm-3 {
border-right:1px solid grey;
}
#charName {
	width:100%;
}

fieldset {
	border:1px grey solid;
}

</style>

<script>
  $( function() {
    $( ".align" ).checkboxradio({
      icon: false
    });
  } );
  </script>

</head>

<body>






<!-- content  -->
<div id="content" class='container'>
    <h1>Hero Creation</h1>
     
    <form method="post">
        <p><h2>Character Bio</h2></p>
        
			<div class='row'>
			<div class='col-sm-3'>

			<input id='charName' type="text" placeholder='Character name' name="charName"><br>
			<input type='text' placeholder='Age' name='charAge'><br><br>
			Gender<br/>
			<input type="radio" name="gender" value="female"> Female<br>
			<input type="radio" name="gender" value="male"> Male <br>
			<input type="radio" name="gender" value="other"> Other <input type="text" name="otherGender"></p>
			</div>

			<div class='col-sm-3'>
            <input type='text' placeholder='height' name='height'><br><br>
            <input type='text' placeholder='weight' name='weight'>
            </div>
    		
    		<div class='col-sm-3'>   	
			
			<select name="raceSelect" id="raceSelect">
				<option selected disabled>Choose your Race</option>
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
			
			<br>
			<br/>

			<select id="slct1" name="classSelect" onchange="populate(this.id, 'slct2')">
					<option selected disabled>Choose your Class</option>
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
			</div>

			<div class='col-sm-3'>
			Skills
			<p id="pText">Choose a Class to begin</p>
			<div id="slct2"></div>
			</div>
			</div>

	<div class='row'>
					
				<div id="rolls" class="col-sm-6">
				
				<p>Ability Scores</p>  
				
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
			<p>Saving Throws</p>
			<input type="radio" name="saveThrow" id="saveStr"><label for="saveStr">Strength</label><br/>
			<input type="radio" name="saveThrow" id="saveCon"><label for="saveCon">Constitution</label><br/>
			<input type="radio" name="saveThrow" id="saveDex"><label for="saveDex">Dexterity</label><br/>
			<input type="radio" name="saveThrow" id="saveInt"><label for="saveInt">Intelligence</label><br/>
			<input type="radio" name="saveThrow" id="saveWis"><label for="saveWis">Wisdom</label><br/>
			<input type="radio" name="saveThrow" id="saveCha"><label for="saveCha">Charisma</label><br/>

			<p><input type="button" value="Roll" onclick="saveRoll(this.id)"><input type="text" name="save" id="save"></p>
		</div>
		</div>



	<div class='row'>				
		<div class='col-sm-7'>	
			<legend>Alignment</legend>
			
			<div class='row'>

				<div class='col-sm-4'>
					<label for='lGood'>Lawful Good</label>
					<input class='align' type="radio" id='lGood' name="alignment" value="Lawful Good">
					<label for='nGood'>Neutral Good</label>
					<input class='align' type="radio" id='nGood' name="alignment" value="Neutral Good"> <label for='cGood'>Chaotic Good</label>
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
			
		<div class='col-sm-5'>
	
				<legend>Character Backstory</legend>
				<textarea rows="6" cols="60" name="backstory" placeholder="Here you can outline your character's unique backstory. Blah blah blah adventures, blah blah treasure blah"></textarea>   
        </div>	
    
    </div>
			
		<div class='row'>
			<div class='col-sm-6'>
				Known Languages:
				<select id='languages'>
				<option value='common'>Common</option>
				<option value='elven'>Elven</option>
				<option value='dwarven'>Dwarven</option>
				<option value='orcish'>Orcish</option>
				<option value='gnomish'>Gnomish</option>
				</select>
			</div>
						
			<div class='col-sm-6'>
    			<input type="submit" value='Save Character'>
    		</div>

    	</div>

</form>
    
 <p align="right">
 <a href="#top"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>
 </p>
</div>

</body>
</html>