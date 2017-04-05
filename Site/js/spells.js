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

function spellSet(slctClass) {
    
    $.ajax( {
        type:'POST', 
        url:'ajax.php?action=spells', 
        data: {class: slctClass}, 
        success: function(r)
        {
            var spells = r.split(",");
            console.log(spells); 

            $('#spells').empty(); 

            for(var i = 0; i < spells.length; i++) {
                if(spells[i] != "") { 
                $('#spells').append('<input type="checkbox" name="spells" class="chkSpells" id="' + spells[i] + '" />' + spells[i]).append('<br />'); 
            }
            }
        }
    });

}
    
