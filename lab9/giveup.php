<?php
session_start();
  $number = $_SESSION["randnum"]; 
echo "the hidden number was: '$number'";
?>
<p><a href="startover.php">start over</a></p>  