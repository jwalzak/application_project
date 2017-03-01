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
 
let saveClass = "cleric";
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
document.addEventListener("change", function(){
  let e = document.getElementById("slct1");
  saveClass = e.options[e.selectedIndex].value;
  classSaveThrow();
});

//When the class dropdown menu is changed the saving throw profs will be updated. At the bottom of the page.

function classSaveThrow(){


$("label[for='saveChar']").text("Charisma");
$("label[for='saveChar']").text("Wisdom");
$("label[for='saveChar']").text("Dexterity");
$("label[for='saveInt']").text("Intelligence");
$("label[for='saveStr']").text("Strength");
$("label[for='saveCon']").text("Constitution");

    if (saveClass == "wizard"){
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
        $("label[for='saveCon']").text("Strength ++");
        
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
    }//End else if

    else if(saveClass == "bard"){
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
        $("label[for='saveChar']").text("Charisma ++");
    }//Else if

    else if(saveClass == "druid"){
       $("#saveDex").click(function(e){
            e.preventDefault();
        });
       $("#saveStr").click(function(e){
            e.preventDefault();
        });
       $("#savechar").click(function(e){
            e.preventDefault();
        });
       $("#saveCon").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveWis']").text("Wisdom ++");
        $("label[for='saveInt']").text("Intelligence ++");
    }//Else if

    else if(saveClass == "monk"){
       $("#saveInt").click(function(e){
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
        $("label[for='saveDex']").text("Dexterity ++");
        $("label[for='saveStr']").text("Strength ++");
    }//Else if

    else if(saveClass == "paladin"){
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
        $("label[for='saveChar']").text("Charisma ++");
    }//Else if

    else if(saveClass == "ranger"){
       $("#saveChar").click(function(e){
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
    }//Else if

    else if(saveClass == "rogue"){
       $("#saveInt").click(function(e){
            e.preventDefault();
        });
       $("#saveStr").click(function(e){
            e.preventDefault();
        });
       $("#saveChar").click(function(e){
            e.preventDefault();
        });
       $("#saveCon").click(function(e){
            e.preventDefault();
        });
        $("label[for='saveDex']").text("Dexterity ++");
        $("label[for='saveWis']").text("Wisdom ++");
    }//Else if

    else if(saveClass == "sorcerer"){
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
        $("label[for='saveChar']").text("Charisma ++");
    }//Else if

    else if(saveClass == "warlock"){
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
        $("label[for='saveChar']").text("Charisma ++");
    }//Else if
   
}//End classSaveThrow