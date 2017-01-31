<?php
require("connect.php"); 
$conn->select_db("heroschema");
	
        class Character {

        //Initial property declaration
        private  $char_f_name;
        private  $char_l_name;
        private  $char_class;
        private  $char_race;
        private  $char_gender; 
        private  $char_history;
        private  $strength;
        private  $dexterity;
        private  $constitution;
        private  $wisdom;
        private  $intelligence;
        private  $charisma;

/*function __construct($char_f_name = "default", $char_l_name = "default" , $char_class = "default", $char_race = "default", $char_gender = "default", $char_history = "default", $strength = 0, $dexterity = 0, $constitution = 0, $wisdom = 0, $intelligence = 0, $charisma = 0) {
                        $this->char_f_name = $char_f_name; 
                        $this->char_l_name = $char_l_name; 
                        $this->char_class = $char_class; 
                        $this->char_race = $char_race; 
                        $this->char_gender = $char_gender; 
                        $this->char_history = $char_history; 
                        $this->strength = $strength; 
                        $this->dexterity = $dexterity; 
                        $this->constitution = $constitution; 
                        $this->wisdom = $wisdom; 
                        $this->intelligence = $intelligence; 
                        $this->charisma = $charisma; 
        }
*/

public function getCharF() {
        return $char_f_name; 
        echo $char_f_name; 
        }

public function setCharF($char_f_name) {
                $this->char_f_name = $char_f_name; 
        }

public function setCharL($char_l_name) {
                $this->char_l_name = $char_l_name; 
        }
public function getCharL() {
                return $char_l_name; 
        }
public function setCharClass($char_class) {
                $this->char_class= $char_class; 
        }
public function getCharClass() {
                return $char_class; 
        }
public function setCharRace($char_race) {
                $this->char_race = $char_race; 
        }
public function getCharRace(){
        return $char_race; 
}        
public function settCharGender($char_gender ) {
                $this->char_gender= $char_gender ;
        }
public function setCharHistory($char_history) {
                $this->char_history = $char_history; 
        }

public function getCharHistory(){
        return $charHistory; 
}

public function setStrength($strength) {
                $this->strength = $strength; 
        }
public function setCharDex($dexterity) {
                $this->dexterity = $dexterity;  
        }
public function setChaConst() {
                $this->constitution = $constitution; 
        }
public function setCharWis() {
                $this->wisdom = $wisdom; 
        }
public function setCharInt() {
                $this->intelligence= $intelligence; 
        }
public function setCharChar() {
                $this->charisma= $charisma; 
        }

	
public function saveCharacter($char_f_name)
{
 global $conn; 

 $query = sprintf("INSERT INTO character_sheet (charname_l) VALUES ('%s')" . $char_l_name);  

$conn->query($query); 

var_dump($conn);
}
}
 
?>