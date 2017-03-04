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

function populate(slct1, slct2, slct3) {
    var s1 = document.getElementById(slct1);
	var s2 = document.getElementById(slct2);
    var s3 = document.getElementById(slct3);
	s2.innerHTML = "";
	s3.innerHTML = "";

        //change dhtml checkboxes on change of each class
        //change p tag on each class select
        if (s1.value == "Barbarian") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Animal Handling", "Athletics", "Intimidation", "Nature", "Perception", "Survival"];
			document.getElementById("spellText").innerHTML = "You cannot choose spells";

        } else if (s1.value == "Bard") {
            document.getElementById("pText").innerHTML = "Choose 3 of the following...";
            var optionArray = ["Acrobatics", "Animal Handling", "Arcana", "Athletics", "Deception", "History", "Insight", "Intimidation", "Investigation", "Medicine", "Nature", "Perception", "Performance", "Persuasion", "Religion", "Sleight of Hand", "Stealth", "Survival"];
			document.getElementById("spellText").innerHTML = "Choose 2 spells or cantrips";
			var spellArray = ["Blade Ward", "Dancing Lights", "Friends", "Light", "Mage Hand", "Mending", "Message", "Minor Illusion", "Prestidigitation", "True Strike", "Vicious Mockery"];

        } else if (s1.value == "Cleric") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["History", "Insight", "Medicine", "Persuasion", "Religion"];
			document.getElementById("spellText").innerHTML = "Choose 2 centrips";
			var spellArray = ["Guidance", "Light", "Mending", "Resistance", "Sacred Flame", "Spare the Dying", "Thaumaturgy"];

        } else if (s1.value == "Druid") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Arcana", "Animal Handling", "Insight", "Medicine", "Nature", "Perception", "Religion", "Survival"];
			document.getElementById("spellText").innerHTML = "Choose 2 cantrips";
			var spellArray = ["Druidcraft", "Guidance", "Mending", "Poison Spray", "Produce Flame", "Resistance", "Shillelagh", "Thorn Whip"];

        } else if (s1.value == "Fighter") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Acrobatics", " Animal Handling", "Athletics", "History", "Insight", "Intimidation", "Perception", "Survival"];
			document.getElementById("spellText").innerHTML = "You cannot choose spells";

        } else if (s1.value == "Monk") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Acrobatics", "Athletics", "History", "Insight", "Religion", "Stealth"];
			document.getElementById("spellText").innerHTML = "You cannot choose spells";

        } else if (s1.value == "Paladin") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Athletics", "Insight", "Intimidation", "Medicine", "Persuasion", "Religion"];
			document.getElementById("spellText").innerHTML = "You cannot choose spells";
			var spellArray = ["Bless", "Command""Compelled Duel", "Cure Wounds", "Detect Evil and Good", "Detect Magic", "Detect Poison and Disease", "Divine Favor", "Heroism", "Protection from Evil and Good", "Purify Food and Drink", "Searing Smite", "Shield of Faith", "Thunderous Smite", "Wrathful Smite"];

        } else if (s1.value == "Ranger") {
            document.getElementById("pText").innerHTML = "Choose 3 of the following...";
            var optionArray = ["Animal Handling", "Athletics", "Insight", "Investigation", "Nature", "Perception", "Stealth", "Survival"];
			document.getElementById("spellText").innerHTML = "You cannot choose spells";
			var spellArray = ["Alarm", "Animal Friendship", "Cure Wounds", "Detect Magic", "Detect Poison and Disease", "Ensnaring Strike", "Fog Cloud", "Goodberry", "Hail of Thorns", "Hunter’s Mark", "Jump", "Longstrider", "Speak with Animals"];

        } else if (s1.value == "Rogue") {
            document.getElementById("pText").innerHTML = "Choose 4 of the following...";
            var optionArray = ["Acrobatics", "Athletics", "Deception", "Insight", "Intimidation", "Investigation", "Perception", "Performance", "Persuasion", "Sleight of Hand", "Stealth"];
			document.getElementById("spellText").innerHTML = "You cannot choose spells";

        } else if (s1.value == "Sorcerer") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Arcana", "Deception", "Insight", "Intimidation", "Persuasion", "Religion"];
			document.getElementById("spellText").innerHTML = "Choose 2 spells";
			var spellArray = ["Acid Splash", "Blade Ward", "Chill Touch", "Dancing Lights", "Fire Bolt", "Friends", "Light", "Mage Hand", "Mending", "Message", "Minor Illusion", "Poison Spray", "Prestidigitation", "Ray of Frost", "Shocking Grasp", "True Strike"];

        } else if (s1.value == "Warlock") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Arcana", "Deception", "History", "Intimidation", "Investigation", "Nature", "Religion"];
			document.getElementById("spellText").innerHTML = "Choose 1 spell";
			var spellArray = ["Blade Ward", "Chill Touch", "Eldritch Blast", "Friends", "Mage Hand", "Minor Illusion", "Poison Spray", "Prestidigitation", "True Strike"];

        } else if (s1.value == "Wizard") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Arcana", "History", "Insight", "Investigation", "Medicine", "Religion"];
			document.getElementById("spellText").innerHTML = "Choose 2 spells";
			var spellArray = ["Acid Splash", "Blade Ward", "Chill Touch", "Dancing Lights", "Fire Bolt", "Friends", "Light", "Mage Hand", "Mending", "Message", "Minor Illusion", "Poison Spray", "Prestidigitation", "Ray of Frost", "Shocking Grasp", "True Strike"];
        }
    
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
		$('input[type=checkbox]').on('change', function (e) {
		if ($('input[type=checkbox]:checked').length > 2) {
			$(this).prop('checked', false);
			alert("allowed only 2");
		}
		});
	}

	for (var option in spellArray) {
		if (spellArray.hasOwnProperty(option)) {
            var aspell = spellArray[option];
            var checkbox = document.createElement("input");
            checkbox.type = "checkbox";
            checkbox.name = aspell;
            checkbox.value = aspell;
            checkbox.class = "";
            s3.appendChild(checkbox);
    
            var label = document.createElement('label')
            label.htmlFor = aspell;
            label.appendChild(document.createTextNode(aspell));

            s3.appendChild(label);
            s3.appendChild(document.createElement("br"));    
        }
	}

}