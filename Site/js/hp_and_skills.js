
var whatsTheClass; 

function skillSet(slctClass) {

console.log(slctClass);
window.whatsTheClass = slctClass; 

$.ajax({
                    type: "POST",
                    url: 'ajax.php?action=skills',
                    data: {class : slctClass},
                    success: function(r)
                    {
                    //console.log(r);
                    var skills = r.split(",");
                  

                    console.log(skills);    
                    $('#skills').empty(); 
                    for (var i = 0; i < skills.length; i++) {

                  $('#skills').append('<input type="checkbox" name="skills[]" value="' + skills[i] + '" class="chkSkills" id="' + skills[i] + '" />' + skills[i]).append('<br />');

                    }//end for
                     var limit = 3;
$('input.chkSkills').on('change', function(evt) {
   if($(this).siblings(':checked').length >= limit) {
       this.checked = false;
       alert("You are limited to 3 skills.");
   }
});
                                                              

                    }//end success
                });


    }
    
function rollHitPoints() {


//roll button features different depending on char so far
    var levels = document.getElementById('leveling'); 
    if(levels.value >= 2){

        if (window.whatsTheClass == "Barbarian") {
            let roll = dice(12);
            let parsedRoll = parseFloat(roll);
            document.getElementById('hitPointText').value = (parsedRoll + mod + " HP");
            console.log('Class: ' + whatsTheClass + '   Hit Dice: 12   Roll: ' + parsedRoll + '  Constitution modifier: ' + mod  + "  HP: " + (parsedRoll + mod));
        }

        else if (window.whatsTheClass == "Fighter" || window.whatsTheClass == "Paladin" || window.whatsTheClass == "Ranger") {
            let roll = dice(10);
            let parsedRoll = parseFloat(roll);
            document.getElementById('hitPointText').value = (parsedRoll + mod + " HP");
            console.log('Class: ' + whatsTheClass + '  Hit Dice 10    Roll: ' + parsedRoll + '   Constitution modifier: ' + mod + "  HP: " + (parsedRoll + mod));
            }

        else if (window.whatsTheClass == "Bard" || window.whatsTheClass == "Cleric" || window.whatsTheClass == "Druid" || window.whatsTheClass == "Monk" || window.whatsTheClass == "Rogue" || window.whatsTheClass == "Warlock") {
            let roll = dice(8);
            let parsedRoll = parseFloat(roll);
            document.getElementById('hitPointText').value = (parsedRoll + mod + " HP");
            console.log('Class: ' + whatsTheClass + '  Hit Dice: 8   Roll: ' + parsedRoll + '  Constitution modifier: ' + mod + "  HP: " + (parsedRoll + mod));
        
        }

        else if (window.whatsTheClass == "Sorcerer" || window.whatsTheClass == "Wizard") {
            let roll = dice(6);
            let parsedRoll = parseFloat(roll);
            document.getElementById('hitPointText').value = (parsedRoll + mod + " HP");
            console.log('Class: ' + whatsTheClass + ' Hit Dice: 6   Roll: ' + parsedRoll + ' Constitution modifier: ' + mod + "  HP: " + (parsedRoll + mod));
        
        }

    }//end level-evaluator

    //below else evaluates if level is less than zero, pull class and use level1 req's to generate
    //the hp stat. Extra statements but succinct.
    else {

        if (window.whatsTheClass == "Barbarian"){
            document.getElementById('hitPointText').value = mod + 12;
        }

        else if (window.whatsTheClass == "Fighter" || window.whatsTheClass == "Paladin" || window.whatsTheClass == "Ranger"){
            document.getElementById('hitPointText').value = mod + 10;
        }

        else if (window.whatsTheClass == "Bard" || window.whatsTheClass == "Cleric" || window.whatsTheClass == "Druid" || window.whatsTheClass == "Monk" || window.whatsTheClass == "Rogue" || window.whatsTheClass == "Warlock") {
            document.getElementById('hitPointText').value = mod + 8;
        }

        else if (window.whatsTheClass == "Sorcerer" || window.whatsTheClass == "Wizard") {
            document.getElementById('hitPointText').value = mod + 6;
        }
        
    }
    
}//end main function
