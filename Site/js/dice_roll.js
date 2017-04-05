let die1, die2, die3, die4;

//Create a list of bonuses per race to automatically add to the diceRolls.

//All dwarves get this bonus
let dwarfCon = 2;
//Specialty race bonus
let hill_DwarfInt = 1;
let mountain_DwarfStr = 2;

//All elves get this bonus
let elfDex = 2;
//Specialty race bonus
let high_ElfInt = 1;
let wood_ElfWis = 1;

//All halflings get this bonus
let halflingDex = 2;
//Specialty race bonus
let lightfoot_HalflingCha = 1;
let stout_HalflingCon = 1;
//Declare race as a empty value
let race= '';

let mod = 0;

function modifiers(dt){
    if(dt == 1) mod = -5; else if(dt == 2 || dt == 3) mod = -4; else if(dt == 4 || dt == 4 ) mod = -3; else if(dt == 6 || dt == 7) mod = -2; else if(dt == 8 || dt == 9 ) mod = -1; else if(dt == 10 || dt == 11 ) mod = 0; else if(dt == 12 || dt == 13 ) mod = 1; else if(dt == 14 || dt == 15 ) mod = 2; else if(dt == 16 || dt == 17) mod = 3; else if(dt == 18 || dt == 19) mod = 4; else if (dt == 20 || 21) mod = 5; 
    return mod; 
}

//Get the value from the select box in creation.php
document.addEventListener("change", function(){
    race = document.getElementById("raceSelect").options.text;
});

//Generates a random number for what ever number of sided dies we want 
//This will keep it expandable if we want to open it up to other dice games
function dice(num) {
   let roll = Math.floor((Math.random() * num) + 1);
   return roll;
}

function diceRoll(clicked_id){
    let diceTotal = 0;
    //Roll each die individually, should probably be an array
    die1 = dice(6);
    die2 = dice(6);
    die3 = dice(6);
    die4 = dice(6);
    //Put the dice in an array
    let rolledDice = [die1, die2, die3, die4];
    //Sort from largest to smallest
    rolledDice.sort(function(a,b){return b-a});
    //Remove the smallest rolled die
    rolledDice.splice(-1, 1);
    for(let i = 0; i <rolledDice.length; i++){
        console.log(rolledDice[i]);
    }

    //Add up the three highest dice rolls.
    for (let i = 0; i < rolledDice.length; i++){
        diceTotal += rolledDice[i];
    }

     //race = "dwarf";
    var elementId = clicked_id;
    switch (elementId) {
        case "strBut":
        
        if(race === "Mountain_Dwarf"){
            diceTotal += Mountain_DwarfStr;
        }
        document.getElementById('strInput').value = diceTotal;
        break;

        case "dexBut":
        //Halflings and Elves get the same major bonus to dex, so we will use the one variable
        if(race === "elf" || race === "Wood_Elf" || race === "High_Elf" || race === "halfling" || race === "Lightfoot_Halfling" || race === "Stout_Halfling"){
            diceTotal += elfDex;
        }
        document.getElementById('dexInput').value = diceTotal;
        break;

        case "conBut":
        //Dwarves get +2 to constitution
        if(race === "dwarf" || race === "Mountain_Dwarf" || race === "Hill_Dwarf" ){
            diceTotal += dwarfCon;
        }
        else if (race === "Stout_Halfling"){
            diceTotal += Stout_HalflingCon;
        }
        document.getElementById('conInput').value = diceTotal;
            
            mod = modifiers(diceTotal);
            console.log("Your Constitution modifier is " + mod);
            
        break;

        case "wisBut":
        if(race === "Wood_Elf"){
            diceTotal += WoodElfWis;
        }
        document.getElementById('wisInput').value = diceTotal;
        break;
        case "intBut":
        //Might as well only have one variable here, Hill Dwarves and High Elves both get the same bonus.
        
        if(race === "Hill_Dwarf" || race === "High_Elf"){
            diceTotal += Hill_DwarfInt;_
        }
        document.getElementById('intInput').value = diceTotal;
        break;

        case "chaBut":
        if(race === "Lightfoot_Halfling"){
            diceTotals+= LightfootsHalflingCha;
        }
        document.getElementById('chaInput').value = diceTotal;
        break;

    }

    diceTotal = 0;
}

function deleteChar(){
    var r = confirm("Say goodbye to your character?");
    if(r == true){
        $.get("GetChar.php?action=delete", function(res){
            $("#charName").val("");
            $("#charAge").val("");
        });
    }
    else{
        console.log("cancelled");
    }

}
