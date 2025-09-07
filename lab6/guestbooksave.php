<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="utf-8" /> 
  <meta name="description" content="Web application development" /> 
  <meta name="keywords" content="PHP" /> 
  <meta name="author"   content="Your Name" /> 
  <title>TITLE</title> 
</head> 
<body> 
<h1>Web Programming - Lab06</h1> 
<?php
    if (isset($_POST["email"], $_POST["name"])) {   
      $email = $_POST["email"];  
      $name  = $_POST["name"];        
      $filename = "data/guestbook.txt";    
	  	if (empty($email) || empty($name))
	{
		echo "<p>you must enter your name and email address!<br />use the browser's go back button to return to the guestbook form</p>";
	}
	else
	{
      $alldata = array();               
      if (file_exists($filename)) {          
		$emaildata = array();
		$namedata = array();	
		$handle = fopen($filename, "r");       
        while (!feof($handle)) {              
          $onedata = fgets($handle);       
          if ($onedata != "") {          
            $data = explode(",",$onedata);                  
            $alldata [] = $data;     
            $emaildata[] = $data [0];
			$namedata[] = $data [1];	
          }   
   } 
        fclose ($handle);                
   $newdata = !(in_array($email, $emaildata)) && !(in_array($name."\n", $namedata));
 } else { 
   $newdata = true; 
 } 
      if ($newdata) { 
        $handle = fopen($filename, "a");    
        $data = $email . "," . $name . "\n"; 
                                         
        fputs($handle, $data);             
        fclose ($handle);                 
    
  
    $alldata [] = array($email, $name);  
    
    echo "<p>thank you for signing our guest book</p>"; 
	echo "<a href='guestbookshow.php'>Return to the Guestbook</a>";
 } else { 
   echo "<p>name or email already exists</p>"; 
    }  
    } 
    } 
?> 
</body> 
</html> 