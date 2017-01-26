let die1, die2, die3, die4;
let diceTotal = 0;



//Generates a random number for what ever number of sided dies we want 
//This will keep it expandable if we want to open it up to other dice games
function dice(num) {
   let roll = Math.floor((Math.random() * num) + 1);
   return roll;
}

function diceRoll(){
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
    for(let i = 0; i<rolledDice.length; i++){
        console.log(rolledDice[i]);
    }

    //Add up the three highest dice rolls.
    for (let i = 0; i < rolledDice.length; i++){
        diceTotal += rolledDice[i];
    }

    console.log("The total of the three highest dice is " + diceTotal);
}

//Create a list of bonuses per race to automatically add to the diceRolls.

//Dwarf
let dwarfCon = 2;
let hillDwarfInt = 1;
//TODO: Hill dwarves get +1 to max health and +1 to health on every level up
//I'm currently not too sure how to implement it.
let mtnDwarfStr = 2;

//Elf
let elfDex = 2;
let highElfInt = 1;
let woodElfWis = 1;

//Halfling
let halflingDex = 2;
let lightfootHalflingCha = 1;
let stoutHalflingCon = 1;

//Human





//Create a list of bonuses per class to automatically add to the diceRolls.


