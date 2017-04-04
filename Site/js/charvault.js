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
    //Loops thorugh the array and template each result
    for(var i = 0; i<character.length; i++){
        let charId = character[i].charId;
        console.log(charId);
        let $container = $("<div>").attr('id', charId);
        let $charName = $("<a>").attr('href', '#').text(character[i].name).click(function(){
            $.post("GetChar.php?action=oneChar&id=" + charId, console.log("Loading Character") );
        });
        let $charImg = $("<img>").attr('src', "images/logosm.png");
        $container.append($charImg);
        $container.append($charName);

        $("#content").append($container);
    }//End for
}//End loadChar

