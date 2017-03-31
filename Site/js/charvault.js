//Loads the characters from the database on 
//page load.
$(document).ready(function(){
    getChar();
});


function getChar(){
    $.get("GetChar.php?action=char", function(res){
        let pJSON = $.parseJSON(res);
        loadChar(pJSON);
    });
}

//Takes the arrays from getChar and packages it for 
//display on charvault.php
function loadChar(character){
    console.log(character);
    //Declare variables from the json returned from the db

    
    //Loops thorugh the array and template each result
    for(var i = 0; i<character.length; i++){
    let $container = $("<div>").attr('id', character[i].charId);
    let $charName = $("<a>").attr('href', 'creation.php').text(character[i].name);
    let $charImg = $("<img>").attr('src', "images/logosm.png");
    $container.append($charImg);
    $container.append($charName);

        $("#content").append($container);
    }//End for
}//End loadChar
