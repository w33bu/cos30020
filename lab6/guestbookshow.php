<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="utf-8" /> 
  <meta name="description" content="Web application development" /> 
  <meta name="keywords" content="PHP" /> 
  <meta name="author"   content="Your Name" /> 
</head> 
<h1>Lab06 Task 2 - Guestbook</h1>
<hr>
<h2>View Guestbook</h2>
<body>
<?php
  $filename = "data/guestbook.txt";
  $allarray = array();
  if (file_exists($filename)){
    $namedata = array();
    $emaildata = array();
    $handle = fopen($filename, "r");

    while (!feof($handle)) {
        $onedata = fgets($handle);
        if ($onedata != "")
        {
            $data = explode(",", $onedata);
            $alldata[] = $data;
            $namedata[] = $data[0];
            $maildata[] = $data[1];
        }
    }
    sort($alldata);
    echo <<<BLOCK
      <table style="border:1px solid blue; background-color: white;">
        <tr style="border:1px solid blue">
          <td style="border:1px solid blue; font-weight:bold; text-align: center;">Number</td>
          <td style="border:1px solid blue; font-weight:bold; text-align: center;">Name</td>
          <td style="border:1px solid blue; font-weight:bold; text-align: center;">Email</td>
        </tr>
    BLOCK;
    $index = 0;
    foreach ($alldata as $data){
      ++$index;
        echo "
          <tr style=\"border:1px solid blue\">
            <td style=\"border:1px solid blue; font-weight:bold; text-align: center;\">$index</td>
            <td style=\"border:1px solid blue\">". stripslashes($data[1]). "</td>
            <td style=\"border:1px solid blue\">" . $data[0]. "</td>
          </tr>";
    }
    echo "</table>";
    fclose($handle);

  } else {
      echo '<p style="color:red">No file exist!</p>';
  }
?> 
<p><a href = 'guestbookform.php'>Add Another Visitor</a></p>
</body> 