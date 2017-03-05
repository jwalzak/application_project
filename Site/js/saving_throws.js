/**
 * Saves - Represents an attempt to resist a spell, trap, poison disease or similar thread
 * Saving throw, roll a D20 + modifier
 *
 * -------------------
 * CLASS SAVING THROWS
 * -------------------
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
 
let saveClass = "";
let result = 0;
let prof = 0;
let classProf;

let saveRoll = function(){
    let saveDie = 20;
    let result = dice(saveDie);
    //Will have to make different saves for each classes prof.
    document.getElementById('save').value = result;
}//End saveRoll

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
    if(saveClass == "Barbarian"){
        $("label[for='saveStr']").text("Strength ++");
        $("label[for='saveCon']").text("Constitution ++");
        weaponProf(barbProf);
    }//end if
	
    else if(saveClass == "Bard"){
        $("label[for='saveDex']").text("Dexterity ++");
        $("label[for='saveCha']").text("Charisma ++");
        weaponProf(bardProf);
    }//end else if
	
    else if(saveClass == "Cleric"){
        $("label[for='saveWis']").text("Wisdom ++");
        $("label[for='saveCha']").text("Charisma ++");
        weaponProf(clericProf);
    }//end else if
	
	else if(saveClass == "Druid"){
        $("label[for='saveWis']").text("Wisdom ++");
        $("label[for='saveInt']").text("Intelligence ++");
        weaponProf(druidProf);
    }//end else if
	
    else if(saveClass == "Fighter"){
        $("label[for='saveCon']").text("Constitution ++");
        $("label[for='saveStr']").text("Strength ++");
        weaponProf(fighterProf);
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
	
	else if (saveClass == "Wizard"){
        $("label[for='saveInt']").text("Intelligence ++");
        $("label[for='saveWis']").text("Wisdom ++");
        weaponProf(wizardProf);
    }//end else if
}//End classSaveThrow