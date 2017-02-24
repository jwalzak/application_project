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


//Saving throws are a D20 roll
let saveDie = 20;
let rolledSave, savingThrow;
//Get the type of radio button clicked for a saving throw


//Classes
$(document).ready(function(){
    let saveClass = "wizard";
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
    }


});