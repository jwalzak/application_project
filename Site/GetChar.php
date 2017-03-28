<?php
require_once("connect.php");
// $conn->slect_db("heroschema");

if(isset($_GET['action'])){
    if($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['action'] == 'char'){
        char($conn);
    }
}

    function char($conn){
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


?>