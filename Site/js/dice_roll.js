let die1, die2, die3, die4;


function dice(num) {
   let roll = Math.floor((Math.random() * num) + 1);
   return roll;
}

function diceRoll(){
    die1 = diceRoll(6);
    die2 = diceRoll(6);
    die3 = diceRoll(6);
    die4 = diceRoll(6);
}
