<?php




if (isset($_GET['action'])) {  

define("HOST", "localhost");
define("USER", "Groot");
define("PASSWORD", "Reganhop3");
define("DB", "heroschema");


 $conn = new mysqli(HOST, USER, PASSWORD, DB);

if($conn->connect_error){
    die('Could not connect ' . $conn->connect_error );
}





//are we listing or posting?

if ($_GET['action'] == 'skills' 
            && $_SERVER['REQUEST_METHOD'] == 'POST') {

        if(isset($_POST['class'])) {

            $qry = 'SELECT skills from tblClass where class = "' . $_POST['class'] . '";';
            
         if($result = $conn->query($qry)) {
        for ($i = 0; $i < $result->num_rows; $i++) {
            $row = $result->fetch_array();
            $data = array();
                  $data['skills'] = $row[$i]; 
            }}
            echo $data['skills']; 
        }}

if ($_GET['action'] == 'spells' 
            && $_SERVER['REQUEST_METHOD'] == 'POST') {

 if(isset($_POST['class'])) {

            $qry = 'SELECT spells from tblClass where class = "' . $_POST['class'] . '";';
            
         if($result = $conn->query($qry)) {
        for ($i = 0; $i < $result->num_rows; $i++) {
            $row = $result->fetch_array();
            $data = array();
                  $data['spells'] = $row[$i]; 
            }}
            echo $data['spells']; 
        }}


$conn->close(); 
} //end if GET
