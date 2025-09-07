<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<meta name="description" content="Web Programming :: Lab 2" /> 
<meta name="keywords" content="Web,programming" /> 
<title>Using variables, arrays and operators</title> 
</head> 
<body> 
<?php
$days = array("monday","tuesday","wendnesday","thursday","friday","saturday","sunday");
echo '<p>The Days of the week in English are: </p>';
echo "$days[0], ";
echo "$days[1], ";
echo "$days[2], ";
echo "$days[3], ";
echo "$days[4], ";
echo "$days[5], ";
echo "$days[6]. ";
echo '<p>The Days of the week in France are: </p>';
$days[0] = "Lundi";
$days[1] = " Mardi";
$days[2] = "Mercredi";
$days[3] = "Jeudi";
$days[4] = "Vendredi";
$days[5] = "Samedi";
$days[6] = "Dimanche";
echo "$days[0], ";
echo "$days[1], ";
echo "$days[2], ";
echo "$days[3], ";
echo "$days[4], ";
echo "$days[5], ";
echo "$days[6]. ";

?>