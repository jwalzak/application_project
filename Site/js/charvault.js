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
    let $charName = $("<a>").attr('href', '#').text(character[i].name).click(fillForm(character[i].charid));
    let $charImg = $("<img>").attr('src', "images/logosm.png");
    $container.append($charImg);
    $container.append($charName);

        $("#content").append($container);
    }//End for
}//End loadChar


function getOneChar(characterID){
    $.post("GetChar.php?action=oneChar&id=" + characterID, $(this).serialize(), function(res){
        console.log(res);
    });
}//End getOneChar();

function fillForm(char, e){
    getOneChar(char);
    console.log("I am in fillForm");
}//End fillForm()
