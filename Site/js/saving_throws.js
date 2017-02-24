//Dwarves -- Dwarven Resilience -- advantage on saving throws against poison
//Elves -- Fey Ancestry -- advantage on saving throws against charmed and magic can't put you to sleep
//Halfling --braves -- Advantage on saving throws against being frightened
//Human -- Stout Resilience -- Advantage on saving throws against poison damage
//

/**
 *Class Saving throws
 *-------------------
 *
 * Cleric Saving Throws
 *     - Wisdom
 *     - Charisma
 * Fighter Saving Throws
 *     - Strength
 *     - Constitution
 * Theif Saving Throws
 *     - Dexterity
 *     - Intelligence
 *     - At 15th level Wisdom
 * Wizard Saving Throws
 *     - Intelligence
 *     - Wisdom
 * 
 */

/**
 *Saves - Represents an attempt to resist a spell, trap, poison disease or similar thread
 *
 *Saving throw, roll a D20 + modifier.
 */
let result = 0;
let prof = 0;
let saveRoll = function(){
    let saveDie = 20;
    let result = dice(saveDie);
    if($('input:radio:checked').length > 0){
        prof = 2;
    }
    result = result + prof;
    document.getElementById('save').value = result;
}

//Classes
//There has got to be a better way to do this.
//On page laod jQuery will prevent the default action of the radio buttons based on character class.
//Saving throws are based on a 20 sided die
//Players can roll on each of the skills, but they get a bonus to two skill based on their class.
$(document).ready(function(){
    let saveClass = "cleric";
    if(saveClass == "theif"){
        $("#saveStr").click(function(e){
            e.preventDefault();
        });
        $("#saveChar").click(function(e){
            e.preventDefault();
        });
        $("#saveWis").click(function(e){
            e.preventDefault();
        });
        $("#saveCon").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveInt']").text("Intelligence ++");
        $("label[for='saveDex']").text("Dexterity ++");
        
    }//End if
    else if (saveClass == "wizard"){
        $("#saveStr").click(function(e){
            e.preventDefault();
        });
        $("#saveDex").click(function(e){
            e.preventDefault();
        });
        $("#saveChar").click(function(e){
            e.preventDefault();
        });
        $("#saveCon").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveInt']").text("Intelligence ++");
        $("label[for='saveWis']").text("Wisdom ++");

    }//end else if
    else if(saveClass == "fighter"){
        $("#saveChar").click(function(e){
            e.preventDefault();
        });
        $("#saveDex").click(function(e){
            e.preventDefault();
        });
        $("#saveInt").click(function(e){
            e.preventDefault();
        });
        $("#saveWis").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveCon']").text("Constitution ++");
        $("label[for='saveStr']").text("Strength ++");
        
    }//End else if
    else if(saveClass == "cleric"){
        $("#saveStr").click(function(e){
            e.preventDefault();
        });
        $("#saveCon").click(function(e){
            e.preventDefault();
        });
        $("#saveDex").click(function(e){
            e.preventDefault();
        });
        $("#saveInt").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveWis']").text("Wisdom ++");
        $("label[for='saveChar']").text("Charisma ++");
    }

//Save proficeiency



});