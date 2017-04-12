//Loads the characters from the database on 
//page load.
$(document).ready(function(){
    getChar();
});


function getChar(){
    $.get("GetChar.php?action=char", function(res){
        let pJSON = $.parseJSON(res);
        console.log(res);
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
        let img = character[i].charpic;
        console.log(img);
        let $container = $("<div>").attr('id', "image-container");
        let $charName = $("<a>").attr('href', 'creation.php').attr('class', "charLink").text(character[i].name).click(function(){
            $.post("GetChar.php?action=oneChar&id=" + charId, function(res){
                console.log(res);
            } );
        });
        let $charImg = $("<img>").attr('src', img);
        let $delChar = $("<a>").attr("href", "#").text("X").click(function(){
            $.get("GetChar.php?action=deleteVault&vaultcharid=" + charId, function(res){
                console.log(res);
                $($container).empty();
                getChar();
            });
        });
        $container.append($charImg);
        $container.append($charName);
        $container.append($delChar);

        $("#content").append($container);
    }//End for
}//End loadChar