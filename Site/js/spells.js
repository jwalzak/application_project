
 
 /** SPELLS 
 *
 * Spell Casting Classes
 * -------------------
 *
 * Barbarian: NONE
 * Bard: Charisma
 * Cleric: Wisdom
 * Druid: Wisdom
 * Fighter: Intelligence
 * Monk: Widsom
 * Paladin: Charisma
 * Ranger: Wisdom
 * Rogue: Intelligence
 * Sorcerer: Charisma
 * Warlock: Charisma
 * Wizard: Intelligence
 *
 **/

 //populate the select boxes

function spells(slct1,slct3) {
    var s1 = document.getElementById(slct1);
    var s3 = document.getElementById(slct3);
    s3.innerHTML = "";

        //change dhtml checkboxes on change of each class
        //change p tag on each class select
        if (s1.value == "Barbarian") {
            document.getElementById("spellText").innerHTML = "You cannot choose spells";

        } else if (s1.value == "Bard") {
            document.getElementById("spellText").innerHTML = "Choose 2 spells or cantrips";
            var spellArray = ["Blade Ward", "Dancing Lights", "Friends", "Light", "Mage Hand", "Mending", "Message", "Minor Illusion", "Prestidigitation", "True Strike", "Vicious Mockery"];

        } else if (s1.value == "Cleric") {
            document.getElementById("spellText").innerHTML = "Choose 2 centrips";
            var spellArray = ["Guidance", "Light", "Mending", "Resistance", "Sacred Flame", "Spare the Dying", "Thaumaturgy"];

        } else if (s1.value == "Druid") {
            document.getElementById("spellText").innerHTML = "Choose 2 cantrips";
            var spellArray = ["Druidcraft", "Guidance", "Mending", "Poison Spray", "Produce Flame", "Resistance", "Shillelagh", "Thorn Whip"];

        } else if (s1.value == "Fighter") {
            document.getElementById("spellText").innerHTML = "You cannot choose spells";

        } else if (s1.value == "Monk") {
            document.getElementById("spellText").innerHTML = "You cannot choose spells";

        } else if (s1.value == "Paladin") {
            document.getElementById("spellText").innerHTML = "You cannot choose spells";
            var spellArray = ["Bless", "Command","Compelled Duel", "Cure Wounds", "Detect Evil and Good", "Detect Magic", "Detect Poison and Disease", "Divine Favor", "Heroism", "Protection from Evil and Good", "Purify Food and Drink", "Searing Smite", "Shield of Faith", "Thunderous Smite", "Wrathful Smite"];

        } else if (s1.value == "Ranger") {
            document.getElementById("spellText").innerHTML = "You cannot choose spells";
            var spellArray = ["Alarm", "Animal Friendship", "Cure Wounds", "Detect Magic", "Detect Poison and Disease", "Ensnaring Strike", "Fog Cloud", "Goodberry", "Hail of Thorns", "Hunter’s Mark", "Jump", "Longstrider", "Speak with Animals"];

        } else if (s1.value == "Rogue") {
            document.getElementById("spellText").innerHTML = "You cannot choose spells";

        } else if (s1.value == "Sorcerer") {
            document.getElementById("spellText").innerHTML = "Choose 2 spells";
            var spellArray = ["Acid Splash", "Blade Ward", "Chill Touch", "Dancing Lights", "Fire Bolt", "Friends", "Light", "Mage Hand", "Mending", "Message", "Minor Illusion", "Poison Spray", "Prestidigitation", "Ray of Frost", "Shocking Grasp", "True Strike"];

        } else if (s1.value == "Warlock") {
            document.getElementById("spellText").innerHTML = "Choose 1 spell";
            var spellArray = ["Blade Ward", "Chill Touch", "Eldritch Blast", "Friends", "Mage Hand", "Minor Illusion", "Poison Spray", "Prestidigitation", "True Strike"];

        } else if (s1.value == "Wizard") {
            document.getElementById("spellText").innerHTML = "Choose 2 spells";
            var spellArray = ["Acid Splash", "Blade Ward", "Chill Touch", "Dancing Lights", "Fire Bolt", "Friends", "Light", "Mage Hand", "Mending", "Message", "Minor Illusion", "Poison Spray", "Prestidigitation", "Ray of Frost", "Shocking Grasp", "True Strike"];
        }
    
    
    for (var option2 in spellArray) {
        if (spellArray.hasOwnProperty(option2)) {
            var aspell = spellArray[option2];
            var checkbox2 = document.createElement("input");
            checkbox2.type = "checkbox";
            checkbox2.name = aspell;
            checkbox2.value = aspell;
            checkbox2.class = "";
            s3.appendChild(checkbox2);
    
            var label2 = document.createElement('label')
            label2.htmlFor = aspell;
            label2.appendChild(document.createTextNode(aspell));

            s3.appendChild(label2);
            s3.appendChild(document.createElement("br"));    
        }
    }

}