<?php
session_start();
require("connect.php");
$conn->select_db("heroschema");

if(isset($_GET['action'])){
    // header("Content-Type: application/json");
    if($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['action'] == 'char'){
        char($conn);
    }//End if

    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['action'] == 'oneChar'){
        oneChar($conn);
    }//End if

    if($_SERVER['REQUEST_METHOD'] && $_GET['action'] == 'delete'){
        deleteChar($conn);
    }//End if

    if($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['action'] == "deleteVault"){
        deleteVault($conn);
    }//End if
}//End outer if

    //Gets all of a single user's characters
    function char($connection){
        $listArray = array();
        $userId = "SELECT userid FROM user_info WHERE user_name=" . $_SESSION['userId'];
        $idNum = $connection->query($userId);

        $query = "SELECT * FROM tblchar WHERE userid= ". "'$idNum'";
        $rs = $connection->query($query);

        while($info = $rs->fetch_assoc()){
            //Get each character from the db
            array_push($listArray, $info);
        }//End while

    echo json_encode($listArray);
    $rs->close();
    }//End char();

    //Loads one character into the character creation page.
    function oneChar($connection){
        $listArray = array();
        $_SESSION["loadChar"] = array();
        $num = $_GET['id'];

        $query = "SELECT * FROM tblchar WHERE charid = " . "'$num'";

        $rs = $connection->query($query);
        while($info = $rs->fetch_assoc()){
            array_push($_SESSION["loadChar"], $info);
        }//End while
        
        // echo json_encode($listArray;
        $rs->close();

    }//End oneChar()

    //Deletes selected char.
    function deleteChar($connection){
        $charId = $_SESSION['loadChar'][0]['charId'];
        $query = "DELETE FROM tblchar WHERE charId =" . "'$charId'";
        $rs = $connection->query($query);
        $rs->close();
    }//End deleteChar();


     //Deletes selected char from charvault.php page
    function deleteVault($connection){
        $charId = (int)$_GET['vaultcharid'];
        $query = "DELETE FROM tblchar WHERE charId =" . "'$charId'";
        $rs = $connection->query($query);
        $r = array("fuken"=>"right", "you"=>"did", "it"=>"!");
        echo json_encode($r);
    }//End deleteVault();.

?>