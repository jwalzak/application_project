//Dwarves -- Dwarven Resilience -- advantage on saving throws against poison
//Elves -- Fey Ancestry -- advantage on saving throws against charmed and magic can't put you to sleep
//Halfling --braves -- Advantage on saving throws against being frightened
//Human -- Stout Resilience -- Advantage on saving throws against poison damage

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
 * Thief Saving Throws
 *     - Dexterity
 *     - Intelligence
 *     - At 15th level Wisdom
 * Wizard Saving Throws
 *     - Intelligence
 *     - Wisdom
 * 
 **/
 
/**
 *Saves - Represents an attempt to resist a spell, trap, poison disease or similar thread
 *
 *Saving throw, roll a D20 + modifier.
 **/
 
let saveClass = "";
let result = 0;
let prof = 0;
let classProf;

let saveRoll = function(){
    let saveDie = 20;
    let result = dice(saveDie);
    if($('input:radio[name=saveThrow]:checked').length > 0){
        prof = 2;
    }//End if
    result = result + prof;
    document.getElementById('save').value = result;
}//End saveRoll

//Classes
document.addEventListener("change", function() {
  let e = document.getElementById("slct1");
  saveClass = e.options[e.selectedIndex].value;
  classSaveThrow();
});

//When the class dropdown menu is changed the saving throw profs will be updated. At the bottom of the page.
function classSaveThrow() {
	$("label[for='saveCha']").text("Charisma");
	$("label[for='saveWis']").text("Wisdom");
	$("label[for='saveDex']").text("Dexterity");
	$("label[for='saveInt']").text("Intelligence");
	$("label[for='saveStr']").text("Strength");
	$("label[for='saveCon']").text("Constitution");

    if (saveClass == "Wizard"){
        $("#saveStr").click(function(e){
            e.preventDefault();
        });
        $("#saveDex").click(function(e){
            e.preventDefault();
        });
        $("#saveCha").click(function(e){
            e.preventDefault();
        });
        $("#saveCon").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveInt']").text("Intelligence ++");
        $("label[for='saveWis']").text("Wisdom ++");
    }//end else if
    else if(saveClass == "Fighter"){
        $("#saveCha").click(function(e){
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
        $("label[for='saveCon']").text("Strength ++");
    }//end else if
    else if(saveClass == "Cleric"){
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
        $("label[for='saveCha']").text("Charisma ++");
    }//end else if
    else if(saveClass == "Bard"){
       $("#saveInt").click(function(e){
            e.preventDefault();
        });
       $("#saveStr").click(function(e){
            e.preventDefault();
        });
       $("#saveWis").click(function(e){
            e.preventDefault();
        });
       $("#saveCon").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveDex']").text("Dexterity ++");
        $("label[for='saveCha']").text("Charisma ++");
    }//end else if
    else if(saveClass == "Druid"){
       $("#saveDex").click(function(e){
            e.preventDefault();
        });
       $("#saveStr").click(function(e){
            e.preventDefault();
        });
       $("#saveCha").click(function(e){
            e.preventDefault();
        });
       $("#saveCon").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveWis']").text("Wisdom ++");
        $("label[for='saveInt']").text("Intelligence ++");
    }//end else if
    else if(saveClass == "Monk"){
       $("#saveInt").click(function(e){
            e.preventDefault();
        });
       $("#saveCha").click(function(e){
            e.preventDefault();
        });
       $("#saveWis").click(function(e){
            e.preventDefault();
        });
       $("#saveCon").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveDex']").text("Dexterity ++");
        $("label[for='saveStr']").text("Strength ++");
    }//end else if
    else if(saveClass == "Paladin"){
       $("#saveInt").click(function(e){
            e.preventDefault();
        });
       $("#saveStr").click(function(e){
            e.preventDefault();
        });
       $("#saveDex").click(function(e){
            e.preventDefault();
        });
       $("#saveCon").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveWis']").text("Wisdom ++");
        $("label[for='saveCha']").text("Charisma ++");
    }//end else if
    else if(saveClass == "Ranger"){
       $("#saveCha").click(function(e){
            e.preventDefault();
        });
       $("#saveStr").click(function(e){
            e.preventDefault();
        });
       $("#saveWis").click(function(e){
            e.preventDefault();
        });
       $("#saveCon").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveDex']").text("Dexterity ++");
        $("label[for='saveInt']").text("Intelligence ++");
    }//end else if
    else if(saveClass == "Rogue"){
       $("#saveInt").click(function(e){
            e.preventDefault();
        });
       $("#saveStr").click(function(e){
            e.preventDefault();
        });
       $("#saveCha").click(function(e){
            e.preventDefault();
        });
       $("#saveCon").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveDex']").text("Dexterity ++");
        $("label[for='saveWis']").text("Wisdom ++");
    }//end else if
    else if(saveClass == "Sorcerer"){
       $("#saveInt").click(function(e){
            e.preventDefault();
        });
       $("#saveStr").click(function(e){
            e.preventDefault();
        });
       $("#saveWis").click(function(e){
            e.preventDefault();
        });
       $("#saveDex").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveCon']").text("Constitution ++");
        $("label[for='saveCha']").text("Charisma ++");
    }//end else if
    else if(saveClass == "Warlock"){
       $("#saveInt").click(function(e){
            e.preventDefault();
        });
       $("#saveStr").click(function(e){
            e.preventDefault();
        });
       $("#saveDex").click(function(e){
            e.preventDefault();
        });
       $("#saveCon").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveWis']").text("Wisdom ++");
        $("label[for='saveCha']").text("Charisma ++");
    }//end else if
      else if(saveClass == "Barbarian"){
       $("#saveInt").click(function(e){
            e.preventDefault();
        });
       $("#saveWis").click(function(e){
            e.preventDefault();
        });
       $("#saveDex").click(function(e){
            e.preventDefault();
        });
       $("#saveCha").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveStr']").text("Strength ++");
        $("label[for='saveCon']").text("Constitution ++");
    }//end else if
}//End classSaveThrow

//RACIAL BONUSES
//Saving throw checklist options populate based on class choice
//If you're a ___, then you can see ____
function raceBonuses() {
    if(raceSelect == "Mountain_Dwarf") {
        $("#saveStr").show();
		$("#saveCon").show();
    } else if(raceSelect == "Hill_Dwarf") {
        $("#saveCon").show();
		$("#saveWis").show();
    } else if(raceSelect == "High_Elf") {
        $("#saveDex").show();
		$("#saveInt").show();
    } else if(raceSelect == "Wood_Elf") {
        $("#saveDex").show();
		$("#saveWis").show();
    } else if(raceSelect == "Lightfoot_Halfling") {
        $("#saveDex").show();
		$("#saveCha").show();
    } else if(raceSelect == "Stout_Halfling") {
        $("#saveDex").show();
		$("#saveCon").show();
    } else if(raceSelect == "Human") {
        $("#saveStr").show();
		$("#saveCon").show();
		$("#saveDex").show();
		$("#saveInt").show();
		$("#saveWis").show();
		$("#saveCha").show();
    }
}

//On page load jQuery will prevent the default action of the radio buttons based on character class.
//Saving throws are based on a 20 sided die
//Players can roll on each of the skills, but they get a bonus to two skill based on their class.
$(document).ready(function(){
	$("saveStr").hide();
	$("saveCon").hide();
	$("saveDex").hide();
	$("saveInt").hide();
	$("saveWis").hide();
	$("saveCha").hide();
	
	raceBonuses();
	//classBonuses();
//Save proficiency
});