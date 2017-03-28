//Loads the characters from the database on 
//page load.
$(document).ready(function(){
    getChar();
});


function getChar(){
    $.get("GetChar.php?action=char", function(res){
        loadChar(res);
    });
}

//Takes the arrays from getChar and packages it for 
//display on charvault.php
function loadChar(character){
    console.log(character);
    //Declare variables from the json returned from the db

    var $heroClass = $("<div>").attr('class', "heroClass").attr('id', character[i].charid);

    //Loops thorugh the array and template each result
    for(var i = 0; i<character.length; i++){
    }//End for
}//End loadChar