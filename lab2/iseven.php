<!DOCTYPE html>
<html>
<body>


<?php
$num = "2001";


if (is_numeric($num))
{
	round($num);
    if($num % 2 == 0){
echo "this is even number ";

}else
{
echo "this is odd number";
}
 }
 else
 { 
 echo $num . " is not numeric";
}
    

?>