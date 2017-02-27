/**
 *  pages 11, 12, 155
 *  Bonuses 14, 173-174
 *  
 */

//WEAPON PROFICIENCEIES 
//In D&D5e Weapon Proficiencies (Bonus Attack stat earned if a character is considered "proficient" with their type of weapon [simple or martial]) are based on level. Any new character (0 exp) is considered level 1. Proficiencies are listed as follows...

/**
 * WEAPON PROFICIENCIES
 * Levels 1 - 4 (inclusive):   +2 Proficiency Bonus
 * Levels 5 - 8 (inclusive):   +3 Proficiency Bonus
 * Levels 9 - 12 (inclusive):  +4 Proficiency Bonus
 * Levels 13 - 16 (inclusive): +5 Proficiency Bonus
 * Levels 17 - 20 (inclusive): +6 Proficiency Bonus
 */

/////////////////
//Weapon Types //
/////////////////
/**
 *  Simple Melee Weapons
 *      - Club, Dagger, Greatclub, Handdaxe, Javelin, Light Hammer, Mace, Quarter Staff, Sickle, Spear
 *  Simple Ranged Weapons
 *      - Crossbow light, ,Dart ,Shortbow ,Sling
 *  Martial Melee Weapons
 *      - Battleaxe, Flail, Glaive, Greateaxe, Greatsword, Halberd, Lance, shortsword, Maul, Morningstar, Pike, Rapier, Scimtar, Shortsword, Trident, War pick, Warhammer, Whip
 *  Martial Ranged Weapons
 *      - Blowgun, Crossbow hand, Crossbow heavy, Longbow, Net
 */
//Four categories
//simple_mel, simple_rang, martial_mel, martial_rang
let weapons = {
    simple_mel: [
    "club", "dagger", "greatclub", "handaxe", "javelin", "light hammer", "mace", "quarter staff", "sickle", "spear"
    ],
    simple_rang: [    "light crossbow", "dart", "shortbow", "sling"
    ],
    martial_mel: [
    "battleaxe", "flail", "glaive", "greataxe", "greatsword", "halberd", "lance", "shortsword", "maul", "morningstar", "pike", "rapier", "scimtar", "shortsword", "trident", "war pick", "warhammer", "whip"
    ]
    martial_rang: [
    "blowgun", "hand crossbow", "heavy crossbow", "longbow", "net"
    ]
};//End Weapons

//Each class gets prof in two weapon types
let barbProf = ["simple weapons", "martial weapons"];
let bardProf = ["simple weapons", "hand crossbows", "longswords", "rapiers", "short swords"];
let clericProf = ["simple weapons"];
let druidProf = ["clubs", "daggers", "darts", "javelin", "maces", "quarter staff", "scimtars", "sickles", "slings", "spears"];
let fighterProf = ["simple_mel", "martial_mel", "simple_rang", "martial_rang"];
let monkProf = ["simple_mel", "shortsword"];
let paladinProf = ["simple_mel", "martial_mel", "simple_rang", "martial_rang"];
let rangerProf = ["simple_mel", "martial_mel", "simple_rang", "martial_rang"];
let rogueProf = ["simple_mel", "simple_rang", "hand crossbow", "longswords", "rapier", "shortswords"];
let sorcererProf = ["daggers", "darts", "slings", "quarterstaff", "light crossbow"];
let warlockProf = ["simple_mel", "simpel_rang"];
let wizardProf = ["daggers", "darts", "slings", "quarterstaffs", "light crossbows"];


