<?php
require_once("connect.php");
$conn->slect_db("heroschema");

class GetChar {

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

    function char(){
        $listArray = array();
        
        $query = "SELECT * FROM character_sheet";
        $rs = $conn->query($query);

        while($info = $rs->fetch_assoc()){
            //Get each character from the db
            array_push($listArray, $info);
        }//End while
    $rs->close();

    echo json_encode($listArray);


    }//End char();
}

?>