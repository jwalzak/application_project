<?php
require("connect.php");
$conn->select_db("heroschema");

if(isset($_GET['action'])){
    if($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['action'] == 'char'){
        char($conn);
    }
}

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


?>