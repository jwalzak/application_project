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

        } else if (s1.value == "Bard") {
            document.getElementById("pText").innerHTML = "Choose 3 of the following...";
            var optionArray = ["Acrobatics", "Animal Handling", "Arcana", "Athletics", "Deception", "History", "Insight", "Intimidation", "Investigation", "Medicine", "Nature", "Perception", "Performance", "Persuasion", "Religion", "Sleight of Hand", "Stealth", "Survival"];

        } else if (s1.value == "Cleric") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["History", "Insight", "Medicine", "Persuasion", "Religion"];

        } else if (s1.value == "Druid") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Arcana", "Animal Handling", "Insight", "Medicine", "Nature", "Perception", "Religion", "Survival"];

        } else if (s1.value == "Fighter") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Acrobatics", " Animal Handling", "Athletics", "History", "Insight", "Intimidation", "Perception", "Survival"];

        } else if (s1.value == "Monk") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Acrobatics", "Athletics", "History", "Insight", "Religion", "Stealth"];

        } else if (s1.value == "Paladin") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Athletics", "Insight", "Intimidation", "Medicine", "Persuasion", "Religion"];

        } else if (s1.value == "Ranger") {
            document.getElementById("pText").innerHTML = "Choose 3 of the following...";
            var optionArray = ["Animal Handling", "Athletics", "Insight", "Investigation", "Nature", "Perception", "Stealth", "Survival"];

        } else if (s1.value == "Rogue") {
            document.getElementById("pText").innerHTML = "Choose 4 of the following...";
            var optionArray = ["Acrobatics", "Athletics", "Deception", "Insight", "Intimidation", "Investigation", "Perception", "Performance", "Persuasion", "Sleight of Hand", "Stealth"];

        } else if (s1.value == "Sorcerer") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Arcana", "Deception", "Insight", "Intimidation", "Persuasion", "Religion"];

        } else if (s1.value == "Warlock") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Arcana", "Deception", "History", "Intimidation", "Investigation", "Nature", "Religion"];

        } else if (s1.value == "Wizard") {
            document.getElementById("pText").innerHTML = "Choose 2 of the following...";
            var optionArray = ["Arcana", "History", "Insight", "Investigation", "Medicine", "Religion"];
        }

    
    for (var option in optionArray) {
        if (optionArray.hasOwnProperty(option)) {
            var pair = optionArray[option];
            var checkbox = document.createElement("input");
            checkbox.type = "checkbox";
            checkbox.name = pair;
            checkbox.value = pair;
            checkbox.class = "";
            s2.appendChild(checkbox);
    
            var label = document.createElement('label')
            label.htmlFor = pair;
            label.appendChild(document.createTextNode(pair));

            s2.appendChild(label);
            s2.appendChild(document.createElement("br"));    
        }
    }
}