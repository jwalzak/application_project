//Loads the characters from the database on 
//page load.
$(document).ready(function(){
    getChar();
});


function getChar(){
    $.get("GetChar.php&action=char", function(res){
        for(var i =0; i<res.length; i++){

        }//End for
    });
}