/**
 * -------------------
 * RACE BONUSES
 * -------------------
 *
 * Hill dwarf +2 con, +1 wis
 * Mountain dwarf +2 con +2 str
 * High elf +2 dex +1 int
 * Wood elf +2 dex +1 wis
 * Lightfoot halfling +2 dex +1 cha
 * Stout halfling +2 dex +1 con
 * Human +1 for everything
 * Dragonborn +2 str +1 cha
 * Forest gnome +1 dex +2 int
 * Rock gnome +1 con +2 int
 * Half elf +2 cha +1 to any two
 * Half orc +2 str +1 con
 * Tiefling +1 int +2 cha
 * 
 * Dwarves -- Dwarven Resilience -- advantage on saving throws against poison
 * Elves -- Fey Ancestry -- advantage on saving throws against charmed and magic can't put you to sleep
 * Halfling --braves -- Advantage on saving throws against being frightened
 * Human -- Stout Resilience -- Advantage on saving throws against poison damage 
 **/
 
let saveRace = "";
let e = document.getElementById("raceSelect");

//This function will trigger when the dropdown menu for race is changed
e.onchange=function() {
	saveRace = e.options[e.selectedIndex].value;
	raceSaveThrow();
}

//When the race dropdown is changed, add the corresponding bonus to the dice roll
function raceSaveThrow() {
    //Reset the text values for each saving throw label.
	$("label[for='rolledStr']").text("");
	$("label[for='rolledDex']").text("");
	$("label[for='rolledCon']").text("");
	$("label[for='rolledWis']").text("");
	$("label[for='rolledInt']").text("");
	$("label[for='rolledCha']").text("");
	
    //Write the additional scores to be added to the user's dice rolls
	//This will automatically be added to the score when entered into the database (later sprint)
    if(saveRace == "Hill Dwarf") {
        $("label[for='rolledWis']").text("+1");
        $("label[for='rolledCon']").text("+2");
    }
	
    else if(saveRace == "Mountain Dwarf") {
        $("label[for='rolledCon']").text("+2");
        $("label[for='rolledStr']").text("+2");
    }
	
    else if(saveRace == "High Elf") {
        $("label[for='rolledDex']").text("+2");
        $("label[for='rolledInt']").text("+1");
    }
	
	else if(saveRace == "Wood Elf") {
        $("label[for='rolledWis']").text("+1");
        $("label[for='rolledDex']").text("+2");
    }
	
    else if(saveRace == "Lightfoot Halfling") {
        $("label[for='rolledDex']").text("+2");
        $("label[for='rolledCha']").text("+1");
    }
	
	else if(saveRace == "Stout Halfling") {
        $("label[for='rolledDex']").text("+2");
        $("label[for='rolledCon']").text("+1");
    }
	
    else if(saveRace == "Human") {
        $("label[for='rolledWis']").text("+1");
        $("label[for='rolledCha']").text("+1");
		$("label[for='rolledInt']").text("+1");
		$("label[for='rolledDex']").text("+1");
		$("label[for='rolledCon']").text("+1");
		$("label[for='rolledStr']").text("+1");
    }
	
    else if(saveRace == "Dragonborn") {
        $("label[for='rolledStr']").text("+2");
        $("label[for='rolledCha']").text("+1");
    }
	
    else if(saveRace == "Forest Gnome") {
        $("label[for='rolledDex']").text("+1");
        $("label[for='rolledInt']").text("+2");
    }
	
    else if(saveRace == "Rock Gnome") {
        $("label[for='rolledCon']").text("+1");
        $("label[for='rolledInt']").text("+2");
    }
	
    else if(saveRace == "Half Elf") {
        $("label[for='rolledWis']").text("+1");
		$("label[for='rolledDex']").text("+1");
        $("label[for='rolledCha']").text("+2");
    }
	
	else if (saveRace == "Half Orc") {
        $("label[for='rolledStr']").text("+2");
        $("label[for='rolledCon']").text("+1");
    }
	
	else if (saveRace == "Tiefling") {
        $("label[for='rolledInt']").text("+1");
        $("label[for='rolledCha']").text("+2");
    }
}