let die1, die2, die3, die4;

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
    console.log("Four rolls");
    console.log(die1);
    console.log(die2);
    console.log(die3);
    console.log(die4);
    console.log("For loop");
    for(let i = 0; i<rolledDice.length; i++){
        console.log(rolledDice[i]);
    }
}
