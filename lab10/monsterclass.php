<?php 
  class Monster {                  // start the Monster class 
    public $num_of_eyes;             // properties 
    public $colour; 
 
  function __construct($num, $col) {     // constructor 
    $this->num = $num;                         // initialise number of eyes 
    $this->col = $col;                         // initialise colour 
  } 
 
  function describe () { 
    $ans = "The " . $this->col . " monster has " .  $this->num. " eyes.";  
    return $ans; 
  } 
?> 