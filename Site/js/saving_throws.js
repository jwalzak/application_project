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
    //Will have to make differnt saves for each classes prof.
    document.getElementById('save').value = result;
}//End saveRoll

////////////
//Classes //
////////////

//This function will trigger when the dropdown menu for classes is changed.
document.addEventListener("change", function() {
  let e = document.getElementById("slct1");
  saveClass = e.options[e.selectedIndex].value;
  classSaveThrow();
});

//When the class dropdown menu is changed the saving throw profs will be updated. At the bottom of the page.
function classSaveThrow() {
    //Reset the text values for each saving throw label.
	$("label[for='saveCha']").text("Charisma");
	$("label[for='saveWis']").text("Wisdom");
	$("label[for='saveDex']").text("Dexterity");
	$("label[for='saveInt']").text("Intelligence");
	$("label[for='saveStr']").text("Strength");
	$("label[for='saveCon']").text("Constitution");

    //Change the display of each classes saving throw proficiency.
    //A ++ beside the name represents proficiency.
    if (saveClass == "Wizard"){
        $("label[for='saveInt']").text("Intelligence ++");
        $("label[for='saveWis']").text("Wisdom ++");
        weaponProf(wizardProf);
    }//end else if
    else if(saveClass == "Fighter"){
        $("label[for='saveCon']").text("Constitution ++");
        $("label[for='saveStr']").text("Strength ++");
        weaponProf(fighterProf);
    }//end else if
    else if(saveClass == "Cleric"){
        $("label[for='saveWis']").text("Wisdom ++");
        $("label[for='saveCha']").text("Charisma ++");
        weaponProf(clericProf);
    }//end else if
    else if(saveClass == "Bard"){
        $("label[for='saveDex']").text("Dexterity ++");
        $("label[for='saveCha']").text("Charisma ++");
        weaponProf(bardProf);
    }//end else if
    else if(saveClass == "Druid"){
        $("label[for='saveWis']").text("Wisdom ++");
        $("label[for='saveInt']").text("Intelligence ++");
        weaponProf(druidProf);
    }//end else if
    else if(saveClass == "Monk"){
        $("label[for='saveDex']").text("Dexterity ++");
        $("label[for='saveStr']").text("Strength ++");
        weaponProf(monkProf);
    }//end else if
    else if(saveClass == "Paladin"){
        $("label[for='saveWis']").text("Wisdom ++");
        $("label[for='saveCha']").text("Charisma ++");
        weaponProf(paladinProf);
    }//end else if
    else if(saveClass == "Ranger"){
        $("label[for='saveDex']").text("Dexterity ++");
        $("label[for='saveInt']").text("Intelligence ++");
        weaponProf(rangerProf);
    }//end else if
    else if(saveClass == "Rogue"){
        $("label[for='saveDex']").text("Dexterity ++");
        $("label[for='saveWis']").text("Wisdom ++");
        weaponProf(rogueProf);
    }//end else if
    else if(saveClass == "Sorcerer"){
        $("label[for='saveCon']").text("Constitution ++");
        $("label[for='saveCha']").text("Charisma ++");
        weaponProf(sorcererProf);
    }//end else if
    else if(saveClass == "Warlock"){
        $("label[for='saveWis']").text("Wisdom ++");
        $("label[for='saveCha']").text("Charisma ++");
        weaponProf(warlockProf);
    }//end else if
      else if(saveClass == "Barbarian"){
        $("label[for='saveStr']").text("Strength ++");
        $("label[for='saveCon']").text("Constitution ++");
        weaponProf(barbProf);
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