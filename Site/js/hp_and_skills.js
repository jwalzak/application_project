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
var whatsTheClass = ""; 

//populate the select boxes
    function populate(slct1, slct2) {
        var s1 = document.getElementById(slct1);
        var s2 = document.getElementById(slct2);
        s2.innerHTML = "";

        //change dhtml checkboxes on change of each class
        //change p tag on each class select
        if (s1.value == "Barbarian") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Animal Handling", "Athletics", "Intimidation", "Nature", "Perception", "Survival"];
            window.whatsTheClass = "Barbarian";

        } else if (s1.value == "Bard") {
            document.getElementById("pText").innerHTML = "Choose 3 of the following...";
            var optionArray = ["Acrobatics", "Animal Handling", "Arcana", "Athletics", "Deception", "History", "Insight", "Intimidation", "Investigation", "Medicine", "Nature", "Perception", "Performance", "Persuasion", "Religion", "Sleight of Hand", "Stealth", "Survival"];
            window.whatsTheClass = "Bard";

        } else if (s1.value == "Cleric") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["History", "Insight", "Medicine", "Persuasion", "Religion"];
            window.whatsTheClass = "Cleric";

        } else if (s1.value == "Druid") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Arcana", "Animal Handling", "Insight", "Medicine", "Nature", "Perception", "Religion", "Survival"];
            window.whatsTheClass = "Druid";

        } else if (s1.value == "Fighter") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Acrobatics", " Animal Handling", "Athletics", "History", "Insight", "Intimidation", "Perception", "Survival"];
            window.whatsTheClass = "Fighter";

        } else if (s1.value == "Monk") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Acrobatics", "Athletics", "History", "Insight", "Religion", "Stealth"];
            window.whatsTheClass = "Monk";

        } else if (s1.value == "Paladin") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Athletics", "Insight", "Intimidation", "Medicine", "Persuasion", "Religion"];
            window.whatsTheClass = "Paladin";

        } else if (s1.value == "Ranger") {
            document.getElementById("pText").innerHTML = "Choose 3 of the following...";
            var optionArray = ["Animal Handling", "Athletics", "Insight", "Investigation", "Nature", "Perception", "Stealth", "Survival"];
            window.whatsTheClass = "Ranger";

        } else if (s1.value == "Rogue") {
            document.getElementById("pText").innerHTML = "Choose 4 of the following...";
            var optionArray = ["Acrobatics", "Athletics", "Deception", "Insight", "Intimidation", "Investigation", "Perception", "Performance", "Persuasion", "Sleight of Hand", "Stealth"];
            window.whatsTheClass = "Rogue";

        } else if (s1.value == "Sorcerer") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Arcana", "Deception", "Insight", "Intimidation", "Persuasion", "Religion"];
            window.whatsTheClass = "Sorcerer";

        } else if (s1.value == "Warlock") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Arcana", "Deception", "History", "Intimidation", "Investigation", "Nature", "Religion"];
            window.whatsTheClass = "Warlock";

        } else if (s1.value == "Wizard") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Arcana", "History", "Insight", "Investigation", "Medicine", "Religion"];
            window.whatsTheClass = "Wizard";
        }

    //places arrays on screen
    for (var option in optionArray) {
        if (optionArray.hasOwnProperty(option)) {
            var skills = optionArray[option];
            var checkbox = document.createElement("input");
            checkbox.type = "checkbox";
            checkbox.name = skills;
            checkbox.value = skills;
            checkbox.class = "skill";
            s2.appendChild(checkbox);
    
            var label = document.createElement('label')
            label.htmlFor = skills;
            label.appendChild(document.createTextNode(skills));

            s2.appendChild(label);
            s2.appendChild(document.createElement("br"));    
        }

//Limits checkboxing dynamically
$('input[type=checkbox]').on('change', function (e) {
    if ($('input[type=checkbox]:checked').length > 2) {
        $(this).prop('checked', false);
        alert("allowed only 2");
    }
});
    }//end FOR
}//end POPULATE



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

        if (window.whatsTheClass == "Barbarian") {
            let roll = dice(12);
            document.getElementById('hitPointText').value = (roll + " HP");
        }

        else if (window.whatsTheClass == "Fighter" || window.whatsTheClass == "Paladin" || window.whatsTheClass == "Ranger") {
            let roll = dice(10);
            document.getElementById('hitPointText').value = (roll + " HP");
        }

        else if (window.whatsTheClass == "Bard" || window.whatsTheClass == "Cleric" || window.whatsTheClass == "Druid" || window.whatsTheClass == "Monk" || window.whatsTheClass == "Rogue" || window.whatsTheClass == "Warlock") {
            let roll = dice(8);
            document.getElementById('hitPointText').value = (roll + " HP");
        }

        else if (window.whatsTheClass == "Sorcerer" || window.whatsTheClass == "Wizard") {
            let roll = dice(6);
            document.getElementById('hitPointText').value = (roll + " HP");
        }
}//end function

        //temporary Jasons dice thingy
            function dice(num) {
                let roll = Math.floor((Math.random() * num) + 1);
                return roll;
        }