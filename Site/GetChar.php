<?php
session_start();
require("connect.php");
$conn->select_db("heroschema");

if(isset($_GET['action'])){
    if($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['action'] == 'char'){
        char($conn);
    }//End if

    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['action'] == 'oneChar'){
        oneChar($conn);
    }//End if

    if($_SERVER['REQUEST_METHOD'] && $_GET['action'] == 'delete'){
        deleteChar($conn);
    }//End if
}//End outer if

    //Gets all of a single user's characters
    function char($connection){
        $listArray = array();
        $userId = $_SESSION['userId'];
        
        $query = "SELECT * FROM tblchar WHERE userId= ". $userId;
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
        
        echo json_encode($_SESSION);
        $rs->close();

    }//End oneChar()

    //Deletes selected char.
    function deleteChar($connection){
        $charId = $_SESSION['loadChar'][0]['charId'];
        $query = "DELETE FROM tblchar WHERE charId =" . "'$charId'";
        $rs = $connection->query($query);
        $rs->close();
    }//End deleteChar();.

?>