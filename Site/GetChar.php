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
}//End outer if


    function char($connection){
        $listArray = array();
        
        $query = "SELECT * FROM tblchar";
        $rs = $connection->query($query);

        while($info = $rs->fetch_assoc()){
            //Get each character from the db
            array_push($listArray, $info);
        }//End while
    $rs->close();

    echo json_encode($listArray);
    }//End char();

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

    }//End oneChar()


?>