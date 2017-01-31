<?php 

require("connect.php"); 
$conn->select_db("heroschema");
    
        class Character {

        public $char_f_name;
        public  $char_l_name;
        public  $char_class;
        public  $char_race;
        public $char_gender;
        public $char_align;  
        public $char_history;
        public  $strength;
        public  $dexterity;
        public  $constitution;
        public  $wisdom;
        public  $intelligence;
        public  $charisma;

        }

        ?>