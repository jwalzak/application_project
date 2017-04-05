/** SKILLS 
 * 
 * Skills in D&D 5e are subsets of 6 Ability types...
 * ------------------------------
 * STRENGTH: Athletics
 * DEXTERITY: Acrobatics, Sleight of Hand, or Stealth
 * INTELLIGENCE: Arcana, History, Investigation, Nature, Religion
 * WISDOM: Animal Handling, Insight, Medicine, Perception, Survival
 * CHARISMA: Deception, Intimidation, Performance, Persuasion
 * 
 * 
 * Each class is granted a 'choice' of some of the skills listed above.
 * --------------------------------
 * BARBARIAN: Choose two from Animal Handling, Athletics, Intimidation, Nature, Perception, and Survival
 * BARD: Choose any three
 * CLERIC: Choose two from History, Insight, Medicine, Persuasion, and Religion
 * DRUID: Choose two from Arcana, Animal Handling, Insight, Medicine, Nature, Perception, Religion, and Survival
 * FIGHTER: Choose two from Acrobatics, Animal Handling, Athletics, History, Insight, Intimidation, Perception, and Survival
 * MONK: Choose two from Acrobatics, Athletics, History, Insight, Religion, and Stealth
 * PALADIN: Choose two from Athletics, Insight, Intimidation, Medicine, Persuasion, and Religion
 * RANGER: Choose three from Animal Handling, Athletics, Insight, Investigation, Nature, Perception, Stealth, and Survival
 * ROGUE: Choose four from Acrobatics, Athletics, Deception, Insight, Intimidation, Investigation, Perception, Performance, Persuasion, Sleight of Hand, and Stealth
 * SORCERER: Choose two from Arcana, Deception, Insight, Intimidation, Persuasion, and Religion
 * WARLOCK: Choose two skills from Arcana, Deception, History, Intimidation, Investigation, Nature, and Religion
 * WIZARD: Choose two from Arcana, History, Insight, Investigation, Medicine, and Religion
 */

//In honor of my brand new game show: "whats the class"

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

                  $('#skills').append('<input type="checkbox" name="skills" class="chkSkills" id="' + skills[i] + '" />' + skills[i]).append('<br />');

                    }
                         
                                        
                    }});

var chk = $('#skills input[type="checkbox"]'); 
chk.click(function(){
    if (chk.filter(":checked").length > 3);
    $(this).removeAttr("checked"); 

});
    }
    








/**HIT POINTS
 * Hit points (health) in D&D 5e is based on 3 things: character level, constitution, and class.
 * 
 * For example...
 * I am a new Cleric (level 1), the guidebook states that I get 8 hit points PLUS my constitution. 
 * If my Constitution stat were 2 my final Hit Points would be 8 + 2 = 10.
 * For all levels after 1st however, It would be 1d8 roll plus my constitution per level
 * 
 * HitPoints Rules for each class...
 * --------------------------------
 * BARBARIAN
 * Level 1: 12 + Constitution
 * Level 2+: 1d12 (or 7) + Constitution
 * 
 * FIGHTER, PALADIN, RANGER
 * Level 1: 10 + Constitution
 * Level 2+: 1d10 (or 6) + Constitution
 * 
 * BARD, CLERIC, DRUID, MONK, ROGUE, WARLOCK
 * Level 1: 8 + Constitution
 * Level 2+: 1d8 (or 5) + Constitution
 * 
 * SORCERER, WIZARD
 * Level 1: 6 + Constitution
 * Level 2+: 1d6 (or 4) + Constitution
 * 
 * PSEUDOCODE:
 * Get classes sorted into if statements/use previous statements to add dice roll info
 * After appending dice info to each class, when the class is selected and the roll button is hit the class then gets a specific result
 * This is added to the players constitution stat and then displayed
 */

//HP function tied to "Roll HP" onClick
//This is all assuming the player has 0hp and is above level 1
//after this sprint we can add level 1 and then twique this to do the math automatically, its all prepped
function rollHitPoints() {


// IT DOESNT WORK RIHT NOW CAUSE LEVELS ISNT THE NAME OF THE BOX
//This sets the roll button to work. Work it, roll button XDDDDDD
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
