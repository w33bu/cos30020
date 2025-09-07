<!DOCTYPE>

<html>
<head>
<title>Show Guest Book</title>
</head>
<body>
<?php
$myfile = "data/guestbook.txt";
if (is_readable($myfile)) 
{
	stripslashes("$myfile");
	readfile("$myfile");
} 
else 
{
    echo '$myfile is not readable';
}

?>
</body>
</html>