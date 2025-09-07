<?php

function palindrome($input) {
    $middle = strlen($input) / 2;
    $firstHalf = substr($input, 0, floor($middle));
    $secondHalf = substr($input, ceil($middle));
    return $firstHalf == strrev($secondHalf);
}

$num = $_POST['perfect'];
if (Palindrome($num)){ 
    echo "$num is a perfect Palindrome"; 
}
else { 
echo "$num is Not a perfect Palindrome"; 
}
 
?> 