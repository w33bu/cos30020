<?php
  if (isset($_POST["first"], $_POST["last"])) {
    $fn = $_POST["first"];    
    $ln  = $_POST["last"];    
	$filename = "data/guestbook.txt";
	if (empty($fn) || empty($ln))
	{
		echo "<p>you must enter your first and last name.</p>";
	}
	else
	{
    $handle = fopen($filename, "a"); 
    $data = $fn ."," .$ln. PHP_EOL;      
    fwrite($handle, $data);     
    fclose($handle);      
     echo "<p>guestbook list</p> ";    
    $handle = fopen($filename, "r"); 
     while (! feof($handle)) {   
            $data = fgets($handle);    
echo "<p>", $data, "</p>";  
    } 
    fclose($handle);   
	echo "thank you for signing our guestbook!<br /><br />";
	echo "<a href='showguestbook.php'>Return to the Guestbook</a>";
  }
  }
?> 
</body> 
</html> 