<h1>guessing game</h1>
<p>enter a number between 1 and 100, then press the guess button.</p>
<p>
<form action="" method="post">
<input type="text" name="num">
<button type="submit" name="submit">Guess</button>
<button type="reset" name="Reset">Reset</button>
</form>
</p>
 <?php
	session_start();
	  if (!isset ($_SESSION["count"])) { 
    $_SESSION["count"] = 0;  
  }   
  	  if (!isset ($_SESSION["randnum"])) { 
    $_SESSION["randnum"] = rand(1, 100);;  
  } 
    $x   = $_SESSION["randnum"];
    $num = '';
	$count = $_SESSION["count"];

if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    if ($num < $x) 
    {
		$count++;
		$_SESSION["count"] = $count;
       echo " Your number is lower, number of guess: $count <br />";
    } elseif ($num > $x) 
    {
		$count++;
		$_SESSION["count"] = $count;
        echo " Your number is higher, number of guess: $count <br />";
    } elseif ($num == $x) 
    {
        echo " Congratulations! You guessed the hidden number. <br />";
		echo " number of guess: $count <br />";
    } else 
    {
        echo " You never set a number! <br />";
    }
}
    ?>
<p><a href="giveup.php">give up</a></p>         
<p><a href="startover.php">start over</a></p>  